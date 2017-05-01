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
							<h1><?php echo $results['category']['name']; ?></h1>
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
			<!--footer-->
			<div class="footer">
				<div class="container">
					<div class="col-md-3 footer-logo">
						<a href="index.html"><img src="images/flogo.png" title="brand-logo" /></a>
					</div>
					<div class="col-md-7 footer-links">
						<ul class="unstyled-list list-inline">
							<li><a href="#"> Faq</a> <span> </span></li>
							<li><a href="#"> Terms and Conditions</a> <span> </span></li>
							<li><a href="#"> Secure Payments</a> <span> </span></li>
							<li><a href="#"> Shipping</a> <span> </span></li>
							<li><a href="contact.html"> Contact</a> </li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="col-md-2 footer-social">
						<ul class="unstyled-list list-inline">
							<li><a class="pin" href="#"><span> </span></a></li>
							<li><a class="twitter" href="#"><span> </span></a></li>
							<li><a class="facebook" href="#"><span> </span></a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			 </div>
			 <div class="clearfix"> </div>
			<!--footer-->
			<!--copy-right-->
					<div class="copy-right">
						<div class="container">
							<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
							<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
							<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
						</div>
					</div>
			<!--//copy-right--->
		</div>
		<!----container---->
	</body>
</html>

