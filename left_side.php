<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
							  
							  <?php
										//Category accessed
										
										$statement1=$db->prepare('select * from tbl_products_category');
										$statement1->execute();
										$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
										foreach($result1 as $row1)
										{
											$statement2 = $db->prepare("SELECT DISTINCT p_cat_id FROM tbl_products_subcategory");
                                            $statement2->execute();
                                            $result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
                                            foreach ($result2 as $row2) {

                                            if($row1['p_cat_id'] == $row2['p_cat_id']){
										?>
							
											<div class="panel-heading">
												<h4 class="panel-title">
													<a data-toggle="collapse" data-parent="#accordian" href="#sportswear<?php echo $row1['p_cat_id']; ?>">
														<span class="badge pull-right"><i class="fa fa-plus"></i></span>
														<?php echo $row1['p_cat_name']; ?>
													</a>
												</h4>
											</div>

											
										<div id="sportswear<?php echo $row1['p_cat_id']; ?>" class="panel-collapse collapse">
											
											<div class="panel-body">
										     <ul>
											<?php 
													$statement3=$db->prepare('select * from tbl_products_subcategory where p_cat_id=?');
													$statement3->execute(array($row2['p_cat_id']));
													$result3=$statement3->fetchAll(PDO::FETCH_ASSOC);
													foreach($result3 as $row3)
													{
														?>
															 
														<li><a href="subcat_product.php?cat_id=<?php echo $row2['p_cat_id'];?> & subcat_id=<?php echo $row3['p_subcat_id'];?>"><?php echo $row3['p_subcat_name']; ?></a></li>
														<?php
												     }
											?>
												</ul>
									        </div>
										</div>
											
								<?php
									}
								}
							}	
								?>
								<div class="panel-heading">
								
								<?php
                          $statement4 = $db->prepare("SELECT * FROM tbl_products_category WHERE p_cat_id NOT IN(SELECT DISTINCT p_cat_id FROM tbl_products_subcategory)");
                          $statement4->execute();
                          $result4 = $statement4->fetchAll(PDO::FETCH_ASSOC);
						  
                          foreach ($result4 as $row4) {
                        ?>
						     
								
												<h4 class="panel-title">
												
													<a href="cat_product.php?c_id=<?php echo $row4['p_cat_id']; ?>">
														
														<?php echo $row4['p_cat_name']; ?>
													</a>
												</h4>
								
							
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
								
									<li><a href="brand_product.php?b_id=<?php echo  $brandrow['p_brand_id'];?>"> <span class="pull-right"><?php 
	                                  
                                     $product_count=$db->prepare("select COUNT(*)  as count from tbl_products where p_brand_id=?");
									 $product_count->execute(array($brandrow['p_brand_id']));
									 $count_result=$product_count->fetch();
                                     
									?><?php echo "(".$count_result['count'].")" ; ?></span><?php echo $brandrow['p_brand_name'] ?></a>
								
									
									</li>	
									
									
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