<?php 
	include('layout.php');
?>

		</div>
			<!--//top-header-nav---->
			<!----content---->
				<div class="content">
					<div class="container">
				<!--- products ---->
				
				<div class="clearfix"> </div>
				<!-- //products ---->
				<!----speical-products---->
				<div class="special-products all-poroducts">
					<div class="s-products-head">
						<div class="s-products-head-left">
							<h1><?php echo $results['name']; ?></h1>
						</div>

						<div class="clearfix"> </div>
					</div>
					<!----special-products-grids---->
					<div class="special-products-grids">
						<?php foreach ($results['products'] as $product) { ?>
						<article class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="../product/<?php echo $product['id']; ?>"><img class="img-responsive" src="<?php echo PUBLICROOT.$product['image']; ?>" /></a>
							<h4><a href="product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a></h4>
							<a class="product-btn" href="../product/<?php echo $product['id']; ?>"><span><?php echo $product['price'];?> Dkk</span><small>GET NOW</small><label> </label></a>
						</article>
						<?php } ?>
						<div class="clearfix"> </div>
					</div>
					<!---//special-products-grids---->
				</div>
			
				</div>
			<!--content-->
	<?php 
	include('footer.php');
?>

