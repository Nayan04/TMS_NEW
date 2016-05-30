<?php 
include("../modal/database.php");
if(isset($_REQUEST['cat_name'])){
$cat=$_REQUEST['cat_name'];
$obj= new Certification;
$last=$obj->last_id();


if($rs=mysql_fetch_array($last)){
	$rown=$rs['las'];
	}
	
$row=$rown+1;
$rs=$obj->submit_category($cat,$row);
echo "Data Saved Sucessfully!!!";

}

else {
	echo "yy";
	}

?>

