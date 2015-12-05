<?php 

if($_REQUEST['c_id'])
{
	$cat_id=$_REQUEST['c_id'];
}
else
{
	location('index.php');
}

?>
<?php include_once("header.php");?>
		
	
	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	<?php include_once('config.php'); ?> 
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php include('left_side.php'); ?>
				</div>	
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Items From Your Selected Brand</h2>
						<?php
						include_once('config.php');
						?>
						
						<!-------Access Brand Products------------>
						<?php
						$brand_product=$db->prepare('select * from tbl_products where p_cat_id=?');
						$brand_product->execute(array($cat_id));
						$all_products=$brand_product->fetchAll(PDO::FETCH_ASSOC);
						foreach($all_products as $single_product)
						{
						?>
						<!-------Access Brand Products------------>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="Eshopper-Admin/img/products/<?php echo $single_product['p_img'];?>" alt="" height="250px" />
											<h2><?php echo $single_product['p_price']; ?></h2>
											<p><?php echo $single_product['p_name']; ?></p>
											<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Details</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><?php echo $single_product['p_price']; ?></h2>
											<p><?php echo $single_product['p_name']; ?></p>
												<a href="product_details.php" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Details</a>
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
                        
						<?php
						}
						?>

						
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<?php include_once("footer.php");?>