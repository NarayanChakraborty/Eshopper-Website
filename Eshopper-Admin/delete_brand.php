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
$statement1=$db->prepare("select * from tbl_products where p_brand_id=?");
$statement1->execute(array($id));
$result1=$statement1->fetchAll(PDO::FETCH_ASSOC);
foreach($result1 as $row1)
	{
		$real_path= "img/products/".$row1['p_img'];
		unlink($real_path);
	}

$statement=$db->prepare('delete from tbl_products where p_brand_id=?');
$statement->execute(array($id));

$statement1=$db->prepare('delete from tbl_products_brand where p_brand_id=?');
$statement1->execute(array($id));

header("location:all_brand.php");
?>