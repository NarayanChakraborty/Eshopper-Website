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
<?php include_once("../config.php");?>
<?php
 if(isset($_POST['form_add_brand'])){
    try {
        if(empty($_POST['brand_name'])){
           throw new Exception("Brand Name Cannot be Empty");
          }

        $brand_name = mysql_real_escape_string($_POST['brand_name']);
        $statement = $db->prepare("insert into tbl_products_brand (p_brand_name) values(?)");
        $statement->execute(array($brand_name));
        $success_message = "New Brand Added Successfully!";

      } catch (Exception $e) {
      $error_message = $e->getMessage();
    }
  }
?>
<!--This is for Update In PopUp-->
<?php
 if(isset($_POST['form_brand_update'])){
    try {
      if(empty($_POST['brand_name_update'])){
          throw new Exception("Brand Name Cannot be Empty");
        }
                                
       $brand_name_update = mysql_real_escape_string($_POST['brand_name_update']);
       $statement2 = $db->prepare("UPDATE tbl_products_brand SET p_brand_name=? WHERE p_brand_id=?");
       $statement2->execute(array($brand_name_update,$_POST['hidden_id']));
       $success_message1 = "Brand Name Updated Successfully!";
                                    
      } catch (Exception $e) {
         $error_message1 = $e->getMessage();
       }
 }
?>                          

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <div class="col-lg-12">
                  <h3 class="page-header"><i class="fa fa fa-bars"></i>All Brand</h3>
                  <ol class="breadcrumb">
                    <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                    <li><i class="fa fa-bars"></i>Product Section</li>
                    <li><i class="fa fa-square-o"></i>All Brand</li>
                  </ol>
                </div>
              </div>
              <!-- page start-->
  
              <div class="row">
                 <div class="col-lg-1">
                </div>
                <div class="col-lg-5">
                    <h3 >Existing All Brand</h3><br>
                    <ol>

                      
                      <?php
                      $statement = $db->prepare("select * from tbl_products_brand");
                      $statement->execute();
                      $result = $statement->fetchAll(PDO::FETCH_ASSOC) ;
                      foreach ($result as $row) {
                        # code...?>

                      <li>
                        <label><?php echo $row['p_brand_name'];?> (91) </label>&nbsp;
                        <a class="btn btn-warning" data-toggle="modal" href="#myModal<?php echo $row['p_brand_id'];?>">
                           Edit
                        </a>
                        <a class="btn btn-danger" href="delete_brand.php?B_ID=<?php echo $row['p_brand_id'];?>"  onclick='return confirmDelete();'>
                           Delete!
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal<?php echo $row['p_brand_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Edit Brand name</h4>
                              </div>
                              <div class="modal-body">
                                <form method="post" enctype="multipart/form-data">
                                  <h4>Brand Name :</h4>
                                  <input type="text" name="brand_name_update" value="<?php echo $row['p_brand_name'];?>"class="form-control">
                                  <br>
                                  <input type="hidden" name="hidden_id" value="<?php echo $row['p_brand_id'];?>">
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                  <input type="submit" value="Update" class="btn btn-success" name="form_brand_update">
                                </form>
                              </div>         
                            </div>
                          </div>
                        </div>
                        <!-- modal -->
                      </li><br>
                       <?php
                      }
                      ?>   
                    </ol> 
                      <?php
                      if(isset($error_message)){
                        ?>
                        <div class="alert alert-block alert-danger fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove"></i>
                          </button>
                          <strong>Opps!&nbsp; </strong><?php echo $error_message;?>
                       </div>
                        <?php
                      }
                      if (isset($success_message)) {
                       ?>
                       <div class="alert alert-success fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                          </button>
                          <strong>Well done!&nbsp; </strong><?php echo $success_message;?>
                       </div>
                       <?php
                        }
                      ?>
                      <?php
                      if(isset($error_message1)){
                        ?>
                        <div class="alert alert-block alert-danger fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove"></i>
                          </button>
                          <strong>Opps!&nbsp; </strong><?php echo $error_message1;?>
                       </div>
                        <?php
                      }
                      if (isset($success_message1)) {
                       ?>
                       <div class="alert alert-success fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                          </button>
                          <strong>Well done!&nbsp; </strong><?php echo $success_message1;?>
                       </div>
                       <?php
                        }
                      ?>                           
                    <h3>New Brand Name</h3>
                    <form enctype="multipart/form-data" method="post">
                      <input type="text"name="brand_name"class="form-control" placeholder="Type Here.."><br>
                      <input type="submit" value="Save" name="form_add_brand"class="btn btn-primary">
                  </form>
                </div>
                <div class="col-lg-6">
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
   <script type="text/javascript">
     function confirmDelete() {
        return confirm("Are you sure you want to Delete this data?")
      }
  </script>

  </body>
</html>
