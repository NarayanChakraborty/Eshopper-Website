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
		if((empty($_POST['admin_name']))||(empty($_POST['current_password']))||(empty($_POST['new_password']))||(empty($_POST['confirm_new_password'])))
		{
			throw new Exception("No Field Can be empty");
		}
		
		if(!(preg_match("/^[a-z0-9_-]{6,40}$/i", $_POST['new_password'])))
		{
		  throw new Exception("Your Passord length must be atleast of 6 characters");
		}
		
		$admin_name=mysql_real_escape_string($_POST['admin_name']);
	
		 $statement=$db->prepare("Select * from tbl_admin where admin_id=1");
		$statement->execute();
		$result=$statement->fetchAll(PDO::FETCH_ASSOC);
		foreach($result as $row)
		{
			if((md5($_POST['current_password']))!=$row['admin_password'])
			{
				throw new Exception("Current Password Does not Match");
			}
		}
       $new_password=$_POST['new_password'];
	   $confirm_new_password=$_POST['confirm_new_password'];
	   if($new_password!=$confirm_new_password)
	   {
		   throw new Exception('New Password and Confirm New Password Does not Match');
	   }
	   $new_password=md5($new_password);
	   
	   $statement=$db->prepare("update tbl_admin set admin_password=? where admin_id=1");
		$statement->execute(array($new_password));
		$success_message="Password has been successfully updated";
		
		
	   	
	}
	catch(Exception $e)
{
	$error_message=$e->getMessage();
}
}



?>



  <body class="login-img3-body">

    <div class="container">

	           <?php
                      if(isset($error_message)){
                        ?>
                        <div class="alert alert-block alert-danger fade in " style="margin-top:30px;text-align:center;width:40%;margin-left:30%;">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove">x</i>
                          </button>
                          <strong>Opps!&nbsp; </strong><?php echo $error_message;?>
                       </div>
					
					<?php 
					  }
	                  if (isset($success_message)) {
                       ?>
                        <div class="alert alert-block alert-success fade in " style="margin-top:30px;text-align:center;width:40%;margin-left:30%;">
                          <button data-dismiss="alert" class="close close-sm" type="button">
                          <i class="icon-remove">x</i>
                          </button>
                          <strong>Well done!&nbsp; </strong><?php echo $success_message;?>
						  <br><br><strong><a href="index.php" style="font-size:17px;">Back to Dashboard</a></strong>
                       </div>
                       <?php
                        }
                      ?>

	
      <form class="login-form" style="margin-top:120px;""action="" method="POST">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <h3 style="text-align:center;">Password Change</h3><br>
			
			<div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="custom_form" name="admin_name" placeholder="Username" autofocus required>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="custom_form" name="current_password" placeholder="Current Password" required>
            </div>
			 <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="custom_form" name="new_password" placeholder="New Password" required>
            </div>
			 <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="custom_form" name="confirm_new_password" placeholder="Confirm New Password" required>
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="admin_login">Login</button>
            <!--<button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>-->
        </div>
      </form>

    </div>
	               
	  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
