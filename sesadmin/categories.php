<?php
	include('menu_footer/menu_ad.php');
	include('connexion/cn.php');
?>
<script>
function Supprimer(id)
	  {
			if(confirm('Confirmez-vous cette action?'))
			{
				document.location.href="pages_supp/supprimer_categorie.php?ID="+id ;
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
								<li class="breadcrumb-item active" aria-current="page" style="color:black">Gestion des catégories</li>
							</ol>
						</nav>
					</div>
				</div>
				
				
<?php
	if(isset($_GET['ID'])){
		$id = $_GET['ID'];
	}else{
		$id = 0;
	}
	if(isset($_POST['enregistrer_mail'])){	
		
		$categorie				=	addslashes($_POST["categorie"]) ;	
		
		if($id==0){	
		
			$idcategorie = 0;
			$reqmax="select max(id) as idcategorie from categorie";
			$querymax=mysql_query($reqmax);
			if(mysql_num_rows($querymax)>0){
				while($enregmax=mysql_fetch_array($querymax)){
					$idcategorie = $enregmax['idcategorie'] + 1;
				}
			} else{
					$idcategorie = 1;
			}
				$sql="INSERT INTO `categorie`(`id`,`categorie`) VALUES ('".$idcategorie."','".$categorie."')";
				$req=mysql_query($sql);
				
		} else{
			
			$sqldelete="DELETE FROM marques_par_categorie where idcategorie=".$id;
			$requete = mysql_query($sqldelete) or die( mysql_error()) ;				
			
		}
		echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="?suc=succes" </SCRIPT>';
	}

	$categorie			=	"" ;	
	$image				=	"" ;	
	
	$req="select * from categorie where id=".$id;
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query))
	{
		$categorie			=	$enreg["categorie"] ;	
		$image				=	$enreg["logo"] ;	
	}

?>				

				<div class="row">
				<form action="" method="POST" enctype="multipart/form-data"> 
					<div class="col-md-12 row">
						<?php if(isset($_GET['suc'])){ ?>
							<?php if($_GET['suc']=='succes'){ ?>
								<font color="green" ><center>L'ajout de categorie a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
							<?php if($_GET['suc']=='succes1'){ ?>	
								<font color="green" ><center>La modification a été effectué avec succès !</center></font><br /><br />
							<?php } ?>	
						<?php } ?>						
						<hr>
						<div class="col-md-4">
							<b>Nom de categorie(*)</b><br>
							<input type="text" class="form-control" name="categorie" id="categorie" value="<?php echo $categorie;?>" required >
						</div>															
						<div class="col-md-2"><br>
								<button type="submit" onclick="CreateTodo();" class="btn btn-primary"   style="background-color:#0d7cbc;border-color: #8833ff;">Enregistrer</button>
								<input class="form-control" type="hidden" name="enregistrer_mail">
						</div>						
					</div>
				</form>	
<?php
$reqCateogirie="";
$nomcategorie="";
if(isset($_POST['nomcategorie'])){
	if(($_POST['nomcategorie'])){
		$nomcategorie	=	$_POST['nomcategorie'];
		$reqCateogirie	=	" and  categorie like '%".$nomcategorie."%'";
	}
}

?>				
					<form name="SubmitContact" class="" method="post" action="" onSubmit="" style=''>
						Filtrage par:
						<div class="col-xl-12">
							<div class="row">
								<div class="col-xl-5">
									<b>Nom de categorie</b>
									<input type="text" class="form-control" name="nomcategorie" value="<?php echo $nomcategorie; ?>">
								</div>										
								<div class="col-xl-3">
								  <b></b><br>
									<input name="SubmitContact" type="submit" id="submit" class="btn btn-primary btn-sm " style="background-color:#0d7cbc;border-color: #8833ff;" value="Filtrer">											
								</div>																								
							</div>	
						</div>
					</form>	
					<hr>				
					<hr><b>Liste de catégorie</b>
					<div class="col-md-12 row">
					<div class="table-responsive mt-3">
					   <table class="table align-middle mb-0" style="border: solid 1px;">
						   <thead class="table-light">
							   <tr style="color:#525f7f">
								   <th>Nom de categorie</th>
								   <th>Actions</th>
							   </tr>
						   </thead>
						   <tbody>						
<?php
	$req1="select * from categorie where 1=1 ".$reqCateogirie." order by id";
	$query1=mysql_query($req1);
	while($enreg1=mysql_fetch_array($query1))
	{
		$id					=	$enreg1["id"] 	;
		$categorie			=	$enreg1["categorie"] ;	
		$image				=	$enreg1["logo"] ;

		$num=0;
		$reqc="select * from souscategories where categorie=".$id;
		$queryc=mysql_query($reqc);
		$num=mysql_num_rows($queryc);
	
?>			
								<tr style="border: solid 1px;">
									 <td><?php echo $categorie;?></td>

								
									 <td>
										<a href="categories.php?ID=<?php echo $id; ?>"><i class="bx bxs-edit" style="color:#0d7cbc"></i></a>
										<?php if($num==0){?>
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
