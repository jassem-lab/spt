<html lang="zxx">
	<?php session_start(); ?>
	<?php include('connexion/cn.php'); ?>
<?php 
	// $mail		=	"" ;	
	// $url		=   "" ;
	// $Signature  = 	"";
	// $nom		= 	"";
	// // $logo       = 	"";
	// $tel1		= 	"";
	// $tel2		= 	"";
	// $tel3		= 	"";
	// $mail1		= 	"";
	// $mail2		= 	"";
	// $mail3		= 	"";
	// $adresse1	= 	"";
	// $adresse2	= 	"";
	// $adresse3	= 	"";
	// $frais_livraison		= 	"";
	// $description_livraison	= 	"";
	// $minimiser_stock	= 	"";
	// $panier_stock		= 	"";	
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
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
       <title>STAR POOL Tunisia</title>
		<script src="https://www.google.com/recaptcha/api.js?render=6LfHQ_oeAAAAAOXnj60dcbXcR5iwe7w2beLcN8Ju"></script>
		<script>
		grecaptcha.ready(function() {
			grecaptcha.execute('6LfHQ_oeAAAAAOXnj60dcbXcR5iwe7w2beLcN8Ju', {action: 'homepage'}).then(function(token) {
					var recaptchaResponse = document.getElementById('recaptchaResponse');
					recaptchaResponse.value = token;
			});
		});
		</script> 		   
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
		<META NAME="description" CONTENT="star pool, Traitement des eaux, vente et installation materiels des piscines, matrériels et accessoires pour piscines">
		<META NAME="keywords" CONTENT="matrériels et accessoires pour piscines, matrériels et accessoires pour piscines sousse, Piscine, Piscines, Piscine sousse, Piscine Tunisie, Piscine souss Tunisie ,Accessoire piscine, Entretien Piscine, installation piscine,  installation piscine tunisie, installation piscine sousse, installation piscine sousse tunisie, traitement des eaux, traitement des eaux sousse, traitement des eaux tunisie, Osmoseurs, Osmoseurs sousse, Osmoseurs piscine sousse, Adoucisseurs, Adoucisseurs sousse, Adoucisseurs piscine sousse, Fontaine, Fontaine sousse, Robinetterie, Robinetterie sousse, Filtration, Filtration sousse, Filtration piscine, Filtration piscine sousse, Filtration piscine sousse tunisie, Adoucisseur watermark, Adoucisseur watermark sousse, Adoucisseur watermark piscine, Adoucisseur watermark tunisie, Filtre à sable, Filtre à sable sousse, Filtre à sable piscine, Filtre à sable sousse tunisie, Filtre à sable piscine tunisie, Station d’osmose, Station d’osmose piscine, Station d’osmose piscine sousse, Station d’osmose tunisie, Traitement d’eau industriel, Traitement d’eau industriel sousse, Traitement d’eau industriel tunisie, Traitement d’eau industriel sousse tunisie, Traitement d’eau domestique, Traitement d’eau domestique sousse, Traitement d’eau domestique tunisie, Traitement d’eau domestique sousse tunisie, SAV, SAV sousse, SAV sousse tunisie, service apres vente, service apres vente sousse, service apres vente sousse tunisie, service apres vente tunisie, service apres vente tunisie piscine"> 
		<META NAME="author" CONTENT="MACSI Centre">
		<META NAME="copyright" CONTENT="">
		<META NAME="revisit-after" CONTENT="7 days">
		<META NAME="identifier-url" CONTENT="http://www.spt-piscines.com">
		<META NAME="reply-to" CONTENT="macsi.centre@hexabyte.tn">
		<META NAME="Robots" CONTENT="all">
		<META http-equiv="Content-Language" CONTENT="fr">		
    </head>
   <body>
        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                    </div>
                </div>
            </div>
        </div>        
        <header class="top-header" style="background-color: #d0dde1!important;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="header-right" style="background-color: #d0dde1!important;">
                            <div class="header-right-card">
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
                    </div>

                    <div class="col-lg-2">
                        <div class="top-social-link" style="background-color: #d0dde1!important;">
                            <ul>
                                <li>
                                    <a class="color-blue" href="<?php echo $facebook; ?>" target="_blank">
                                        <i class='bx bxl-facebook' style="margin-top: 7px;"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="color-pink" href="<?php echo $facebook; ?>" target="_blank">
                                        <i class='bx bxl-instagram' style="margin-top: 7px;"></i>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Top Header End -->
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.php" class="logo">
                    <img src="<?php echo 'sesadmin/'.$logo ; ?>" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav" style="background-color:white!important">
                <div class="container-fluid m-0">
                    <nav class="container-max navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="index.php">
                            <img src="<?php echo 'sesadmin/'.$logo ; ?>" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item"><a href="index.php" class="nav-link active">Accueil </a></li>
                                <li class="nav-item"><a href="about.php" class="nav-link">Présentation </a></li>
								<li class="nav-item"><a href="services.php" class="nav-link">Services </a></li>
								<li class="nav-item"><a href="produits.php" class="nav-link">Produits </a></li>
                                <li class="nav-item"><a href="devis.php" class="nav-link">Devis </a></li>
								<li class="nav-item"><a href="contact.php" class="nav-link">Contact </a></li>
                            </ul>

                            

                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
		