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
$statement1=$db->prepare("select * from tbl_products where p_cat_id=?");
$statement1->execute(array($catID));
$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
foreach($result1 as $row1)
	{
		$real_path= "img/products/".$row1['p_img'];
		unlink($real_path);
	}

$statement = $db->prepare("DELETE FROM tbl_products WHERE p_cat_id=?");
$statement->execute(array($catID));

$statement1 = $db->prepare("DELETE FROM tbl_products_category WHERE p_cat_id=?");
$statement1->execute(array($catID));
header("location: all_category.php");
?>