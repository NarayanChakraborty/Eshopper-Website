<?php
if(!isset($_REQUEST['B_ID']))
{
	header("location: all_brand.php");
}
else
{
	$B_ID = $_REQUEST['B_ID'];
}

include_once ("../config.php");

$statement = $db->prepare("DELETE FROM tbl_products_brand WHERE p_brand_id=?");
$statement->execute(array($B_ID));

header("location: all_brand.php");
?>