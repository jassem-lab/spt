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
                                        <h3>S??CURIT?? DE VOTRE PISCINE</h3>
                                        <p>En mati??re de s??curit??, nous avons toujours fait de la pr??vention. Toutes les piscines (nouvelles ou anciennes) doivent ??tre ??quip??es d???un syst??me de s??curit?? homologu??. En tant que propri??taire, vous devez ??quiper votre piscine d???un syst??me de s??curit??. Malgr?? la raret?? des probl??mes, mieux vaut ne pas prendre de risque. STAR POOL Tunisia offre quelques conseils pour que votre piscine ne soit que plaisir. </p>
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
                                        <p>Ne laissez jamais seul un enfant dans, ou autour, d???une piscine, m??me pour quelques secondes. Apr??s la baignade, sortez les objets flottants. Posez ?? c??t?? de la piscine une perche, une bou??e et un t??l??phone pour alerter les secours. Apprenez les gestes qui sauvent.</p>
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
                                        <h3>La pr??vention ?</h3>
                                        <p>Pour limiter au maximum les risques, la pr??vention reste la meilleur arme. Parlez ?? votre enfant. Expliquez-lui comment nager et comment se reposer sur le dos. Enseignez-lui ?? s???accrocher ?? la margelle pour se diriger ensuite vers la sortie du bassin, montrez lui comment sortir facilement. Apprenez-lui ?? nager d??s l?????ge de 4 ans et faites-lui prendre conscience du danger. Avec 10 fois moins d???accidents en bassin qu????? la mer ou dans les lacs, la piscine vous offre un formidable moyen de former et d???apprendre ?? vos enfants les gestes qui sauvent.</p>
                                       
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
                                        <h3>Les syst??mes de s??curit??</h3>
                                        <p>STAR POOL Tunisia peut vous conseiller quatre types de dispositifs de s??curit?? : la barri??re de s??curit??, les alarmes, la couverture de s??curit?? et l???abri. Mais aucun syst??me de s??curit?? ne saurait mieux vous prot??ger vous m??me ou votre famille que votre vigilance.</p>
                                        
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
                                        <h3>Les barri??res de s??curit??</h3>
                                        <p>es cl??tures filets sont discr??tes et n???offrent aucune prise pour grimper. Elles ont un effet voile transparent pour une meilleure surveillance.
Vous pr??f??rez une barri??re transparente pour profiter de la vue sur, ou depuis, votre piscine ? Nous vous conseillons les barri??res en polym??thacrylate (Plexiglas). Elles sont ultra ??l??gantes et l??g??res. Nos barri??res STAR POOL Tunisia s???int??grent facilement au d??cor de votre bassin.</p>
                                        
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
                                        <h3>Les couvertures de s??curit??</h3>
                                        <p>Les b??ches ?? barres de s??curit?? s???installent en quelques minutes et gardent votre piscine propre, ??t?? comme hiver. Les barres transversales sont en aluminium et constituent un syst??me de protection efficace contre les chutes accidentelles.
Les couvertures d???hivernage sont particuli??rement r??sistantes et inalt??rables. ??l??ment de s??curit?? indispensable contre les chutes accidentelles, elles font passer l???hiver ?? votre piscine dans les meilleures conditions. </p>
                                        
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