<?php
include('menu_footer/menu.php');
?>

 <section class="checkout-area pt-100 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="checkout-user">
							<i class="fas fa-sign-out-alt"></i>
							<span>Demander un devis en ligne </span>
						</div>
					</div>
				</div>
<?php
	if(isset($_POST['submit'])){

		$nom			=	addslashes($_POST["nom"]) ;
		$prenom			=	addslashes($_POST["prenom"]) ;
		$mail			=	addslashes($_POST["mail"]) ;
		$telephone		=	addslashes($_POST["telephone"]) ;
		$choix	     	=	addslashes($_POST["choix"]) ;
		$choix2	     	=	addslashes($_POST["choix2"]) ;
		$adresse		=	addslashes($_POST["adresse"]) ;
		$message		=	addslashes($_POST["message"]) ;
		$date			=	date("Y-m-d H:i:s");

		
		
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
		$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
		$recaptcha_secret = '6LfHQ_oeAAAAAHhoumg6ob0g2i7HrkgigZpJtKg';
		$recaptcha_response = $_POST['recaptcha_response'];

		$recaptcha = file_get_contents($recaptcha_url.'?secret='.$recaptcha_secret.'&response='.$recaptcha_response);
		$recaptcha = json_decode($recaptcha);	
		
		if ($recaptcha->score >= 0.5) {		
		
		
		$sql="INSERT INTO `devis`( `date`, `nom`, `prenom`, `mail`, `telephone`, `choix`, `choix2`, `adresse`, `message`) VALUES
		('".$date."','".$nom."','".$prenom."','".$mail."','".$telephone."','".$choix."','".$choix2."','".$adresse."','".$message."')";
		$req=mysql_query($sql);
		
	
			$mail_admin = "";
			$signature  = "";
			$url		= "";
			$req="select * from parametre where id=1";
			$query=mysql_query($req);
			while($enreg=mysql_fetch_array($query))
			{
				$mail_admin	=	'commercial.spt@gmail.com' ;
				$signature	=	$enreg["signature"] ;
			}	
			
				$destinataire2='macsi-centre@hexabyte.tn';	
				$email_reply=$mail_admin;	
				$SUJET = "Devis en ligne";
				$message ='Bonjour '.$nom.' '.$prenom.','."<br>"; 
				$headers = 'From: "Devis SPT " <'.$email_reply.'>'."\n"; 
				$headers .= 'Return-Path: <'.$mail_admin.'>'."\n"; 
				$headers .= 'MIME-Version: 1.0'."\n"; 
				$headers .='Content-Type: text/html; charset="UTF-8"'."\n";
				$headers .='Content-Transfer-Encoding: 8bit';
				$message .= 'Votre devis en ligne  a été crée avec succés '."<br><br>";
				$message .= 'Cordialement'."<br><br>".$signature;
				mail($mail,$SUJET,$message,$headers);
				mail($destinataire,$SUJET,($message),$headers);
				mail($destinataire2,$SUJET,($message),$headers);			
			} else {
				phpAlert("Vérifier le captcha SVP!"); 
			} 
		}		
		 echo '<SCRIPT LANGUAGE="JavaScript">document.location.href="?err=sucss" </SCRIPT>';
		
	}

?>
				<form action="" method="POST">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="billing-details">
								<h3 class="title">Details de devis</h3>
									<?php if(isset($_GET['err'])){ ?>
										<?php if($_GET['err']=='sucss'){ ?>
										<h1 class="h1 caption" style="color:green;font-size: 17px;">Votre devis a été crée avec succés &nbsp;</h1><br /><br />
										<?php } ?>						
									<?php } ?>	
								<div class="row">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Services <span class="required">*</span></label>
											<div class="select-box">
												<select class="form-control" name="choix">
													<option value="">Sélectionner votre choix</option>
													<option value="Piscines">Piscines</option>
													<option value="Traitement des eaux">Traitement des eaux</option>
													<option value="Les deux">Les deux</option>
												</select>
											</div>
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Demande <span class="required">*</span></label>
											<div class="select-box">
												<select class="form-control"  name="choix2">
													<option value="">Sélectionner votre choix</option>
													<option value="Installation">Installation</option>
													<option value="Achat">Achat</option>
													<option value="Les deux">Les deux</option>
												</select>
											</div>
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Nom <span class="required">*</span></label>
											<input type="text" class="form-control" name="nom">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Prénom <span class="required">*</span></label>
											<input type="text" class="form-control" name="prenom">
										</div>
									</div>

									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Téléphone</label>
											<input type="number" class="form-control"  name="telephone">
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label>Email <span class="required">*</span></label>
											<input type="email" class="form-control"  name="mail">
										</div>
									</div>

									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Adresse <span class="required">*</span></label>
											<textarea type="text" class="form-control"  name="adresse"></textarea>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label>Message <span class="required">*</span></label>
											<textarea name="message" id="notes" cols="30" rows="5" placeholder="Message" class="form-message"   name="message"></textarea>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<button class="order-btn three" type="submit" name="submit" style="width: 92px;border-radius: 50px;background-color: blue;color: white;">
											Envoyer
										</button>	
										<input type="hidden" name="recaptcha_response" id="recaptchaResponse">						
									</div>
								</div>
							</div>
						</div>

						
					</div>
				</form>
			</div>
		</section>
		<!-- Checkout Area End -->


<?php
include('menu_footer/footer.php');
?>