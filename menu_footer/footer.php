<?php 
	$mail		=	"" ;	
	$url		=   "" ;
	$Signature  = 	"";
	$nom		= 	"";
	$logo       = 	"";
	$tel1		= 	"";
	$tel2		= 	"";
	$tel3		= 	"";
	$mail1		= 	"";
	$mail2		= 	"";
	$mail3		= 	"";
	$adresse1	= 	"";
	$adresse2	= 	"";
	$adresse3	= 	"";
	$frais_livraison		= 	"";
	$description_livraison	= 	"";
	$minimiser_stock	= 	"";
	$panier_stock		= 	"";	
	$req="select * from parametre where id=1";
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query))
	{
		$mail		=	$enreg["mail"] ;
		$url		=	$enreg["url"] ;	
		$signature	=	$enreg["signature"] ;

		$nom		=	$enreg["nom"] ;
		$logo		=	$enreg["logo"] ;
		$tel1		=	$enreg["tel1"] ;
		$tel2		=	$enreg["tel2"] ;	
		$tel3		=	$enreg["tel3"] ;
		$mail1		=	$enreg["mail1"] ;
		$mail2		=	$enreg["mail2"] ;
		$mail3		=	$enreg["mail3"] ;
		$adresse1	=	$enreg["adresse1"] ;
		$adresse2	=	$enreg["adresse2"] ;
		$adresse3	=	$enreg["adresse3"] ;
		$frais_livraison		=	$enreg["frais_livraison"] ;
		$description_livraison	=	$enreg["description_livraison"] ;
		$panier_stock		=	$enreg["panier_stock"] ;
		$minimiser_stock	=	$enreg["minimiser_stock"] ;	
		$facebook	=	$enreg["facebook"] ;
		$instagram	=	$enreg["instagram"] ;	
		$youtube	=	$enreg["youtube"] ;		
	}
?> 

 <!-- Footer Area -->
        <footer class="footer-area">
            <div class="footer-top">
                <div class="container">
                    <div class="row align-items-center">
                       <!-- <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="footer-logo">
                                <a href="index.html"> 
                                    <img src="assets/img/footer-logo.png" alt="Images">
                                </a>
                            </div>
                        </div>-->

                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="footer-top-card">
                                <i class="flaticon-calendar"></i>
                                <span>Lundi - Vendredi:</span>
                                <h3>08:00 - 17:00</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="footer-top-card">
                                <i class="flaticon-alarm-clock"></i>
                                <span>Samedi:</span>
                                <h3>08:00 - 14:00</h3>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-6">
                            <div class="footer-top-card">
                                <i class="flaticon-padlock"></i>
                                <span>Dimanche:</span>
                                <h3>FERMÉ</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-middle pt-100 pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-md-4">
                            <div class="footer-list">
                                <h3>STAR POOL Tunisia</h3>
                                <ul>
                                    <li>
                                        <i class='bx bx-plus' ></i>
                                        <a href="index.php">Accueil</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-plus' ></i>
                                        <a href="about.php">PRÉSENTATION</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-plus' ></i>
                                        <a href="services.php">SERVICES</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-plus' ></i>
                                        <a href="produits.php"> PRODUITS</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-plus' ></i>
                                        <a href="devis.php">DEVIS</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-plus' ></i>
                                        <a href="contact.php">CONTACT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 col-md-4">
                            <div class="footer-list">
                                <h3>Information</h3>
                                <ul>
                                    <li>
                                        <div class="head-icon">
                                            <i class='flaticon-phone-call'></i>
                                        </div>
                                        <a href="tel:<?php echo $tel1; ?>" style="color:#3c7cbc"><?php echo $tel1; ?></a>
                                    </li>
									<?php if($tel2<>""){ ?>
                                    <li>
                                        <div class="head-icon">
                                            <i class='flaticon-phone-call'></i>
                                        </div>
                                        <a href="tel:<?php echo $tel1; ?>" style="color:#3c7cbc"><?php echo $tel2; ?></a>
                                    </li>									
									<?php }  ?>
									<?php if($tel3<>""){ ?>
                                    <li>
                                        <div class="head-icon">
                                            <i class='flaticon-phone-call'></i>
                                        </div>
                                        <a href="tel:<?php echo $tel1; ?>" style="color:#3c7cbc"><?php echo $tel3; ?></a>
                                    </li>									
									<?php }  ?>									
                                    <li>
                                        <div class="head-icon">
                                            <i class='flaticon-email'></i>
                                        </div>
                                        <a href="mailto:<?php echo $mail1; ?>" style="color:#3c7cbc"><?php echo $mail1; ?></a>
                                    </li>                                    
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="footer-map">
                               <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Route%20de%20Tunis%20Km%20131%20Akouda%20Sousse%204022%20Sousse,%20Tunisie&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="bottom-social-link">
                                <ul>
                                    <li>
                                        <a class="color-blue" href="<?php echo $facebook; ?>" target="_blank">
                                            <i class='bx bxl-facebook' style="margin-top:5px"></i>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a class="color-pink" href="<?php echo $instagram; ?>" target="_blank">
                                            <i class='bx bxl-instagram' style="margin-top:5px"></i>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-8 col-md-8">
                            <div class="bottom-text">
                                <p>
                                    Copyright © 2022
                                    <a href="https://deltawebit.com/contact.php" target="_blank">Delta Web Information Technology</a> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->


        <!-- Jquery Min JS -->
        <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
        <!-- Bootstrap Bundle JS -->
        <script src="assets/js/bootstrap.bundle.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Wow Min JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="assets/js/meanmenu.js"></script>
        <!-- Magnific Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Ajaxchimp Min JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator Min JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact Form JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
        
    </body>
</html>