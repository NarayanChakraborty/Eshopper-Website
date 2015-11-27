<?php include_once("header.php");?>
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="login.php"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="wishlist.php"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Category<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">

                                    	<!--category-productsr-->
												<li>
													<div class="panel-heading">
														<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordian" href="#sports">
																<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																Sportswear
															</a>
														</h4>
													</div>
													<div id="sports" class="panel-collapse collapse">
														<div class="panel-body">
															<ul>
																<li><a href="product.php">Nike </a></li>
																<li><a href="product.php">Under Armour </a></li>
																<li><a href="product.php">Adidas </a></li>
																<li><a href="product.php">Puma</a></li>
																<li><a href="product.php">ASICS </a></li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordian" href="#men">
																<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																Mens
															</a>
														</h4>
													</div>
													<div id="men" class="panel-collapse collapse">
														<div class="panel-body">
															<ul>
																<li><a href="product.php">Fendi</a></li>
																<li><a href="product.php">Guess</a></li>
																<li><a href="product.php">Valentino</a></li>
																<li><a href="product.php">Dior</a></li>
																<li><a href="product.php">Versace</a></li>
															</ul>
														</div>
													</div>
												</li>
												
												<li>
													<div class="panel-heading">
														<h4 class="panel-title">
															<a data-toggle="collapse" data-parent="#accordian" href="#women">
																<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																Womens
															</a>
														</h4>
													</div>
													<div id="women" class="panel-collapse collapse">
														<div class="panel-body">
															<ul>
																<li><a href="product.php">Fendi</a></li>
																<li><a href="product.php">Guess</a></li>
																<li><a href="product.php">Valentino</a></li>
															</ul>
														</div>
													</div>
												</li>
												<li>
													<div class="panel-heading">
														<h4 class="panel-title"><a href="product.php">Kids</a></h4>
													</div>
												</li>
												<li>
													<div class="panel-heading">
														<h4 class="panel-title"><a href="product.php">Fashion</a></h4>
													</div>
												</li>
												<li>
													<div class="panel-heading">
														<h4 class="panel-title"><a href="product.php">Households</a></h4>
													</div>
												</li>
											<!--/category-products-->
						              </ul>
                                </li> 
								<li class="dropdown"><a href="blog.php">Blog</a>
                                </li> 
								<li><a href="contact_us.php">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
				</div>
			</div>
	</header>
	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Sportswear
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="product.php">Nike </a></li>
											<li><a href="product.php">Under Armour </a></li>
											<li><a href="product.php">Adidas </a></li>
											<li><a href="product.php">Puma</a></li>
											<li><a href="product.php">ASICS </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Mens
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="product.php">Fendi</a></li>
											<li><a href="product.php">Guess</a></li>
											<li><a href="product.php">Valentino</a></li>
											<li><a href="product.php">Dior</a></li>
											<li><a href="product.php">Versace</a></li>
											<li><a href="product.php">Armani</a></li>
											<li><a href="product.php">Prada</a></li>
											<li><a href="product.php">Dolce and Gabbana</a></li>
											<li><a href="product.php">Chanel</a></li>
											<li><a href="product.php">Gucci</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="product.php">Fendi</a></li>
											<li><a href="product.php">Guess</a></li>
											<li><a href="product.php">Valentino</a></li>
											<li><a href="product.php">Dior</a></li>
											<li><a href="product.php">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product.php">Kids</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product.php">Fashion</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product.php">Households</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product.php">Interiors</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product.php">Clothing</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product.php">Bags</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="product.php">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-productsr-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
									<li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
									<li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
									<li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
									<li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
									<li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
									<li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center" style="padding:20px">
								 <ul class="nav nav-pills nav-stacked">
									<li><a href="#">$10 - $99</a></li>
									<li><a href="#">$100 - $199</a></li>
									<li><a href="#">$200 - $299</a></li>
									<li><a href="#">$300 - $399</a></li>
									<li><a href="#">$400 - $499</a></li>
									<li><a href="#">$500 - Above</a></li>
								</ul>
							</div>
						</div><!--/price-range-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">My Wishlist</h2>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/gallery1.jpg" alt="" />
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
									</div>			
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="product_details.php"  class="btn"><i class="fa fa-plus-square"></i>View Details</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/gallery2.jpg" alt="" />
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
									</div>			
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="product_details.php"  class="btn"><i class="fa fa-plus-square"></i>View Details</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/gallery3.jpg" alt="" />
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
									</div>			
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="product_details.php"  class="btn"><i class="fa fa-plus-square"></i>View Details</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/gallery1.jpg" alt="" />
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
									</div>			
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="product_details.php"  class="btn"><i class="fa fa-plus-square"></i>View Details</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/gallery2.jpg" alt="" />
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
									</div>			
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="product_details.php"  class="btn"><i class="fa fa-plus-square"></i>View Details</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/home/gallery3.jpg" alt="" />
										<h2>$56</h2>
										<p>Easy Polo Black Edition</p>
									</div>			
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="product_details.php"  class="btn"><i class="fa fa-plus-square"></i>View Details</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div><!--features_items-->
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
				</div>
			</div>
		</div>
	</section>
	<?php include_once("footer.php");?>