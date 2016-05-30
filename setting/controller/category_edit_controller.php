<?php 

$cn_edit=$_REQUEST['cn_edit'];
echo($cn_edit);
$obj= new Certification;
$rs=$obj->update_category($cn_edit);
if($rs){
	echo "Data updated Sucessfully";
	}











?>