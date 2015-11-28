

<?php
if(!isset($_REQUEST['id']))
{
	header('location:view_product.php');
}
else
{
	$id=$_REQUEST['id'];
}
?>
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
if(isset($_POST['form_add_product'])){
  try {
    if(empty($_POST['product_name']))
    {
      throw new Exception("Product Name Cannot be empty!");   
    }
    if(empty($_POST['product_price']))
    {
      throw new Exception("Product price Cannot be empty!");   
    }
    if(empty($_POST['tinyMCE']))
    {
      throw new Exception("Product Details Cannot be empty!");   
    }
    if(empty($_POST['brand_name']))
    {
      throw new Exception("Brand name Cannot be empty!");   
    }
    if(empty($_POST['product_small'])&& empty($_POST['product_medium'])&&empty($_POST['product_large']))
    {
      throw new Exception("Size Amount Cannot be empty!");   
    }
	/*
    if(empty($_POST['product_medium']))
    {
      throw new Exception("You earsed default value N/A. Medium size Cannot be empty!!");   
    }
    if(empty($_POST['product_large']))
    {
      throw new Exception("You earsed default value N/A. Large size Cannot be empty!!");   
    }
	*/
    if(empty($_POST['re']))
    {
      throw new Exception("Category Name Cannot be empty!!");   
    }
	
	
	/*---------------------------------Image Upload------------------------------*/
	
	if(getimagesize($_FILES['product_img']['tmp_name'])==FALSE)
		 {
		   throw new Exception("Please select an image"); //access only image
		 }
		 if($_FILES['product_img']['size']>1000000){
		 throw new Exception("Sorry,your file is too large"); //image file must be<1MB
		 }
		
		
	    //To generate id(next auto increment value from tbl_post)
		$statement=$db->prepare("show table status like 'tbl_products' ");
		$statement->execute();
		$result=$statement->fetchAll();
		foreach($result as $row)
		$new_id=$row[10];
		   
		//access image process one;   
	    $up_filename=$_FILES['product_img']['name'];   //file_name
		$file_basename=substr($up_filename,0,strripos($up_filename,'.'));//orginal image name
		$file_ext=substr($up_filename,strripos($up_filename,'.')); //extension
		$f1=$new_id.$file_ext;  //Rename filename;

	    
		//only allow png ,jpg,jpeg,gif
		if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!=['.gif']))
		{
			throw new Exception("only jpg,jpeg,png and gif format are allowed");
		}
		
						//To unlink previous image
				
				
                        $statement1=$db->prepare("select * from tbl_products where p_id=?");
						$statement1->execute(array($id));
						$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
						foreach($result1 as $row1)
						{
							$real_path= "img/products/".$row1['p_img'];
						    unlink($real_path);
						}
	     
        //upload image to a folder
        move_uploaded_file($_FILES['product_img']['tmp_name'],"img/products/".$f1);		
	
	
   //----------------------------------Image Upload----------------------------
    
	
	//=================================Price======================================//
	if($_POST['product_price']<0.00)
	{
		throw new Exception("Price Can not be negative");
	}
	//=================================Price======================================//
	
	$post_date= date('Y-m-d');
	
	//=================================Category======================================//
	$category=0;
	if($_POST['product_subcat']&& $_POST['re'])
	{
		   $statement = $db->prepare("SELECT p_cat_id FROM tbl_products_subcategory where p_subcat_id=?");
           $statement->execute(array($_POST['product_subcat']));
           $result = $statement->fetchAll(PDO::FETCH_ASSOC);
           foreach ($result as $row) {
			   if($row['p_cat_id']==$_POST['re'])
			   {
				 $statement1=$db->prepare("update tbl_products set p_name=?,p_img=?,p_details=?,p_price=?,p_cat_id=?,p_subcat_id=?,p_brand_id=?,
		   p_small=?,p_medium=?,p_large=?,p_arival_date=?  where p_id=?");
		   $statement1->execute(array($_POST['product_name'],$f1,$_POST['tinyMCE'],$_POST['product_price'],$row['p_cat_id'],$_POST['product_subcat'],$_POST['brand_name'],$_POST['product_small'],$_POST['product_medium'],$_POST['product_large'],$post_date,$id));
		   
		   $success_message="Post is Updated succesfully";
			   }
			   else{
				   throw new Exception("Select Correct Category");
			   }
		   }
	}
	if(!isset($_POST['product_subcat']))
	{
		$statement = $db->prepare("SELECT DISTINCT p_cat_id FROM tbl_products_subcategory");
        $statement->execute(array());
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row)
		{
			if($row['p_cat_id']==$_POST['re'])
			{
				throw new Exception('You Must select a subcategory of this product');
			}
		}
	       $statement1=$db->prepare("update  tbl_products set p_name=?,p_img=?,p_details=?,p_price=?,p_cat_id=?,p_subcat_id=?,p_brand_id=?,
		   p_small=?,p_medium=?,p_large=?,p_arival_date=?  where p_id=?");
		   $statement1->execute(array($_POST['product_name'],$f1,$_POST['tinyMCE'],$_POST['product_price'],$row['p_cat_id'],0,$_POST['brand_name'],$_POST['product_small'],$_POST['product_medium'],$_POST['product_large'],$post_date,$id));
		   
		   $success_message="Post is updated succesfully";
	}
	
	//=================================Category======================================//
  } catch (Exception $e) {
    $error_message = $e->getMessage();
  }
}
?>



      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
      		  <div class="row">
      				<div class="col-lg-12">
      					<h3 class="page-header"><i class="fa fa fa-bars"></i>Add Product</h3>
      					<ol class="breadcrumb">
      						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
      						<li><i class="fa fa-bars"></i>Product Section</li>
      						<li><i class="fa fa-square-o"></i>Add Product</li>
      					</ol>
      				</div>
      			</div>
				
				<!--------------------------Get exiting Data-------------->
					<?php	
						$statement1=$db->prepare("select * from tbl_products where p_id=?");
						$statement1->execute(array($id));
						$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
						foreach($result1 as $row1)
						{
							$p_name=$row1['p_name'];
							$p_img=$row1['p_img'];
							$p_details=$row1['p_details'];
							$p_price=$row1['p_price'];
							$p_cat_id=$row1['p_cat_id'];
							$p_subcat_id=$row1['p_subcat_id'];
							$p_brand_id=$row1['p_brand_id'];
							$p_small=$row1['p_small'];
							$p_medium=$row1['p_medium'];
							$p_large=$row1['p_large'];
							$p_arival_date=$row1['p_arival_date'];
						}
					?>
				<!--------------------------Get exiting Data-------------->
				
				
              <!-- page start-->
              <div class="row" style="margin-bottom:40px">
                 <div class="col-lg-1">
                </div>
                <div class="col-lg-8">
                  <form method="post" action=""  enctype="multipart/form-data">
                    <h3>Product Name</h3>
                    <input type="text"class="form-control" value="<?php echo $p_name; ?> " placeholder="Product name.." name="product_name" required>
                    <h3>Previous Image Preview</h3>
	                 <img src="img/products/<?php echo $p_img;?>" width="450" height="400">
	                 <h3>New Image</h3>
	                 <input type="file"class="form-control" name="product_img">
                    <h3>Product Price</h3>
                    <input type="text"class="form-control" value="<?php echo $p_price;  ?>" placeholder="Product prize.." name="product_price" required>
                    <h3>Product Details</h3>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <div class="text-muted bootstrap-admin-box-title">TinyMCE Editor Full </div>
                      </div>
                      <div class="bootstrap-admin-panel-content">
                          <textarea id="tinymce_full"  name="tinyMCE" rows="10">
						  <?php echo $p_details;  ?>
						  </textarea>
                      </div>
                    </div>
                    <h3>Select Brand</h3>
                    <select class="form-control m-bot15" name="brand_name" required>
                      <option></option>
                      <?php
                      $statement = $db->prepare("SELECT * FROM tbl_products_brand");
                      $statement->execute();
                      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                      foreach ($result as $row) {
                           if($result['p_brand_id']==$p_brand_id){
						
						?><option value="<?php echo $row['p_brand_id'];?>" selected><?php echo $row['p_brand_name'];?></option><?php
                      }
					 else
					 {
						 ?><option value="<?php echo $row['p_brand_id'];?>"><?php echo $row['p_brand_name'];?></option><?php	
					 }
				 }
				 
				 ?>
					   
                    </select>
                    
					<h3>Insert Amount</h3>
                    <div class="row"> 
                      <div class="col-lg-4">
                        <h4>Small</h4>
                        <input type="text"class="form-control" value="<?php echo $p_small; ?>" name="product_small">
                      </div>
                      <div class="col-lg-4">
                        <h4>Medium</h4>
                        <input type="text"class="form-control" value="<?php echo $p_medium; ?>"  name="product_medium">
                      </div>
                      <div class="col-lg-4">
                        <h4>Large</h4>
                        <input type="text"class="form-control" value="<?php echo $p_large; ?>" name="product_large">
                      </div>
                    </div><br>
					
                    <h3>Select Category &amp; Sub-category</h3>
                    <div class="row"> 
                      <ul role="menu" class="sub-menu">

                        <?php
                        $statement1 = $db->prepare("SELECT * FROM tbl_products_category");
                        $statement1->execute();
                        $result1 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                          foreach ($result1 as $row1) {

                            $statement2 = $db->prepare("SELECT DISTINCT p_cat_id FROM tbl_products_subcategory");
                            $statement2->execute();
                            $result2 = $statement2->fetchAll(PDO::FETCH_ASSOC);
                              foreach ($result2 as $row2) {

                             if($row1['p_cat_id'] == $row2['p_cat_id'])
                             {	 
                              ?>
                                <li>
                                  <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <input type="radio" value="<?php echo $row1['p_cat_id']; ?>" name="re" required>
                                    <a data-toggle="collapse" data-parent="#accordian" href="#div<?php echo $row1['p_cat_id']; ?>">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        <?php echo $row1['p_cat_name']; ?>
                                      </a>
                                    </h4>
                                  </div>
                                <div id="div<?php echo $row1['p_cat_id']; ?>" class="panel-collapse collapse">
                                  <div class="panel-body">
                                    <ul>
                                      <?php
                                      $statement3 = $db->prepare("SELECT * FROM tbl_products_subcategory WHERE p_cat_id=?");
                                      $statement3->execute(array($row1['p_cat_id']));
                                      $result3 = $statement3->fetchAll(PDO::FETCH_ASSOC);
                                      foreach ($result3 as $row3) {
                                         # code...?>
                                         
                                      <li>
                                        <input type="radio" name="product_subcat" value="<?php echo $row3['p_subcat_id'];?>">  <?php echo $row3['p_subcat_name'];?>
                                      </li>
                                     <?php
                                       } 
                                      ?>
                                        </ul>
                                      </div>
                                  </div>
                                </li>
                                <?php
                                  }//End of if condition
                             }
                         } 
                        ?>
                        <?php
                          $statement4 = $db->prepare("SELECT * FROM tbl_products_category WHERE p_cat_id NOT IN(SELECT DISTINCT p_cat_id FROM tbl_products_subcategory)");
                          $statement4->execute();
                          $result4 = $statement4->fetchAll(PDO::FETCH_ASSOC);
                          foreach ($result4 as $row4) {
                        ?>
                        <li>
                          <div class="panel-heading">
                          <h4 class="panel-title">
                            <input type="radio" value="<?php echo $row4['p_cat_id'];?>" name="re" required> <?php echo $row4['p_cat_name'];?>
                          </h4>
                          </div>
                        </li>
                        <?php
                          }
                        ?>                                   
                      </ul>
                    </div><br>
                    <input type="submit" value="Update" name="form_add_product" class="btn btn-primary" style="width:150px;float:right">
                  </form>
                </div>
                  <div class="col-lg-3">
                  </div>
                   <?php
                      if(isset($error_message)){
                        ?>
                        <div class="alert alert-block alert-danger fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove">x</i>
                          </button>
                          <strong>Opps!&nbsp; </strong><?php echo $error_message;?>
                       </div>
                        <?php
                      }
                      if (isset($success_message)) {
                       ?>
                        <div class="alert alert-block alert-success fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove">x</i>
                          </button>
                          <strong>Well done!&nbsp; </strong><?php echo $success_message;?>
                       </div>
                       <?php
                        }
                      ?>
              </div>
          </section>
      </section>
      <!--main content end-->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>

    <script type="text/javascript" src="js/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
            $(function() {

                // TinyMCE Full
                tinymce.init({
                    selector: "#tinymce_full",
                    plugins: [
                        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                        "searchreplace wordcount visualblocks visualchars code fullscreen",
                        "insertdatetime media nonbreaking save table contextmenu directionality",
                        "emoticons template paste textcolor"
                    ],
                    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                    toolbar2: "print preview media | forecolor backcolor emoticons",
                    image_advtab: true,
                    templates: [
                        {title: 'Test template 1', content: 'Test 1'},
                        {title: 'Test template 2', content: 'Test 2'}
                    ]
                });
            });

    </script>
    <!--For Radio Buton-->
    <script type="text/javascript">
        var allRadios = document.getElementsByName('re');
        var booRadio;
        var x = 0;
        for(x = 0; x < allRadios.length; x++){

            allRadios[x].onclick = function() {
                if(booRadio == this){
                    this.checked = false;
                    booRadio = null;
                }else{
                    booRadio = this;
                }
            };
        }
    </script>
    <script type="text/javascript">
        var allRadios = document.getElementsByName('product_subcat');
        var booRadio;
        var x = 0;
        for(x = 0; x < allRadios.length; x++){

            allRadios[x].onclick = function() {
                if(booRadio == this){
                    this.checked = false;
                    booRadio = null;
                }else{
                    booRadio = this;
                }
            };
        }
    </script>
  </body>
</html>
