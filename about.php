<?php
include('menu_footer/menu.php');
?>

        
      
<?php
	$presentation="";$i=0;
	$req="select * from presentation";
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query)){
		$presentation = $enreg['presentation'];
	}
?>	
        <!-- About Area -->
        <div class="about-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="about-content">
                            <div class="section-title">
                                <h2 style="color:#3c7cbc">STAR POOL Tunisia</h2>
                            </div>
 
                            <div class="about-sedule">
                               <?php echo $presentation; ?>
                            </div>

                            <div class="about-btn">
                                <a href="contact.php" class="default-btn default-bg-black"  style="background-color:#3c7cbc">
                                    CONTACTEZ NOUS
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="about-img">
                            <div class="about-single">
                                <img src="<?php echo 'sesadmin/'.$logo; ?>" alt="About Images">
                                <div class="about-dots">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->

        <section class="project-area pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span  style="color:#3c7cbc">Projets</span>
                    <h2 class="margin-auto"  style="color:#3c7cbc">Piscine traitée par SPT</h2>
                    <p class="margin-auto"  style="color:black">
                       Nous assurons la satisfaction de nos clients 
                    </p>
                </div>

                <div class="row pt-45">
<?php
	$url="";$i=0;
	$req="select * from videos";
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query)){
		$url = $enreg['url'];
	
?>							
                    <div class="col-lg-4 col-sm-6">
<iframe width="420" height="315" style="border-radius: 60px;"
								src="https://www.youtube.com/embed/<?php echo $url; ?>">
							</iframe>
                    </div>
<?php } ?>



                </div>
            </div>
        </section>



<?php
include('menu_footer/footer.php');
?>