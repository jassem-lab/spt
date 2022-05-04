<?php
include('menu_footer/menu.php');
?>

 
       <!-- Product Area -->
        <div class="product-area pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="margin-auto color-title-blue">Nos Produits</h2>
                </div>
                <div class="row pt-45">
<?php
	$image="";$i=0;
	$req="select * from produits";
	$query=mysql_query($req);
	while($enreg=mysql_fetch_array($query)){
		$image = 'sesadmin/'.$enreg['image'];
		if(file_exists($image)){
			$i++;
?>					
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-product">
                            <img src="<?php echo $image; ?>" alt="Image" style="height: 300px;">
                            <div class="product-content">
                                <ul>
                                    <?php if($enreg['prix']>0){ ?>
										<li><?php echo $enreg['prix'].' TND'; ?></li>
									<?php } ?>	
                                </ul>
    
                                <a href="">
                                    <h3><?php echo $enreg['produit']; ?></h3>
                                </a>
    
                               
                            </div>
                        </div>
                    </div>
	<?php } } ?>
                </div>
            </div>
        </div>
        <!-- Product Area End -->     


<?php
include('menu_footer/footer.php');
?>