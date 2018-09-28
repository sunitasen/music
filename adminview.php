<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
<link rel="stylesheet" type="text/css" href="design.css">
<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">


<?php
session_start();
include "connection.php";
$id=$_SESSION['user_id'];
// echo 'Name:'.$_SESSION['user_name'];
// $profile=mysqli_query($connection,"select * from details where ID='$id'");
// $res=mysqli_fetch_assoc($profile);
// echo 'You are logged in as:Admin'.'<br>';

// echo 'Email-id:'.$res['Email'].'<br>';

include "connection.php";?>

<p class="tc center f2 mt4">Welcome, dear admin!</p>

<center>
	 <a class="f3 link dim br-pill ph3 pv2 mb2 dib white bg-blue logout" href="logout.php">Logout</a>
	 <a class="f3 link dim br-pill ph3 pv2 mb2 dib white bg-blue logout" href="add.php">Add</a>

</center>


<div id="bengali" class="container-fluid center mt-4 pt3 w-50 mb5" >
	<table class="table">
	  <thead>
	    <tr>	     
	      <th scope="col" class="tc center">Id</th>   
	      <th scope="col" class="tc center">Name</th>
	      <th scope="col" class="tc center">type</th>  
		  <th scope="col" class="tc center">Link</th>
		  <th scope="col" class="tc center">Edit</th>
		  <th scope="col" class="tc center">Delete</th>

	    </tr>
	  </thead>
	  <tbody>
		<?php
		$fetch=mysqli_query($connection,"select * from playlist ");
		$i =0;
		while($res=mysqli_fetch_assoc($fetch)){  $i++;?>
			<tr>
				<td><?php echo $res['ID'] ?></td>
				<td><?php echo $res['name'] ?></td>
				<td><?php echo $res['type'] ?></td>
				<td><?php echo $res['link'] ?></td>
				<td><a href="edit.php?id=<?php echo $res['ID'] ?>">Edit</a></td>
				<td><a href="delete.php?id=<?php echo $res['ID'] ?>">Delete</a></td>
			</tr>
		  <?php }  ?>
		 </tbody>
	</table>
</div>





<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>