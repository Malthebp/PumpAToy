<?php
	include ('layout.php');
?>

		</div>
			<!--top-header-nav-->
			<!--content-->
				<div class="clearfix"> </div>
				<!-- //products --->
				<!--product-details-->
				<div class="product-details">
					<div class="container">
					<div class="product-details-row1">
						<div class="product-details-row1-head">
							<h2><?php echo $product['name']; ?></h2>
						</div>
						<div class="col-md-4 product-details-row1-col1">
							<!----details-product-slider--->
						<!-- Include the Etalage files -->
							<link rel="stylesheet" href="<?php echo PUBLICROOT; ?>css/etalage.css">
							<script src="<?php echo PUBLICROOT; ?>js/jquery.etalage.min.js"></script>
						<!-- Include the Etalage files -->
						<script>
								jQuery(document).ready(function($){
					
									$('#etalage').etalage({
										thumb_image_width: 300,
										thumb_image_height: 400,
										source_image_width: 900,
										source_image_height: 1000,
										show_hint: true,
										click_callback: function(image_anchor, instance_id){
											alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
										}
									});
									// This is for the dropdown list example:
									$('.dropdownlist').change(function(){
										etalage_show( $(this).find('option:selected').attr('class') );
									});
		
							});
						</script>
						<!--details-product-slider-->
						<div class="details-left">
							<div class="details-left-slider">
								<ul id="etalage">
									<li>
										<img class="etalage_source_image" src="<?php echo PUBLICROOT.$product['image']; ?>" />
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 product-details-row1-col2">
						<div class="product-price">
							<div class="product-price-left text-right">
								<!-- <span>174.00</span> -->
								<h5><?php echo $product['price']; ?> Dkk</h5>
							</div>
							<!-- <div class="product-price-right">
								<a href="#"><span> </span></a>
								<label> save <b>40%</b></label>
							</div> -->
							<div class="clearfix"> </div>
						</div>
						<div class="product-price-details">
							<p class="text-right">This is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,e </p>
							<a class="shipping" href="#"><span> </span>Free shipping</a>
							<div class="clearfix"> </div>
							<div class="product-size-qty">
								<div class="pro-size"> 
									<span>Size:</span>
									<select>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
									</select>
								</div>
								<div class="pro-qty">
									<span>Qty:</span>
									<select>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div> 
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
							<div class="product-cart-share">
								<div class="add-cart-btn">
									<input type="button" value="Add to cart" />
								</div>
								<ul class="product-share text-right">
									<h3>Share This:</h3>
									<ul>
										<li><a class="share-face" href="#"><span> </span> </a></li>
										<li><a class="share-twitter" href="#"><span> </span> </a></li>
										<li><a class="share-google" href="#"><span> </span> </a></li>
										<li><a class="share-rss" href="#"><span> </span> </a></li>
										<div class="clear"> </div>
									</ul>
								</ul>
							</div>
						</div>
					</div>
						<div class="clearfix"> </div>
				<!-- product-details-->
				</div>
				<!-- product-details -->
				<div class="product-tabs">
					<!--Horizontal Tab-->
				    <div id="horizontalTab">
				        <ul>
				            <li><a href="#tab-1">Product description</a></li>
				            <li><a href="#tab-2">Specs</a></li>
				        </ul>
				        <div id="tab-1" class="product-complete-info">
				        	<h3>DESCRIPTION:</h3>
				        	<p><?php echo $product['description']; ?></p>
				        </div>
				        <div id="tab-2" class="product-complete-info">
				        	<h3>Specs:</h3>
				        	
				        </div>
				        
				    </div>
				    <!-- Responsive Tabs JS -->
				    <script src="<?php echo PUBLICROOT; ?>js/jquery.responsiveTabs.js" type="text/javascript"></script>
				
				    <script type="text/javascript">
				        $(document).ready(function () {
				            $('#horizontalTab').responsiveTabs({
				                rotate: false,
				                startCollapsed: 'accordion',
				                collapsible: 'accordion',
				                setHash: true,
				                disabled: [3,4],
				                activate: function(e, tab) {
				                    $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
				                }
				            });
				
				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('#stop-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('stopRotation');
				            });
				            $('#start-rotation').on('click', function() {
				                $('#horizontalTab').responsiveTabs('active');
				            });
				            $('.select-tab').on('click', function() {
				                $('#horizontalTab').responsiveTabs('activate', $(this).val());
				            });
				
				        });
				    </script>
				</div>
				<!-- //product-details ---->
				</div>
				</div>
			<!----content---->
			<div class="clearfix"> </div>
			<!----footer--->
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
			<!---//footer--->
			<!---copy-right--->
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

