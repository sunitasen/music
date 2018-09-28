<?php
session_start();
include "connection.php";
$email=$_POST['email'];
$password=$_POST['Password'];
$match=mysqli_query($connection,"select * from user_details where email='$email' and password='$password'");
if(mysqli_num_rows($match)==1){
	$res=mysqli_fetch_assoc($match);
	$_SESSION['user_id']=$res['ID'];
	$_SESSION['user_name']=$res['Name'];
	header("location:profile.php");
	// print_r($res);

	// echo 'Log In Successful';
}else{
	?>
	
<script type="text/javascript">
	alert("Wrong Email id/password.");
</script>


<?php }




?>