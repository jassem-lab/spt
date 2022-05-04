<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');
?>
<script>
function Supprimer(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/supprimer_commande.php?ID="+id ;
			}			    
	  }
function Valider(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/valider_commande.php?ID="+id ;
			}			    
	  }	  
function Refuser(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/refuser_commande.php?ID="+id ;
			}			    
	  }	  	  
function SupprimerDet(id,idcommande)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/supprimer_detcommande.php?ID="+id+"&idcommande="+idcommande ;
			}			    
	  }			  
</script>	
		<div class="page-wrapper">
			<div class="page-content">
				
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"   style="color:#0d7cbc;border-color: #8833ff;"><a href="dashbord.php"><i class="bx bx-home-alt" style="color:#0d7cbc"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Gestion des commandes</li>
							</ol>
						</nav>
					</div>
				</div>
<?php
$reqstat="";
$stat="";
if(isset($_POST['stat'])){
		if(is_Numeric($_POST['stat'])){
			$stat	=	$_POST['stat'];
			$reqstat=	" and  etat=".$stat;
		}
}

?>				
					<form name="SubmitContact" class="" method="post" action="" onSubmit="" style=''>
						Filtrage par:
							<div class="col-md-12 row">
								<div class="col-md-4">
									<b>Statut</b><br>
									<select class="single-select" data-placeholder="" name="stat" >
										<option value="" >Séléctionner un statut</option>	
										<option value="0">En cours</option>	
										<option value="1">Validé</option>
										<option value="2">Annulé</option>
										<option value="3">Réfusé</option>	
								</div>									
								<div class="col-md-3">
									<input name="SubmitContact" type="submit" id="submit" class="btn btn-primary btn-sm " style="background-color:#0d7cbc;border-color: #8833ff;" value="Filtrer">											
								</div>																								
							</div>	
					</form>	
					<?php if($reqstat<>""){ ?>
						Statut sélectionneé :
						<?php
						if($stat==0){  echo 'En cours'; }
						if($stat==1){  echo 'Validé'; }
						if($stat==2){  echo 'Annulé'; }
						if($stat==3){  echo 'Réfusé'; }
						
						?>
					<?php } ?>					
				<div class="row">
					<hr><b>Liste des commandes</b>
					<div class="col-md-12 row">
					<div class="table-responsive mt-3">
					   <table class="table align-middle mb-0" style="border: solid 1px;">
						   <thead class="table-light">
							   <tr style="color:#525f7f">
								   <th>Date </th>
								   <th>Nom et prénom</th>
								   <th>Nombre des articles</th>
								   <th>Total</th>
								   <th>Avec livraison</th>
								   <th>Etat</th>
								   <th>Détails</th>
								   <th>Actions</th>
							   </tr>
						   </thead>
						   <tbody>						
<?php
	$membre="";
	$livraison="";
	$etat="";
	$nbrarticle=0;
	$req1="select * from commandes where 1=1 ".$reqstat." order by id desc";
	$query1=mysql_query($req1);
	while($enreg1=mysql_fetch_array($query1))
	{
		$id					=	$enreg1["id"] 	;
		if($enreg1['livraison']==0){
			$livraison	=	"Non";
		} else{
			$livraison	=	"Oui";
		}

		if($enreg1['etat']==0){
			$etat	=	"En cours";
		} elseif($enreg1['etat']==1){
			$etat	=	"<b style='color:green'>Validé</b>";
		} elseif($enreg1['etat']==2){
			$etat	=	"<b style='color:orange'>Annulé</b>";
		} else{
			$etat	=	"<b style='color:red'>Réfusé</b>";
		}		
		
		
		$reqperson="select * from detail_personnel where idcommande=".$id;
		$queryperson=mysql_query($reqperson);
		while($enregperson=mysql_fetch_array($queryperson)){
			$membre	=	$enregperson['nom'].' '.$enregperson['prenom'];
		}
		
		$reqarticle="select * from detail_commande where idcommande=".$id;
		$queryarticle=mysql_query($reqarticle);
		$nbrarticle = mysql_num_rows($queryarticle);
	
?>			
								<tr style="border: solid 1px;">
									 <td><?php echo $enreg1["date"];?></td>
									 <td><?php echo $membre;?></td>
									 <td><?php echo $nbrarticle;?></td>
									  <td><?php echo number_format($enreg1["total"],3,'.',' ');?></td>
									 <td><?php echo $livraison;?></td>
									  <td><?php echo $etat;?></td>
									 <td>
										<div class="col">
											<!-- Button trigger modal -->
											<b class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $id;?>">
												Détail personnel
											</b>
											<!-- Modal -->
											<div class="modal fade" id="exampleModal<?php echo $id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Détails personnels</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
														</div>
														<div class="modal-body">
															<div class="table-responsive mt-3">
															   <table class="table align-middle mb-0" style="border: solid 0.1px;">
																   <thead class="table-light">
																	   <tr style="color:#525f7f">
																		   <th>Nom et prénom</th>
																		   <th>E-mail</th>
																		   <th>Téléphone</th>
																		   <th>Adresse</th>
																		   <th>Gouvernorat</th>
																		   <th>Rue et région</th>
																	   </tr>
																   </thead>
																   <tbody>		
																	<?php
																		$ree="select * from detail_personnel where idcommande=".$id;
																		$quee=mysql_query($ree);
																		while($enn=mysql_fetch_array($quee)){	
																			$reqg="select * from gouvernorat where id=".$enn["gouvernorat"];
																			$queryg=mysql_query($reqg);
																			while($enregg=mysql_fetch_array($queryg)){
																				$ville				=	$enregg["gouvernorat"] ;
																			}																			
																	?>
																		<tr>
																			<td><?php echo $enn['nom'].' '.$enn['prenom']; ?></td>
																			<td><?php echo $enn['mail']; ?></td>
																			<td><?php echo $enn['telephone']; ?></td>
																			<td><?php echo $enn['adresse']; ?></td>
																			<td><?php echo $ville; ?></td>
																			<td><?php echo $enn['rue'].' '.$enn['region']; ?></td>
																		</tr>
																		<?php } ?>
																	</tbody>
																</table>
															</div>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
														</div>
													</div>
												</div>
											</div>
										</div>									 
									 </td>
									 <td>
									 <?php if($enreg1['etat']==0){ ?>
										<a href="Javascript:Valider('<?php echo $id; ?>')" style="color:green">Valider</a>	
										<a href="Javascript:Refuser('<?php echo $id; ?>')" style="color:red">Refuser</a>
										<a href="det_commande.php?ID=<?php echo $id; ?>"><i class="bx bxs-edit" style="color:#0d7cbc"></i></a>	
									    <a href="Javascript:Supprimer('<?php echo $id; ?>')"><i class="bx bxs-trash"  style="color:red"></i></a>										
									 <?php } ?>

									 </td>
								</tr>
<?php
}
?>
							</tbody>
						</table>	
					</div>	
				</div>
				</div>
		</div>
	</div>
<?php
	include('menu_footer/footer_ad.php');
?>

