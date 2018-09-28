<?php
session_start();
include "connection.php";
$id=$_SESSION['user_id'];
// echo 'Name:'.$_SESSION['user_name'];
$profile=mysqli_query($connection,"select * from user_details where ID='$id'");
$res=mysqli_fetch_assoc($profile);
echo 'You are logged in as:'.$res['Name'].'<br>';
echo 'Email-id:'.$res['Email'].'<br>';




?>
<a href="logout.php">Logout</a>