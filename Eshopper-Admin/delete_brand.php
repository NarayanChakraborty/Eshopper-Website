<?php
if(!isset($_REQUEST['ID']))
{
	header("location:all_brand.php");
}
else
{
		$id=$_REQUEST['ID'];
}

?>
<?php include_once("../config.php"); ?>
<?php

$statement1=$db->prepare('delete from tbl_products_brand where p_brand_id=?');
$statement1->execute(array($id));

header("location:all_brand.php");
?>