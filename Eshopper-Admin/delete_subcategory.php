<?php
if(!isset($_REQUEST['subcatID']))
{
	header("location: all_category.php");
}
else
{
	$subcatID = $_REQUEST['subcatID'];
}
?>
<?php include_once("../config.php");?>
<?php
$statement  = $db->prepare("DELETE FROM tbl_products_subcategory WHERE p_subcat_id=?");
$statement->execute(array($subcatID));
header("location: all_category.php");

?>