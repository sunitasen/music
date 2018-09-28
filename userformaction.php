<?php
session_start();
include "connection.php";
$name=$_POST['name'];
$email=$_POST['email'];
$contact_No=$_POST['phone'];
$password=$_POST['password'];
$value=mysqli_query($connection,"select * from user_details where email='$email' ");

if(mysqli_num_rows($value)>=1){
	header("location:duplicatelogin.php");
}

else{
$insert=mysqli_query($connection,"insert into user_details values('','$name','$password','$email','$contact_No')");

	if (isset($insert)) {
		$_SESSION['user_id']=$res['ID'];
		$_SESSION['user_name']=$res['name'];
		header("location:afterregister.php");
	}
}

?>