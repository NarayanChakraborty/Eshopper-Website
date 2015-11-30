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
								<li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
								<!--<li><a href="#"><i class="fa fa-user"></i> Account</a></li>-->
								<li><a href="wishlist.php"><i class="fa fa-star"></i> Wishlist</a></li>
								<!--<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
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
                                       <?php include_once('config.php'); ?> 
										<?php
										
										$statement=$db->prepare('select * from tbl_products_category');
										$statement->execute();
										$result=$statement->fetchAll(PDO::FETCH_ASSOC);
										foreach($result as $row)
										{
										?>
										
										
                                    	<!--category-productsr-->
												<li>
													<div class="panel-heading">
														<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordian" href="#sports<?php echo $row['p_cat_id']; ?>">
																<span class="badge pull-right"><i class="fa fa-plus"></i></span>
																<?php echo $row['p_cat_name']; ?>
															</a>
														</h4>
													</div>
													<div id="sports<?php echo $row['p_cat_id']; ?>" class="panel-collapse collapse">
														<div class="panel-body">
															<ul>
															
															<?php 
															$statement1=$db->prepare('select * from tbl_products_subcategory where p_cat_id=?');
															$statement1->execute(array($row['p_cat_id']));
															$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
															foreach($result1 as $row1)
															{
															?>
															 
																<li><a href="#"><?php echo $row1['p_subcat_name']; ?></a></li>
																<?php
															}
															?>
															</ul>
														</div>
													</div>
												</li>
												
											<!--/category-products-->
											
										<?php
										}
										?>
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
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free E-Commerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>100% Responsive Design</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png"  class="pricing" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Ecommerce Template</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl3.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/pricing.png" class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
							  
							  <?php
										//Category accessed
										
										$statement2=$db->prepare('select * from tbl_products_category');
										$statement2->execute();
										$result2=$statement2->fetchAll(PDO::FETCH_ASSOC);
										foreach($result2 as $row2)
										{
										?>
							
							
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php echo $row2['p_cat_id']; ?>">
														<span class="badge pull-right"><i class="fa fa-plus"></i></span>
														<?php echo $row2['p_cat_name']; ?>
													</a>
												</h4>
											</div>

											
										<div id="sportswear<?php echo $row2['p_cat_id']; ?>" class="panel-collapse collapse">
											
											<div class="panel-body">
										     <ul>
											<?php 
													$statement3=$db->prepare('select * from tbl_products_subcategory where p_cat_id=?');
													$statement3->execute(array($row2['p_cat_id']));
													$result3=$statement3->fetchAll(PDO::FETCH_ASSOC);
													foreach($result3 as $row3)
													{
														?>
															 
														<li><a href="#"><?php echo $row3['p_subcat_name']; ?></a></li>
														<?php
												     }
											?>
												</ul>
									        </div>
										</div>
											
								<?php
									}
								?>
							</div>
							
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								
                                  <?php 
                                     $brand_statement=$db->prepare("select * from tbl_products_brand ");
									 $brand_statement->execute();
									 $brand_result=$brand_statement->fetchAll(PDO::FETCH_ASSOC);
									 foreach($brand_result as $brandrow)
									 {
                                    ?>								  
								
									<li><a href="#"> <span class="pull-right"><?php echo "(".rand(10,100).")" ;?></span><?php echo $brandrow['p_brand_name']; ?></a></li>	
									<?php
									 }
									 ?>
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
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Latest Features Items</h2>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product1.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product2.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product3.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>

			
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product1.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product2.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product3.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>						
					</div><!--features_items-->

					<div class="features_items"><!--Latest_Brand_items-->
						<h2 class="title text-center">Latest Brands Items</h2>

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product1.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product2.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product3.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>

			
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product1.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product2.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>


						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/home/product3.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
										</div>
								</div>
								<div class="choose" style="">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist.php"  class="btn"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="cart.php"  class="btn"><i class="fa fa-shopping-cart"></i>Add to cart</a></li>
									</ul>
								</div>
							</div>
						</div>						
					</div><!--Latest_Brend_items-->



					
					<div class="category-tab"><!--category-tab-->
						<h2 class="title text-center">Most Sell in This Month</h2>
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
								<li><a href="#blazers" data-toggle="tab">Blazers</a></li>
								<li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="tshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="blazers" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="sunglass" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="kids" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
							
							<div class="tab-pane fade" id="poloshirt" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!--/category-tab-->
					
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
													<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
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
													<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
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
													<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
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
													<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
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
													<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
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
													<a href="product_details.php" style="" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>View Details</a>
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