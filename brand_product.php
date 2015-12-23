<?php 

if($_REQUEST['b_id'])
{
	$brand_id=$_REQUEST['b_id'];
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
						
						
						/* ===================== Pagination Code Starts ================== */
						$adjacents = 7;
													
								
						
						
						$brand_product=$db->prepare('select * from tbl_products where p_brand_id=?');
						$brand_product->execute(array($brand_id));
						$total_pages = $brand_product->rowCount();
						if($total_pages==0)
						{
							?>
								  <h1 style="text-align:center;">No Item Found</h1>
							  <?php	
						}
						$targetpage = $_SERVER['PHP_SELF'];   //your file name  (the name of this file)
						$limit =12;                                 //how many items to show per page
						$page = @$_GET['page'];
						if($page) 
							$start = ($page - 1) * $limit;          //first item to display on this page
						else
							$start = 0;
						
									
						$statement = $db->prepare("SELECT * FROM tbl_products where p_brand_id=?  ORDER BY  p_id DESC LIMIT $start, $limit");
						$statement->execute(array($brand_id));
						$result = $statement->fetchAll(PDO::FETCH_ASSOC);
						
						
						if ($page == 0) $page = 1;                  //if no page var is given, default to 1.
						$prev = $page - 1;                          //previous page is page - 1
						$next = $page + 1;                          //next page is page + 1
						$lastpage = ceil($total_pages/$limit);      //lastpage is = total pages / items per page, rounded up.
						$lpm1 = $lastpage - 1;   
						$pagination = "";
						if($lastpage > 1)
						{   
							$pagination .= "<div class=\"pagination\">";
							if ($page > 1) 
								$pagination.= "<a href=\"$targetpage?b_id=$brand_id & page=$prev\">&#171; previous</a>";
							else
								$pagination.= "<span class=\"disabled\">&#171; previous</span>";    
							if ($lastpage < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
							{   
								for ($counter = 1; $counter <= $lastpage; $counter++)
								{
									if ($counter == $page)
										$pagination.= "<span class=\"current\">$counter</span>";
									else
										$pagination.= "<a href=\"$targetpage?b_id=$brand_id & page=$counter\">$counter</a>";                 
								}
							}
							elseif($lastpage > 5 + ($adjacents * 2))    //enough pages to hide some
							{
								if($page < 1 + ($adjacents * 2))        
								{
									for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
									{
										if ($counter == $page)
											$pagination.= "<span class=\"current\">$counter</span>";
										else
											$pagination.= "<a href=\"$targetpage?b_id=$brand_id & page=$counter\">$counter</a>";                 
									}
									$pagination.= "...";
									$pagination.= "<a href=\"$targetpage?b_id=$brand_id  & page=$lpm1\">$lpm1</a>";
									$pagination.= "<a href=\"$targetpage?b_id=$brand_id  & page=$lastpage\">$lastpage</a>";       
								}
								elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
								{
									$pagination.= "<a href=\"$targetpage?b_id=$brand_id  & page=1\">1</a>";
									$pagination.= "<a href=\"$targetpage?b_id=$brand_id  & page=2\">2</a>";
									$pagination.= "...";
									for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
									{
										if ($counter == $page)
											$pagination.= "<span class=\"current\">$counter</span>";
										else
											$pagination.= "<a href=\"$targetpage?b_id=$brand_id & page=$counter\">$counter</a>";                 
									}
									$pagination.= "...";
									$pagination.= "<a href=\"$targetpage?b_id=$brand_id & page=$lpm1\">$lpm1</a>";
									$pagination.= "<a href=\"$targetpage?b_id=$brand_id & page=$lastpage\">$lastpage</a>";       
								}
								else
								{
									$pagination.= "<a href=\"$targetpage?b_id=$brand_id  & page=1\">1</a>";
									$pagination.= "<a href=\"$targetpage?b_id=$brand_id  & page=2\">2</a>";
									$pagination.= "...";
									for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
									{
										if ($counter == $page)
											$pagination.= "<span class=\"current\">$counter</span>";
										else
											$pagination.= "<a href=\"$targetpage?b_id=$brand_id & page=$counter\">$counter</a>";                 
									}
								}
							}
							if ($page < $counter - 1) 
								$pagination.= "<a href=\"$targetpage?b_id=$brand_id  & page=$next\">next &#187;</a>";
							else
								$pagination.= "<span class=\"disabled\">next &#187;</span>";
							$pagination.= "</div>\n";       
						}
			/* ===================== Pagination Code Ends ================== */
						
						
						
						
						
						?>	
						
						
						<!-------Access Brand Products------------>
						<!----------------
						<?php
						$brand_product=$db->prepare('select * from tbl_products where p_brand_id=?');
						$brand_product->execute(array($brand_id));
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
												<a href="product_details.php?id=<?php echo $single_product['p_id']; ?>" style="margin-bottom:23px" class="btn btn-default add-to-cart"><i class="fa fa-plus-square"></i>Details</a>
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

						
						<div class="pagination">
							<?php echo $pagination;?>
						</div>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	<?php include_once("footer.php");?>