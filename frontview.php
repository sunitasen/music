<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
<link rel="stylesheet" type="text/css" href="design.css">
<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

									<!-- connection with dbms -->
<?php include "connection.php"; ?>


											<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-dark">
	  <a class="navbar-brand tc" id="heading" href="#">Music</a>
	  <div class="collapse navbar-collapse items-end" id="navbarSupportedContent">
	    <form class="form-inline my-2 my-lg-0 " action="userlogin.php">
	      <button class=" items-end btn btn-outline-warning something my-2 my-sm-0" type="submit">Login as user</button>
	    </form>
		<form class="form-inline my-2 my-lg-0" action="admin.php">
	      <button class="btn btn-outline-warning something my-2 my-sm-0" type="submit">Login as admin</button>
	    </form>	  
	  </div>
	</nav>
	

									<!-- Page heading -->
	<div class="f1 tc center mt3"> Welcome to the world of music</div>
	<div class="f2 tc center">Login to listen to music.</div>
	<div class="f3 tc center">Its free and always will be ;)</div>


									<!-- songs list-hindi eng and ben -->

<!-- hindi songs -->
<div id="hindi" class="container-fluid center mt-4 pt3 w-50" >
	<p class="tc f2 headlines" style="color: red;"><u>Bollywood Dhamaka</u></p>
	<table class="table">
	  <thead>
	    <tr>	     
	      <th scope="col" class="tc center">Name of the songs</th>    
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
	    </tr>
	  </thead>
	  <tbody>
	  	<?php	  	
		$fetch=mysqli_query($connection,"select * from playlist where type='english'");
			
			
			while($res=mysqli_fetch_assoc($fetch)){ ?>
	    <tr>
	     
	    
			<td class="tc"><?php echo $res['name']?></td>

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
	    </tr>
	  </thead>
	  <tbody>
	  	<?php	  	
		$fetch=mysqli_query($connection,"select * from playlist where type='bengali'");
			
			
			while($res=mysqli_fetch_assoc($fetch)){ ?>
	    <tr>
	    
			<td class="tc"><?php echo $res['name']?></td>

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