<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
<link rel="stylesheet" type="text/css" href="design.css">
<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


<?php
session_start();
include "connection.php";
$id=$_SESSION['user_id'];
// echo 'Name:'.$_SESSION['user_name'];
$profile=mysqli_query($connection,"select * from user_details where ID='$id'");
$res=mysqli_fetch_assoc($profile);
// echo 'You are logged in as:'.$res['name'].'<br>';
// echo 'Email-id:'.$res['email'].'<br>';
?>
<div class="container mt4 mb3">
	<div class="row">
		<div class="col-8">
			<p class="f2">Welcome!<?php echo $res['name'] ?>.</p>
		</div>
		<div class="col-4">
		 	<a class="f3 link dim br-pill ph3 pv2 mb2 dib white bg-black" style="float: right;" href="logout.php">Logout</a>
		</div>
	</div>
</div>

<!-- songs list-hindi eng and ben -->

<!-- hindi songs -->
<div id="hindi" class="container-fluid center mt-4 pt3 w-50" >
	<p class="tc f2 headlines" style="color: red;"><u>Bollywood Dhamaka</u></p>
	<table class="table">
	  <thead>
	    <tr>	     
	      <th scope="col" class="tc center">Name of the songs</th> 
	      <th scope="col" class="tc center"></th>    
   
	    </tr>
	  </thead>
	  <tbody>
	  	<?php	  	
		$fetch=mysqli_query($connection,"select * from playlist where type='hindi'");
			
			$count=mysqli_num_rows($fetch);			
			$i = 0;
			while($res=mysqli_fetch_assoc($fetch)){ ?>
	    <tr>
	    
			<td class="tc"><?php echo $res['name']?></td>
			<td class="tc">
				<a class="f5 link dim br-pill ph3 pv2 mb2 dib white bg-red" href="<?php echo $res['link'] ?> "  target="_blank">Listen Now</a>
			</td>

	    </tr>
	    <?php } ?>
	    <!-- <tr>
	      <th scope="row">3</th>
	      <td>Larry</td>
	      <td>the Bird</td>
	      <td>@twitter</td>
	    </tr -->
	  </tbody>
	</table>

</div>

<!-- English songs -->
<div id="english" class="container-fluid center mt-4 pt3 w-50" >
	<p class="tc f2 headlines " style="color: green;"><u>Hollywood Fun</u></p>
	<table class="table">
	  <thead>
	    <tr>	     
	      <th scope="col" class="tc center">Name of the songs</th> 
	      <th scope="col" class="tc center"></th>    
   
	    </tr>
	  </thead>
	  <tbody>
	  	<?php	  	
		$fetch=mysqli_query($connection,"select * from playlist where type='english'");
			
			
			while($res=mysqli_fetch_assoc($fetch)){ ?>
	    <tr> 
			<td class="tc"><?php echo $res['name']?></td>
			<td class="tc">
				<a class="f5 link dim br-pill ph3 pv2 mb2 dib white bg-green" href="<?php echo $res['link'] ?> "  target="_blank">Listen Now</a>
			</td>	    
		</tr>
	    <?php } ?>
	    <!-- <tr>
	      <th scope="row">3</th>
	      <td>Larry</td>
	      <td>the Bird</td>
	      <td>@twitter</td>
	    </tr -->
	  </tbody>
	</table>

</div>

<!-- bengali songs -->
<div id="bengali" class="container-fluid center mt-4 pt3 w-50" >
	<p class="tc f2 headlines" style="color: blue;"><u>Tollywood musts</u></p>
	<table class="table">
	  <thead>
	    <tr>	     
	      <th scope="col" class="tc center">Name of the songs</th> 
	      <th scope="col" class="tc center"></th>    
	    </tr>
	  </thead>
	  <tbody>
	  	<?php	  	
		$fetch=mysqli_query($connection,"select * from playlist where type='bengali'");
			
			
			while($res=mysqli_fetch_assoc($fetch)){ ?>
	    <tr>
			<td class="tc"><?php echo $res['name']?></td>
			<td class="tc">
				<a class="f5 link dim br-pill ph3 pv2 mb2 dib white bg-blue" href="<?php echo $res['link'] ?> "  target="_blank">Listen Now</a>
			</td>
	    </tr>
	    <?php } ?>
	    <!-- <tr>
	      <th scope="row">3</th>
	      <td>Larry</td>
	      <td>the Bird</td>
	      <td>@twitter</td>
	    </tr -->
	  </tbody>
	</table>

</div>





<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>