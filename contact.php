<?php
include('menu_footer/menu.php');
?>

 
        <!-- Contact Section -->
        <div class="contact-section pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>contact</span>
                    <h2 class="margin-auto color-title-blue">Information de société</h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-card"  style="height: 280px;">
                            <i class="flaticon-global"></i>
                            <h3><?php echo $adresse1; ?></h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="contact-card"  style="height: 280px;">
                            <i class="flaticon-email"></i>
                            <h3><a href="mailto:<?php echo $mail1; ?>">Email:<h3><?php echo $mail1; ?></h3></a></h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                        <div class="contact-card"  style="height: 280px;">
                            <i class="flaticon-phone-call"></i>
                            <h3><a href="tel:<?php echo $tel1; ?>"><?php echo $tel1; ?></a></h3>
                            <h3><a href="tel:<?php echo $tel2; ?>"><?php echo $tel2; ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section End -->

<?php
	if(isset($_POST['submit'])){

		$nom			=	addslashes($_POST["name"]) ;
		$mail			=	addslashes($_POST["mail"]) ;
		$telephone		=	addslashes($_POST["telephone"]) ;
		$objet		=	addslashes($_POST["objet"]) ;
		$message		=	addslashes($_POST["message"]) ;
		$date			=	date("Y-m-d H:i:s");

		
		
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {
		$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
		$recaptcha_secret = '6LfHQ_oeAAAAAHhoumg6ob0g2i7HrkgigZpJtKg';
		$recaptcha_response = $_POST['recaptcha_response'];

		$recaptcha = file_get_contents($recaptcha_url.'?secret='.$recaptcha_secret.'&response='.$recaptcha_response);
		$recaptcha = json_decode($recaptcha);	
		
		if ($recaptcha->score >= 0.5) {		
		
		
		$sql="INSERT INTO `contact`(`dateheure`, `nom`, `email`, `telephone`, `objet`, `message`) VALUES 
		('".$date."','".$nom."','".$mail."','".$telephone."','".$objet."','".$message."')";
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
				$message ='Bonjour '.$nom.','."<br>"; 
				$headers = 'From: "Contact SPT " <'.$email_reply.'>'."\n"; 
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
			<!-- Contact Area -->
        <div class="contact-area bg-section pt-100" style="margin-bottom:50px">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="contact-left-side">
                            <h2>Contactez-Nous  </h2>      
									<?php if(isset($_GET['err'])){ ?>
										<?php if($_GET['err']=='sucss'){ ?>
										<h1 class="h1 caption" style="color:green;font-size: 17px;">Votre message a été envoyée avec succés &nbsp;</h1><br /><br />
										<?php } ?>						
									<?php } ?>	                           
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-right" style="margin-bottom: 110px;">
                            <div class="contact-form">
                                <form id="" action="" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <i class='bx bx-user'></i>
                                                <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Votre Nom et prénom">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <i class='bx bx-envelope-open'></i>
                                                <input type="email" name="mail" id="email" class="form-control" required data-error="Please enter your email" placeholder="Votre Email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <i class='bx bxs-phone'></i>
                                                <input type="text" name="telephone" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Votre Téléphone">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-6 col-sm-6">
                                            <div class="form-group">
                                                <i class='bx bx-file'></i>
                                                <input type="text" name="objet" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Votre Objet">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class='bx bx-chat'></i>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Saisir votre Message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
        
                                        <div class="col-lg-12 col-md-12 text-center">
                                            <button type="submit" class="default-btn default-bg-black " name="submit">
                                                Envoyer votre message
                                            </button>
											<input type="hidden" name="recaptcha_response" id="recaptchaResponse">		
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Area End -->

        <div class="map-area" style="margin-bottom:50px">
            <div class="container-fluid p-0">
                <iframe src="https://maps.google.com/maps?q=Route%20de%20Tunis%20Km%20131%20Akouda%20Sousse%204022%20Sousse,%20Tunisie&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>    
            </div>
        </div>
		
<?php
include('menu_footer/footer.php');
?>