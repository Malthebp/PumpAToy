	<?php 
		include ('layout.php');


	?>
				<!--- products ---->
				<div class="products container">
					<div class="product-filter">
						<h1><a href="#">BRANDS</a></h1>
						<div class="product-filter-grids"> 
							<div class="col-md-3 product-filter-grid1-brands">
								<h3>Categories</h3>
								<ul class="col-md-6 unstyled-list b-list1">
									<?php 
										foreach($results as $result) {
									?>
										<li><a href="<?php echo PUBLICROOT; ?>category/<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></li>
									<?php
										}
									?>
									<div class="clearfix"> </div>
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!---->
							<div class="col-md-6 product-filter-grid1-brands-col2">
									<div class="producst-cate-grids">
										<div class="col-md-4 producst-cate-grid text-center">
											<h2>WOMAN</h2>
											<img class="r-img text-center img-responsive" src="images/img-w.jpg" title="name">
											<span><img src="images/objs1.png" title="name"></span>
											<h4>TOTAL</h4>
											<label>357 PRODUCTS</label>
											<a class="r-list-w" href="#"><img src="images/list-icon.png" title="list"></a>
										</div>
										<div class="col-md-4 producst-cate-grid text-center">
											<h2>MAN</h2>
											<img class="r-img text-center img-responsive" src="images/man-r-img.jpg" title="name">
											<span><img src="images/objs2.png" title="name"></span>
											<h4>TOTAL</h4>
											<label>357 PRODUCTS</label>
											<a class="r-list-w" href="#"><img src="images/list-icon.png" title="list"></a>
										</div>
										<div class="col-md-4 producst-cate-grid text-center">
											<h2>KIDS</h2>
											<img class="r-img text-center img-responsive" src="images/kid-r-img.jpg" title="name">
											<span><img src="images/objs3.png" title="name"></span>
											<h4>TOTAL</h4>
											<label>357 PRODUCTS</label>
											<a class="r-list-w" href="#"><img src="images/list-icon.png" title="list"></a>
										</div>
									</div>
							</div>
							</div>
							</div>
							</div>
							<!---->
							<?php 
	include('footer.php');
?>
