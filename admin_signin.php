<?php
include("class/admin.php");
$signin=new admin;
extract($_POST);
if($signin->signin($em,$pa))
{
	$signin->url("admin/index.php");
}
else
{
	$signin->url("index.php?run1=failed");
}




?> 