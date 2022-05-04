<?php
include('menu_footer/menu.php');
?>


<!-- Home Area -->
<div class="home-area">
    <div class="container-fluid m-0 p-0">
        <div class="home-slider owl-carousel owl-theme">

            <?php
	$image="";$i=0;
	$req="select * from slider";
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query)){
		$image = 'sesadmin/'.$enreg['image'];
		if(file_exists($image)){
			$i++;
?>

            <div class="slider-item item-bg<?php echo $i; ?>"
                style="background-image: url(<?php echo $image; ?>);height: 900px;">
                <div class="slider-content banner-content">
                    <!--<h1 style="color:yellow;">STAR POOL Tunisia</h1>-->
                </div>
            </div>
            <?php } }?>

        </div>
    </div>
</div>
<!-- Home Area End -->
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
                        <a href="contact.php" class="default-btn default-bg-black" style="background-color:#3c7cbc">
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


<!-- management Area -->
<div class="management-area ptb-100">
    <div class="container">
        <div class="management-title">
            <div class="section-title text-center">
                <h2 style="color:#3c7cbc">Nos services </h2>
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

<!-- Project Area -->
<section class="project-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span style="color:#3c7cbc">Projets</span>
            <h2 class="margin-auto" style="color:#3c7cbc">Piscine traitée par SPT</h2>
            <p class="margin-auto" style="color:black">
                Nous assurons la satisfaction de nos clients
            </p>
        </div>

        <div class="row pt-45">
            <?php
	$image="";$i=0;
	$req="select * from pubs";
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query)){
		$image = 'sesadmin/'.$enreg['image'];
		if(file_exists($image)){
			$i++;
?>
            <div class="col-lg-4 col-sm-6">
                <div class="project-card">
                    <div class="project-card-img">
                        <a href="<?php echo $image; ?>" target="_blank">
                            <img src="<?php echo $image; ?>" alt="Project Images" style="border-radius: 25px;">
                        </a>

                    </div>
                </div>
            </div>
            <?php } }?>



        </div>
    </div>
</section>
<!-- Project Area End -->

<?php
include('menu_footer/footer.php');
?>