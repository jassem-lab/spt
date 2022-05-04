<?php
include('menu_footer/menu.php');
?>

 
        <!-- management Area -->
        <div class="management-area ptb-100">
            <div class="container">
                <div class="management-title">
                    <div class="section-title text-center">
                        <h2  style="color:#3c7cbc">Nos services </h2>                      
                    </div>
                </div>
                <div class="management-slider owl-carousel owl-theme pt-45">
<?php
	$image="";$i=0;
	$req="select * from services";
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query)){
		$image = 'sesadmin/'.$enreg['image'];
		if(file_exists($image)){
			$i++;
?>				
					
                    <div class=" management-item">
                        <div class=" management-img">
                            <img src="<?php echo $image; ?>" alt="Images" style="height: 500px;border-radius: 20px;">
                            <div class=" management-content">
                                <span><?php echo $enreg['service']; ?></span>
                                <h3>
                                   <?php echo $enreg['presentation']; ?>
                                </h3>
                            </div>
                        </div>
                    </div>
<?php } }?>

                </div>
            </div>
        </div>
        <!-- management Area End --> 

			<section class="facility-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span>OUR SERVICES</span>
                    <h2>Facilities & Services</h2>
                    <p class="margin-auto">
                        Get awesome provides exceptional pool maintenance pool 
                        cleaning and pool equipment repair for the Area! 
                    </p>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-4 col-sm-6">
                        <div class="facility-item">
                            <ul>
                                <li>
                                    <div class="facility-icon">
                                        <i class="flaticon-swimming-pool"></i>
                                    </div>
                                    <div class="facility-content">
                                        <h3>SÉCURITÉ DE VOTRE PISCINE</h3>
                                        <p>En matière de sécurité, nous avons toujours fait de la prévention. Toutes les piscines (nouvelles ou anciennes) doivent être équipées d’un système de sécurité homologué. En tant que propriétaire, vous devez équiper votre piscine d’un système de sécurité. Malgré la rareté des problèmes, mieux vaut ne pas prendre de risque. STAR POOL Tunisia offre quelques conseils pour que votre piscine ne soit que plaisir. </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="facility-item">
                            <ul>
                                <li>
                                    <div class="facility-icon">
                                        <i class="flaticon-lounger"></i>
                                    </div>
                                    <div class="facility-content">
                                        <h3>LA VIGILANCE AVANT TOUT</h3>
                                        <p>Ne laissez jamais seul un enfant dans, ou autour, d’une piscine, même pour quelques secondes. Après la baignade, sortez les objets flottants. Posez à côté de la piscine une perche, une bouée et un téléphone pour alerter les secours. Apprenez les gestes qui sauvent.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="facility-item">
                            <ul>
                                <li>
                                    <div class="facility-icon">
                                        <i class="flaticon-swimming-pool-1"></i>
                                    </div>
                                    <div class="facility-content">
                                        <h3>La prévention ?</h3>
                                        <p>Pour limiter au maximum les risques, la prévention reste la meilleur arme. Parlez à votre enfant. Expliquez-lui comment nager et comment se reposer sur le dos. Enseignez-lui à s’accrocher à la margelle pour se diriger ensuite vers la sortie du bassin, montrez lui comment sortir facilement. Apprenez-lui à nager dès l’âge de 4 ans et faites-lui prendre conscience du danger. Avec 10 fois moins d’accidents en bassin qu’à la mer ou dans les lacs, la piscine vous offre un formidable moyen de former et d’apprendre à vos enfants les gestes qui sauvent.</p>
                                       
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="facility-item">
                            <ul>
                                <li>
                                    <div class="facility-icon">
                                        <i class="flaticon-woodland"></i>
                                    </div>
                                    <div class="facility-content">
                                        <h3>Les systèmes de sécurité</h3>
                                        <p>STAR POOL Tunisia peut vous conseiller quatre types de dispositifs de sécurité : la barrière de sécurité, les alarmes, la couverture de sécurité et l’abri. Mais aucun système de sécurité ne saurait mieux vous protéger vous même ou votre famille que votre vigilance.</p>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="facility-item">
                            <ul>
                                <li>
                                    <div class="facility-icon">
                                        <i class="flaticon-south-america"></i>
                                    </div>
                                    <div class="facility-content">
                                        <h3>Les barrières de sécurité</h3>
                                        <p>es clôtures filets sont discrètes et n’offrent aucune prise pour grimper. Elles ont un effet voile transparent pour une meilleure surveillance.
Vous préférez une barrière transparente pour profiter de la vue sur, ou depuis, votre piscine ? Nous vous conseillons les barrières en polyméthacrylate (Plexiglas). Elles sont ultra élégantes et légères. Nos barrières STAR POOL Tunisia s’intègrent facilement au décor de votre bassin.</p>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6">
                        <div class="facility-item">
                            <ul>
                                <li>
                                    <div class="facility-icon">
                                        <i class="flaticon-bed"></i>
                                    </div>
                                    <div class="facility-content">
                                        <h3>Les couvertures de sécurité</h3>
                                        <p>Les bâches à barres de sécurité s’installent en quelques minutes et gardent votre piscine propre, été comme hiver. Les barres transversales sont en aluminium et constituent un système de protection efficace contre les chutes accidentelles.
Les couvertures d’hivernage sont particulièrement résistantes et inaltérables. Élément de sécurité indispensable contre les chutes accidentelles, elles font passer l’hiver à votre piscine dans les meilleures conditions. </p>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Facility Area End -->


<?php
include('menu_footer/footer.php');
?>