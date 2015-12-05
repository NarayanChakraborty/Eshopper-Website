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
	<link href="css/new.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<?php
include('../config.php');
?>
<?php
if(isset($_POST['admin_login']))
{
	try{
		if(empty($_POST['admin_name']))
		{
			throw new Exception("User Name Can not be empty");
		}
		if(empty($_POST['current_password']))
		{
			throw new Exception("Current Passowrd Can not be empty");
		}
		if(empty($_POST['new_password']))
		{
			throw new Exception("New Password Can not be empty");
		}
		if(empty($_POST['confirm_new_password']))
		{
			throw new Exception("Confirm Password Can not be empty");
		}
		
		$admin_name=mysql_real_escape_string($_POST['admin_name']);
		$password=$_POST['current_password'];
	   $password=md5($password);
		
		 $statement=$db->prepare("select * from tbl_admin where admin_name=? and admin_password=?");
	     $statement->execute(array($admin_name,$admin_password));
	     $num=$statement->rowCount();
	    if($num>0)
	    {
	   
	   $new_password=$_POST['new_password'];
	   $confirm_new_password=$_POST['confirm_new_password'];
	   if($new_password.is)
	   
	  }
	  else
	  {
	   throw new Exception('<div class="error">Invalid Username and/or current password</div>');
	   }
		
		
		
	}
}



?>



  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" "action="index.php">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <h3 style="text-align:center;">Password Change</h3><br>
			<div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="custom_form" name="admin_name" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="custom_form" name="prev_password" placeholder="Current Password">
            </div>
			 <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="custom_form" name="new_password" placeholder="New Password">
            </div>
			 <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="custom_form" name="confirm_new_password" placeholder="Confirm New Password">
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="admin_login">Login</button>
            <!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
        </div>
      </form>

    </div>


  </body>
</html>
