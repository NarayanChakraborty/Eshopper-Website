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
    
	if(isset($_POST['form_edit_brand']))
	{
		try{
			if(empty($_POST['edit_brand_name']))
			{
				throw new Exception('Brand Name Can not be Empty');
			}
			
	/*---------------------------------Image Upload------------------------------*/
	
	if(getimagesize($_FILES['new_brand_img']['tmp_name'])==FALSE)
		 {
		   throw new Exception("Please select an image"); //access only image
		 }
		 if($_FILES['new_brand_img']['size']>1000000){
		 throw new Exception("Sorry,your file is too large"); //image file must be<1MB
		 }
		
		
	    //To generate id(next auto increment value from tbl_post)
		$statement=$db->prepare("show table status like 'tbl_products' ");
		$statement->execute();
		$result=$statement->fetchAll();
		foreach($result as $row)
		$new_id=$row[10];
		   
		//access image process one;   
	    $up_filename=$_FILES['new_brand_img']['name'];   //file_name
		$file_basename=substr($up_filename,0,strripos($up_filename,'.'));//orginal image name
		$file_ext=substr($up_filename,strripos($up_filename,'.')); //extension
		$f2=$new_id.$file_ext;  //Rename filename;

	    
		//only allow png ,jpg,jpeg,gif
		if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!=['.gif']))
		{
			throw new Exception("only jpg,jpeg,png and gif format are allowed");
		}
		
						//To unlink previous image
				
				
                        $statement1=$db->prepare("select * from tbl_products_brand where p_brand_id=?");
						$statement1->execute(array($id));
						$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
						foreach($result1 as $row1)
						{
							$real_path= "img/brands/".$row1['p_brand_img'];
						    unlink($real_path);
						}
	     
        //upload image to a folder
        move_uploaded_file($_FILES['new_brand_img']['tmp_name'],"img/brands/".$f2);		
	
	
   //----------------------------------Image Upload----------------------------
			

			$brand_name=mysql_real_escape_string($_POST['edit_brand_name']);
			$statement2=$db->prepare('update tbl_products_brand set p_brand_name=?,p_brand_image=? where p_brand_id=?');
			$statement2->execute(array($brand_name,$f2,$_POST['hidden_id_for_edit_brand']));
						
			
			$success_message1='Brand Name Successfully Updated';
		}
		catch(Exception $e)
		{
		    $error_message1=$e->getMessage();	
		}
	}



?>

<?php

     if(isset($_POST['form_add_brand']))
	 {
		 try{
			 
			  if(empty($_POST['brand_name']))
			  {
				  throw new Exception('Brand Name Can not be empty');
			  }

 /*---------------------------------Image Upload------------------------------*/
	
	if(getimagesize($_FILES['brand_img']['tmp_name'])==FALSE)
		 {
		   throw new Exception("Please select an image"); //access only image
		 }
		 if($_FILES['brand_img']['size']>2000000){
		 throw new Exception("Sorry,your file is too large"); //image file must be<1MB
		 }
		
		
	    //To generate id(next auto increment value from tbl_post)
		$statement=$db->prepare("show table status like 'tbl_products' ");
		$statement->execute();
		$result=$statement->fetchAll();
		foreach($result as $row)
		$new_id=$row[10];
		   
		//access image process one;   
	    $up_filename=$_FILES['brand_img']['name'];   //file_name
		$file_basename=substr($up_filename,0,strripos($up_filename,'.'));//orginal image name
		$file_ext=substr($up_filename,strripos($up_filename,'.')); //extension
		$f1=$new_id.$file_ext;  //Rename filename;

	    
		//only allow png ,jpg,jpeg,gif
		if(($file_ext!='.png')&&($file_ext!='.jpg')&&($file_ext!='.jpeg')&&($file_ext!=['.gif']))
		{
			throw new Exception("only jpg,jpeg,png and gif format are allowed");
		}
	     
        //upload image to a folder
        move_uploaded_file($_FILES['brand_img']['tmp_name'],"img/brands/".$f1);		
	
	
   //----------------------------------Image Upload----------------------------
    
			  
			  
			  
			  
			  $brand_name=mysql_real_escape_string($_POST['brand_name']);
			  $statement2=$db->prepare('insert into tbl_products_brand (p_brand_name,p_brand_image) values(?,?)');
			  $statement2->execute(array($brand_name,$f1));
			  $success_message2="New Brand Success Fully Created";
		 }
		 catch(Exception $e)
		 {
			 $error_message2=$e->getMessage();
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
  
              <div class='row'>
			     
			    <div class='col-lg-1'>
				</div>
					<div class='col-lg-6'>
					<br>
				      <ol>  
						<?php 
				          
						  $statement=$db->prepare('Select * from tbl_products_brand ');
						  $statement->execute();
						  $result=$statement->fetchAll(PDO::FETCH_ASSOC);
						  foreach( $result as $row)
						  {
							  ?>
							  
							<li>  
							  <label style="width:50%;"><strong><?php echo $row['p_brand_name']; ?></strong></label>
							<a class="btn btn-info " data-toggle="modal" href="#myModal<?php echo $row['p_brand_id'];?>">
                                Edit
                              </a>
                              <a class="btn btn-danger " data-toggle="modal"
							  data-target="#MyModal<?php echo $row['p_brand_id'];?>"  >
                                  Delete!
                              </a>
							  
							<!-- Modal -->
							  <div class="modal fade" id="myModal<?php echo $row['p_brand_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									  <h4 class="modal-title">Edit This Brand Name</h4>
									</div>
									<div class="modal-body">
									  <h4>Previous Brand Logo</h4>
									  <img src="img/brands/<?php echo $row['p_brand_image'];?>" width="120" height="100">
									  <form method="post" action="" enctype="multipart/form-data">   
									  <h4>Select New Logo</h4>
									  <input type="file"class="form-control" name="new_brand_img"><br>
									  <h4>New Brand Name :</h4>
										<input type="text"value="<?php echo $row['p_brand_name'];?>"class="form-control" name="edit_brand_name"><br>
										<button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
										<input type="hidden" name="hidden_id_for_edit_brand" value="<?php echo $row['p_brand_id'];?>">
										<input type="submit" value="Update" class="btn btn-success" name="form_edit_brand">
									  </form>
									</div>         
								  </div>
								</div>
							  </div>
							  <!-- modal -->
							  
							  
							  <!-------------FOR Delete-------------->
							  
							  <!-- Modal -->
								<div id="MyModal<?php echo $row['p_brand_id'];?>" class="modal fade " role="dialog">
								  <div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
									  <div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title">DELETE Confirmation</h4>
									  </div>
									  <div class="modal-body">
										<h4>This operation will delete all products under this brand.<br>
										Are You Confirm To Delete This brand?</h4>
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<a class="btn btn-danger btn-ok" href="delete_brand.php?ID=<?php echo $row['p_brand_id'];?>" >Confirm</a>
									  </div>
									</div>

								  </div>
								</div>
															  
															  
							  <!-------------FOR Delete-------------->
						   	</li><br>						  
						   <?php
						  }
						  ?>
						   
						</ol> 
						
					<?php	
					 if(isset($error_message1)){
                        ?>
                        <div class="alert alert-block alert-danger fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove"> X</i>
                          </button>
                          <strong>Opps!&nbsp; </strong><?php echo $error_message1;?>
                       </div>
                        <?php
                      }
                      if (isset($success_message1)) {
                       ?>
                       <div class="alert alert-success fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"> X</i>
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
                          <i class="icon-remove"> X</i>
                          </button>
                          <strong>Opps!&nbsp; </strong><?php echo $error_message2;?>
                       </div>
                        <?php
                      }
                      if (isset($success_message2)) {
                       ?>
                       <div class="alert alert-success fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove">X</i>
                          </button>
                          <strong>Well done!&nbsp; </strong><?php echo $success_message2;?>
                       </div>
                       <?php
                        }
                      ?>					 
												
					<br><br>
                    <form enctype="multipart/form-data" method="post">
                      <h3>New Brand Name</h3>
					  <input type="text"name="brand_name"class="form-control" placeholder="Type Here..">
					  <h3>Brand Logo</h3>
                      <input type="file"class="form-control" name="brand_img"><br>
                      <input type="submit" value="Save" name="form_add_brand"class="btn btn-primary">
                  </form>
					</div>
					<div class="col-lg-5">
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

  </body>
</html>
