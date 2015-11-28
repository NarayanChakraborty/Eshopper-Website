<?php include_once("header.php");?>

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt "></i>
                          <span>Product Section</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="active" href="add_product.php">Add Product</a></li>                          
                          <li><a class="" href="view_product.php">View Product</a></li>
                          <li><a class="" href="all_category.php">All Category</a></li>
                          <li><a class="" href="all_brand.php">All Brand</a></li>
                      </ul>
                  </li>
				          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Form Elements</a></li>                          
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>UI Fitures</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">General Components</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                      </ul>
                  </li>      
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.php">Basic Table</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu ">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="login.php"><span>Login Page</span></a></li>
                          <li><a class="active" href="blank.php">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      		  <div class="row">
      				<div class="col-lg-12">
      					<h3 class="page-header"><i class="fa fa fa-bars"></i>View All Product</h3>
      					<ol class="breadcrumb">
      						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
      						<li><i class="fa fa-bars"></i>Product Section</li>
      						<li><i class="fa fa-square-o"></i> View Product</li>
      					</ol>
      				</div>
      			</div>
              <!-- page start-->
			  <?php include_once("../config.php");?>
              <div class="row">
                <div class="col-sm-12">
                  <h2>Listed Products of Last 7 Days. </h2>
                </div>
              </div>
			     <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                         <tr>
                                 <th style="border: 1px solid #e3e3e3"><i class="icon_info_alt"></i> Product ID</th>
                                 <th style="border: 1px solid #e3e3e3"><i class="icon_documents"></i> Name</th>
                                 <th style="border: 1px solid #e3e3e3"><i class="icon_creditcard"></i> Price</th>
                                 <th style="border: 1px solid #e3e3e3"><i class="icon_zoom-in"></i> Category</th>
                                 <th style="border: 1px solid #e3e3e3"><i class="icon_zoom-out"></i> Sub-category</th>
                                 <th style="border: 1px solid #e3e3e3"><i class="icon_piechart"></i> Brand</th>
                                 <th style="border: 1px solid #e3e3e3"><i class="icon_calendar"></i> Date</th>   
                                 <!--<th><i class="icon_pin_alt"></i> City</th>-->
                                
                                 <th style="border: 1px solid #e3e3e3"><i class="icon_cogs"></i> Action</th>
                              </tr>
                                    </thead>
                                    
									<tbody>
									     <?php
										  $statement =$db->prepare("SELECT * FROM tbl_products where p_arival_date>DATE_SUB(CURDATE(), INTERVAL 7 DAY)");
										  $statement->execute();
										  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
										  foreach ($result as $row) {
                                          ?> 
										 <tr class="odd gradeX">
									        <td><?php echo $row['p_id']; ?></td>
                                            <td><?php echo $row['p_name']; ?></td>
                                            <td><?php echo $row['p_price']; ?></td>
                                            <td ><?php 
                                                    
										  $statement1 = $db->prepare("SELECT p_cat_name FROM tbl_products_category where p_cat_id=?");
										  $statement1->execute(array($row['p_cat_id']));
										  $result1 = $statement1->fetch();
												echo $result1['p_cat_name'];	
											?></td>
                                            <td ><?php 
											$statement1 = $db->prepare("SELECT p_subcat_name FROM tbl_products_subcategory where p_subcat_id=?");
										    $statement1->execute(array($row['p_subcat_id']));
										    $result1 = $statement1->fetch();
												echo $result1['p_subcat_name'];
											?></td>
											<td><?php 
														
											$statement1 = $db->prepare("SELECT p_brand_name FROM tbl_products_brand where p_brand_id=?");
										    $statement1->execute(array($row['p_brand_id']));
										    $result1 = $statement1->fetch();
												echo $result1['p_brand_name'];

											?></td>
                                            <td><?php echo $row['p_arival_date']; ?></td>
                                            <td style="padding-left:40px;">
											 <div class="btn-group">
													  <a class="btn btn-primary fancybox" href="#inline<?php echo $row['p_id'];?>"title="View image"><i class="icon_plus_alt2"></i></a>
													  <!--Fancy Box-->
													  
													  <div id="inline<?php echo $row['p_id'];?>"style="display:none;width:700px;margin:10px 30px">
														<h3 style= "border-bottom: 2px solid #295498; color:#0C86AC;margin-bottom:10px;" >Product Details</h3>
														<div class="shopper-info">
														
														  <h4><?php echo $row['p_name']; ?></h4>
														  <img src="img/products/<?php echo $row['p_img'];?>" width="450" height="400">
														  <h4>Product Details</h4>
														  <p>
														  <?php echo $row['p_details']; ?>
														  </p>
														  <h4>Product Stock</h4>
														  <p>
															<i class=" fa fa-arrow-right"> Small : <strong style="color: #FE980F"><?php echo $row['p_small'] ; ?></strong></i>
														  </p>
														  <p>
															<i class=" fa fa-arrow-right"> Medium : <strong style="color: #FE980F"><?php echo $row['p_medium']; ?></strong></i>
														  </p>
														  <p>
															<i class=" fa fa-arrow-right"> Large : <strong style="color: #FE980F"><?php echo $row['p_large']; ?></strong></i>
														  </p>
														</div>
													  </div>
													  <!--Fancy box End-->
													  <a class="btn btn-success" title="Edit this Product" href="edit_product.php?id=<?php echo $row['p_id']; ?>"><i class="icon_check_alt2"></i>
													  
													  </a>
													  <a class="btn btn-danger"title="Delete This product" href="product_delete.php?id=<?php echo $row['p_id']; ?>"><i class="icon_close_alt2"></i></a>
												  </div>
											
											</td> 
									     </tr>
										<?php  
										}
										?>
										 
									</tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
			        </section>
			    </div>
			</div>

              <div class="row">
                <div class="col-sm-12">
                  
                </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!--For Fancyapp-->
  <!--<script type="text/javascript" src="fancyapp/lib/jquery-1.10.1.min.js"></script> -->
    <script type="text/javascript" src="../fancyapp/source/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="../fancyapp/source/jquery.fancybox.css?v=2.1.5" media="screen" />
  
      <script type="text/javascript">
        $(document).ready(function() {

          $('.fancybox').fancybox();
          });
      </script>

	  
	  
     <!-- DATA TABLE SCRIPTS -->
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    
	
  </body>
</html>
