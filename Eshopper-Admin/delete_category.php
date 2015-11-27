<?php
if(!isset($_REQUEST['catID']))
{
	header("location: all_category.php");
}
else
{
	$catID = $_REQUEST['catID'];
}
?>
<?php include_once("../config.php");?>
<?php
$statement = $db->prepare("DELETE FROM tbl_products_subcategory WHERE p_cat_id=?");
$statement->execute(array($catID));

$statement1 = $db->prepare("DELETE FROM tbl_products_category WHERE p_cat_id=?");
$statement1->execute(array($catID));
header("location: all_category.php");
?>