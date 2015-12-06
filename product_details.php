<?php
if(isset($_REQUEST['id']))
{
	$product_id=$_REQUEST['id'];
}
else{
	header('location:index.php');
}

?>



<?php include_once("header.php");?>
		

	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php include('left_side.php'); ?>
				</div>
				
				<div class="col-sm-9 padding-right">
				
					<div class="product-details"><!--product-details-->
					
									
                    	<?php include('config.php'); ?>
						<?php
						$statement1=$db->prepare('select * from tbl_products where p_id=?');
						$statement1->execute(array($product_id));
						$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
						foreach($result1 as $row1)
						{
						?>

						<div class="col-sm-5">
							<!--Code for Zoom-->
							<div class="view-product">
								<img id="zoom_01" src="Eshopper-Admin/img/products/<?php echo $row1['p_img'];?>" data-zoom-image="Eshopper-Admin/img/products/<?php echo $row1['p_img'];?>" width="450" height="400"/>
							</div>
							<!--Code for zoom ends-->
							<p>Mouse hover for zoom</p>
						</div>
					
						
						
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>Anne Klein Sleeveless Colorblock Scuba</h2>
								<p>Web ID: 1089772</p>
								<img src="images/product-details/rating.png" alt="" /><br>
								<h1 style="color: #FE980F">US $59</h1>
								<p><strong>Brand:</strong>&nbsp; E-SHOPPER</p>
								<table>
									<tr>
										<td><p><strong>Availability:</strong>&nbsp;</p></td>
										<td><p><i class=" fa fa-arrow-right"> Small : <strong style="color: #FE980F">3</strong></i></p></td>
									</tr>
									<tr>
										<td></td>
										<td><p><i class=" fa fa-arrow-right"> Medium : <strong style="color: #FE980F">5</strong></i></p></td>
									</tr>
									<tr>
										<td></td>
										<td><p><i class=" fa fa-arrow-right"> Large : <strong style="color: #FE980F">2</strong></i></p></td>
									</tr>
								</table>
								<form method="post" action="cart.php">
									<p style="float:"><strong>Type Quantity: &nbsp;</strong>
									<input type="number" min="1" name="" max="5"style="width:90px;text-align:center;border-radius: 2px;border: 1px solid #e3e3e3;">
									</p>
									<p style=""><strong>Your Size: &nbsp;</strong>
										<select style="width:150px;border:1px solid #e3e3e3;border-radius:2px">
											<option>--Your size--</option>
											<option>Small</option>
											<option>Medium</option>
											<option>Large</option>
										</select>
									</p>
									<input type="submit" name="form_details" value="Add to cart" class="cart cart_wishlist" style="padding:6px 36px;margin-top:20px;float:left">
								</form>
								<div style="float:left;margin-top:20px;">
									<a href="wishlist.php">
										<button type="button" class="btn btn-fefault cart cart_wishlist">
											<i class="fa fa-plus-square"></i>
											Add to Wishlist
										</button>
									</a>
								</div>
							</div><!--/product-information-->
						</div>
						
						<?php
						}
						?>
						
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >	
								<p style="padding:40px 60px;text-align:justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
									incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud
									exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure 
									dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								</p>		
							</div>
							
							<div class="tab-pane fade" id="tag" >
								
								
							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
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