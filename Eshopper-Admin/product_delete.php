<?php 
include_once("../config.php");
?>
<?php
if(!isset($_REQUEST['id']))
{
	header('location:view_product.php');
}
else
{
	
	
	 $id=$_REQUEST['id'];
	 
	 //To unlink image
	 $statement1=$db->prepare("select * from tbl_products where p_id=?");
	$statement1->execute(array($id));
	$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
	foreach($result1 as $row1)
		{
			$real_path= "img/products/".$row1['p_img'];
			 unlink($real_path);
		}
	 $statement=$db->prepare("delete from tbl_products where p_id=?");
	 $statement->execute(array($id));
	 //$success_msg2="Category has been successfully Deleted";
	 //echo ""
	 header('location:view_product.php');
 }
?>