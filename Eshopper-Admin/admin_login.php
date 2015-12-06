<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<?php
include('../config.php');
if(isset($_POST['login']))
{
    try{
	   if(empty($_POST['a_password']))
	   {
	    throw new Exception('Password can not be empty');
	   }
	   if(empty($_POST['a_name']))
	   {
	    throw new Exception('Username can not be empty');
	   }
	   $num=0;
	   $password=$_POST['a_password'];
	   $password=md5($password);
	  
	  $statement=$db->prepare("select * from tbl_admin where admin_name=? and admin_password=?");
	  $statement->execute(array($_POST['a_name'],$password));
	  $num=$statement->rowCount();

	  if($num>0)
	  {
	     session_start();
		 
		 $_SESSION['name']="snchousebd";
		 $success_msg="You are Successfully Logged In";
		 header('location: index.php');
	  }
	  else
	  {
	   throw new Exception('Invalid Username and/or password');
	   }
	}
	catch(Exception $e)
	{
	$error_msg=$e->getMessage();
	}
}
?>




  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" method="POST" action="">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control"name="a_name" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" name="a_password" placeholder="Password">
            </div>
			<!----
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label
			--->
            <button class="btn btn-primary btn-lg btn-block" name="login" type="submit">Login</button>
            <!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
        </div>
      </form>

    </div>
	          <?php
			          /*
                       if (isset($success_msg)) {
                       ?>
                        <div class="alert alert-block alert-success fade in">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove">x</i>
                          </button>
                          <strong>Well done!&nbsp; </strong><?php echo $success_msg;?>
                       </div>
                       <?php
                        }			  
			              */
			  
	                     if (isset($error_msg)) {
                       ?>
                        <div class="alert alert-block alert-danger fade in " style="text-align:center;width:40%;margin-left:30%;" >
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove">x</i>
                          </button>
                          <strong>Sorry!&nbsp; </strong><?php echo $error_msg;?>
                       </div>
                       <?php
                        }
                      ?>
                      
					  

					  
					  
	  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
