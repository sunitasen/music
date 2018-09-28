<?php
include "connection.php";
$name=$_POST['name'];
$type=$_POST['type'];
$link=$_POST['link'];
$insert=mysqli_query($connection,"insert into playlist values('','$name','$type','$link')");


if (isset($insert)) {
	header("location:adminview.php");
}

?>