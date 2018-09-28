<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
<link rel="stylesheet" type="text/css" href="design.css">
<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">


<?php
include "connection.php";
$id=$_POST['id'];
$name=$_POST['name'];
$type=$_POST['type'];
$link=$_POST['link'];
$insert=mysqli_query($connection,"Update playlist set Name='$name',type='$type',link='$link'  where ID='$id'");
if(isset($insert)){?>
	<p class="f1 tc center">Succesfully updated!</p>
	<center>
		<a class="f2 link dim br-pill ph3 pv2 mb2 dib white bg-pink logout" href="adminview.php">Go back to playlist-></a>
	</center>

<?php
}else{ ?>
	<p class="f1 center tc w-50 mt5">Hold right there,sparky!</p>
	<p class="f1 center tc w-50 mt5">Access denied.Enter correct info. please!(:</p>

<?php } ?>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>