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
		</div><!--/header-bottom-->
	</header><!--/header-->
	 
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Contact <strong>Us</strong></h2>    			    				    				
					<div id="gmap" class="contact-map">
					</div>
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Get In Touch</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contact Info</h2>
	    				<address>
	    					<p>E-Shopper Inc.</p>
							<p>935 W. Webster Ave New Streets Chicago, IL 60614, NY</p>
							<p>Newyork USA</p>
							<p>Mobile: +2346 17 38 93</p>
							<p>Fax: 1-714-252-0026</p>
							<p>Email: info@e-shopper.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Social Networking</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<?include_once("footer.php");>