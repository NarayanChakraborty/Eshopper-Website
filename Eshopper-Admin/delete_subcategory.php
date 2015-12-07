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
$statement1=$db->prepare("select * from tbl_products where p_subcat_id=?");
$statement1->execute(array($subcatID));
$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
foreach($result1 as $row1)
		{
		$real_path= "img/products/".$row1['p_img'];
		 unlink($real_path);
		}

$statement  = $db->prepare("DELETE FROM tbl_products WHERE p_subcat_id=?");
$statement->execute(array($subcatID));

$statement1  = $db->prepare("DELETE FROM tbl_products_subcategory WHERE p_subcat_id=?");
$statement1->execute(array($subcatID));
header("location: all_category.php");

?>