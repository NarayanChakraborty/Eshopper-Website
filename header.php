<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<!--<link rel="stylesheet" href="css/csseasyzoom.css">-->

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@webtools.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
				
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
