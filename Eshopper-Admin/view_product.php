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
              <div class="row">
                <div class="col-sm-12">
                  <h2>Showing Latest 10 Product. </h2>
                </div>
              </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
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
                              <tr>
                                 <td style="border: 1px solid #e3e3e3">1000</td>
                                 <td style="border: 1px solid #e3e3e3">Spider-man Printed red T-shirt.</td>
                                 <td style="border: 1px solid #e3e3e3">$10</td>
                                 <td style="border: 1px solid #e3e3e3">Mens</td>
                                 <td style="border: 1px solid #e3e3e3">T-shirt</td>
                                 <td style="border: 1px solid #e3e3e3">Lotto</td>
                                 <td style="border: 1px solid #e3e3e3">12-11-2015</td>
                                 <td style="border: 1px solid #e3e3e3">
                                  <div class="btn-group">
                                      <a class="btn btn-primary fancybox" href="#inline1"title="View image"><i class="icon_plus_alt2"></i></a>
                                      <!--Fancy Box-->
                                      <div id="inline1"style="display:none;width:700px;margin:10px 30px">
                                        <h3 style= "border-bottom: 2px solid #295498; color:#0C86AC;margin-bottom:10px;" >Product Details</h3>
                                        <div class="shopper-info">
                                          <h4>Product Image</h4>
                                          <img src="img/bg-1.jpg" width="450" height="400">
                                          <h4>Product Details</h4>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                          </p>
                                          <h4>Product Size</h4>
                                          <p>
                                            <i class=" fa fa-arrow-right"> Small : <strong style="color: #FE980F">3</strong></i>
                                          </p>
                                          <p>
                                            <i class=" fa fa-arrow-right"> Medium : <strong style="color: #FE980F">5</strong></i>
                                          </p>
                                          <p>
                                            <i class=" fa fa-arrow-right"> Large : <strong style="color: #FE980F">2</strong></i>
                                          </p>
                                        </div>
                                      </div>
                                      <!--Fancy box End-->
                                      <a class="btn btn-success" title="Edit this Product" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger"title="Delete This product" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td style="border: 1px solid #e3e3e3">1001</td>
                                 <td style="border: 1px solid #e3e3e3">Broken-heart printed bed sheet</td>
                                 <td style="border: 1px solid #e3e3e3">$29</td>
                                 <td style="border: 1px solid #e3e3e3">Home</td>
                                 <td style="border: 1px solid #e3e3e3">N/A</td>
                                 <td style="border: 1px solid #e3e3e3">RFL</td>
                                 <td style="border: 1px solid #e3e3e3">12-11-2015</td>
                                 <td style="border: 1px solid #e3e3e3">
                                  <div class="btn-group">
                                      <a class="btn btn-primary fancybox" href="#inline1"title="View image"><i class="icon_plus_alt2"></i></a>
                                      <!--Fancy Box-->
                                      <div id="inline1"style="display:none;width:700px;margin:10px 30px">
                                        <h3 style= "border-bottom: 2px solid #295498; color:#0C86AC;margin-bottom:10px;" >Product Details</h3>
                                        <div class="shopper-info">
                                          <h4>Product Image</h4>
                                          <img src="img/bg-1.jpg" width="450" height="400">
                                          <h4>Product Details</h4>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                          </p>
                                          <h4>Product Size</h4>
                                          <p>
                                            <i class=" fa fa-arrow-right"> Small : <strong style="color: #FE980F">3</strong></i>
                                          </p>
                                          <p>
                                            <i class=" fa fa-arrow-right"> Medium : <strong style="color: #FE980F">5</strong></i>
                                          </p>
                                          <p>
                                            <i class=" fa fa-arrow-right"> Large : <strong style="color: #FE980F">2</strong></i>
                                          </p>
                                        </div>
                                      </div>
                                      <!--Fancy box End-->
                                      <a class="btn btn-success"title="Edit this Product" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger"title="Delete This product" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                              <tr>
                                 <td style="border: 1px solid #e3e3e3">1002</td>
                                 <td style="border: 1px solid #e3e3e3">Heart Printed Violet T-shirt.</td>
                                 <td style="border: 1px solid #e3e3e3">$32</td>
                                 <td style="border: 1px solid #e3e3e3">Womens</td>
                                 <td style="border: 1px solid #e3e3e3">T-shirt</td>
                                 <td style="border: 1px solid #e3e3e3">Lotto</td>
                                 <td style="border: 1px solid #e3e3e3">12-11-2015</td>
                                 <td style="border: 1px solid #e3e3e3">
                                  <div class="btn-group">
                                      <a class="btn btn-primary fancybox" href="#inline1"title="View image"><i class="icon_plus_alt2"></i></a>
                                      <!--Fancy Box-->
                                      <div id="inline1"style="display:none;width:700px;margin:10px 30px">
                                        <h3 style= "border-bottom: 2px solid #295498; color:#0C86AC;margin-bottom:10px;" >Product Details</h3>
                                        <div class="shopper-info">
                                          <h4>Product Image</h4>
                                          <img src="img/bg-1.jpg" width="450" height="400">
                                          <h4>Product Details</h4>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                          </p>
                                          <h4>Product Size</h4>
                                          <p>
                                            <i class=" fa fa-arrow-right"> Small : <strong style="color: #FE980F">3</strong></i>
                                          </p>
                                          <p>
                                            <i class=" fa fa-arrow-right"> Medium : <strong style="color: #FE980F">5</strong></i>
                                          </p>
                                          <p>
                                            <i class=" fa fa-arrow-right"> Large : <strong style="color: #FE980F">2</strong></i>
                                          </p>
                                        </div>
                                      </div>
                                      <!--Fancy box End-->
                                      <a class="btn btn-success"title="Edit this Product" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" title="Delete This product" href="#"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                                       
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <p>Pagination Code goes here.. </p>
                </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
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


  </body>
</html>
