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
 <!--Add Category Starts-->
 <?php
if(isset($_POST['form_add_category'])){
  try {
    if(empty($_POST['New_cat_name'])){
      throw new Exception("Category Name Cant not be empty!");
    }

    $new_category_name = mysql_real_escape_string($_POST['New_cat_name']);
    $add_category = $db->prepare("INSERT INTO tbl_products_category (p_cat_name) VALUES (?)");
    $add_category->execute(array($new_category_name));

    $success_message = "New Category Added Successfully!";
    
  } catch (Exception $e) {
    $error_message = $e->getMessage();
  }
}
?>

 <!--Add Subcategory Starts-->
<?php
if(isset($_POST['form_add_subcategory'])){
  try {
    if(empty($_POST['add_subcat_name'])){
      throw new Exception("Subcategory Name Cant not be empty!");
    }

    $new_subcategory_name = mysql_real_escape_string($_POST['add_subcat_name']);
    $add_subcategory = $db->prepare("INSERT INTO tbl_products_subcategory (p_subcat_name,p_cat_id) VALUES (?,?)");
    $add_subcategory->execute(array($new_subcategory_name,$_POST['hidden_id_for_add_subcategory']));

    $success_message1 = "New Subcategory Added Successfully!";
    
  } catch (Exception $e) {
    $error_message1 = $e->getMessage();
  }
}
?>
<!--For Edit Category-->
<?php
if(isset($_POST['form_edit_category']))
try {
  if(empty($_POST['edit_category_name'])){
    throw new Exception("Category Name Cannot be Empty!!"); 
  }
  $edited_category_name = mysql_real_escape_string($_POST['edit_category_name']);
  $edit_category = $db->prepare("UPDATE tbl_products_category SET p_cat_name=? WHERE p_cat_id=?");
  $edit_category->execute(array($edited_category_name,$_POST['hidden_id_for_edit_category']));

  $success_message2 = "Category Nmae Updated Successfully!";

} catch (Exception $e) {
  $error_message2 = $e->getMessage();
}
?>
<!--For Edit Sub-Category-->
<?php
if(isset($_POST['form_edit_subcat']))
try {
  if(empty($_POST['edit_subcat_name'])){
    throw new Exception("Sub-Category Name Cannot be Empty!!"); 
  }
  $edited_subcategory_name = mysql_real_escape_string($_POST['edit_subcat_name']);
  $edit_subcategory = $db->prepare("UPDATE tbl_products_subcategory SET p_subcat_name=? WHERE p_subcat_id=?");
  $edit_subcategory->execute(array($edited_subcategory_name,$_POST['hidden_id_for_edit_subcategory']));

  $success_message3 = "Sub-Category Nmae Updated Successfully!";

} catch (Exception $e) {
  $error_message3 = $e->getMessage();
}
?>



      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <div class="row">
              <div class="col-lg-12">
                <h3 class="page-header"><i class="fa fa fa-bars"></i> All Product Category & Subcategory</h3>
                <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                  <li><i class="fa fa-bars"></i>Product Section</li>
                  <li><i class="fa fa-square-o"></i>All Category</li>
                </ol>
              </div>
            </div>
            <!-- page start-->
              <div class="row">
                <div class="col-lg-1">
                </div>
                <div class="col-lg-6">
                  <h3>All Existing Categoey & Subcategory</h3>
                  <ol>

                  <?php
                  $statement = $db->prepare("SELECT * FROM tbl_products_category");
                  $statement->execute();
                  $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                  foreach ($result as $row) {
                    ?>

                    <li>
                      <label class="selectit" style="width:40%;font-size:16px;"><strong><?php echo $row['p_cat_name']; ?></strong></label> 
					  
                      <a class="btn btn-info" data-toggle="modal" href="#myModal<?php echo $row['p_cat_id'];?>">
                        Create Subcategory
                      </a>
                      <a class="btn btn-primary" data-toggle="modal" href="#MyModal<?php echo $row['p_cat_id'];?>">
                        Edit
                      </a>
                      <a class="btn btn-danger" style=""href="delete_category.php?catID=<?php echo $row['p_cat_id'];?>"  onclick='return confirmDelete();'>
                          Delete!
                      </a>
					  
                      <!-- Modal For ADD-Subcategory Starts-->
                      <div class="modal fade" id="myModal<?php echo $row['p_cat_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Add a Subcategory</h4>
                            </div>
                            <div class="modal-body">
                              <h4>New Sub-Category Name :</h4>
                              <form method="post" action="" enctype="multipart/form-data">
                                <input type="text"placeholder="Write here.." class="form-control" name="add_subcat_name"><br>
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <input type="hidden" name="hidden_id_for_add_subcategory" value="<?php echo $row['p_cat_id'];?>">
                                <input type="submit" value="Save" class="btn btn-success" name="form_add_subcategory">
                              </form> 
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- modal For ADD-Subcategory Ends-->
                      <!--Mymodal Edit Category Starts-->
                      <!-- Modal -->
                      <div class="modal fade" id="MyModal<?php echo $row['p_cat_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Edit This Category</h4>
                            </div>
                            <div class="modal-body">
                              <h4>Category Name :</h4>
                              <form method="post" action="" enctype="multipart/form-data">
                                <input type="text"value="<?php echo $row['p_cat_name'];?>"class="form-control" name="edit_category_name"><br>
                                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                <input type="hidden" name="hidden_id_for_edit_category" value="<?php echo $row['p_cat_id'];?>">
                                <input type="submit" value="Update" class="btn btn-success" name="form_edit_category">
                              </form>
                            </div>         
                          </div>
                        </div>
                      </div>
                      <!-- modal -->
                      <!--Mymodal Edit Category Ends-->
                        <ol><br>
                          <?php
                          $statement1 = $db->prepare("SELECT * FROM tbl_products_subcategory WHERE p_cat_id=?");
                          $statement1->execute(array($row['p_cat_id']));
                          $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                          foreach ($result1 as $row1) {
                             # code...?>

                            <li>
                              <label class="selectit"style="width:35%;font-size:15px"><?php echo $row1['p_subcat_name'];?></label>
                               <a class="btn btn-info btn-sm" data-toggle="modal" href="#mYModal<?php echo $row1['p_subcat_id'];?>">
                                Edit
                              </a>
                              <a class="btn btn-danger btn-sm" href="delete_subcategory.php?subcatID=<?php echo $row1['p_subcat_id'];?>"  onclick='return confirmDelete();'>
                                  Delete!
                              </a>
                              <!--Edit Sub-category Stats-->
                              <!-- Modal -->
                              <div class="modal fade" id="mYModal<?php echo $row1['p_subcat_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Edit This Sub-Category</h4>
                                    </div>
                                    <div class="modal-body">
                                      <h4>Sub-Category Name :</h4>
                                      <form method="post" action="" enctype="multipart/form-data">
                                        <input type="text" name="edit_subcat_name"value="<?php echo $row1['p_subcat_name'];?>"class="form-control"><br>
                                        <input type="hidden" name="hidden_id_for_edit_subcategory" value="<?php echo $row1['p_subcat_id'];?>">
                                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                        <input type="submit" value="Update" class="btn btn-success" name="form_edit_subcat">
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
                    </li><br>
                <?php
                  }
                  ?> 
                  </ol><br>
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
                      <?php
                      if(isset($error_message2)){
                        ?>
                        <div class="alert alert-block alert-danger fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove"></i>
                          </button>
                          <strong>Opps!&nbsp; </strong><?php echo $error_message2;?>
                       </div>
                        <?php
                      }
                      if (isset($success_message2)) {
                       ?>
                       <div class="alert alert-success fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                          </button>
                          <strong>Well done!&nbsp; </strong><?php echo $success_message2;?>
                       </div>
                       <?php
                        }
                      ?>
                      <?php
                      if(isset($error_message3)){
                        ?>
                        <div class="alert alert-block alert-danger fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove"></i>
                          </button>
                          <strong>Opps!&nbsp; </strong><?php echo $error_message3;?>
                       </div>
                        <?php
                      }
                      if (isset($success_message3)) {
                       ?>
                       <div class="alert alert-success fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                          </button>
                          <strong>Well done!&nbsp; </strong><?php echo $success_message3;?>
                       </div>
                       <?php
                        }
                      ?>
                  <h3>New Category Name</h3>
                  <form method="post" action="" enctype="multipart/form-data">
                    <input type="text" name="New_cat_name"class="form-control"><br>
                    <input type="submit" value="Save" name="form_add_category"class="btn btn-primary">
                  </form>
                </div>
                <div class="col-lg-5">
                </div>
              </div><br><br><br>
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
