<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
<link rel="stylesheet" type="text/css" href="design.css">
<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">


<!-- <center>
	<h1>USER REGISTRATION FORM</h1>
<form action='userformaction.php'  method="POST">
	Name:<input type="test" name="name"><br>
	Email:<input type="email" name="email"><br>
	Contact No:<input type="number" name="phone"><br>
	Password:<input type="text" name="password"><br>
	<input type="submit" value="Submit">
	<input type="reset" value="Refresh">
</form>
</center> -->
<?php include "connection.php"; ?>
<!-- html codes -->
<div id="body" class="body">
	<div class="f1 tc adminhead orange mt4">USER REGISTRATION FORM</div>
	<center>
		<div id="admin" class="card w-50 center mt4" >
			<form id="register" class="container-fluid text-center" action="userformaction.php" method="POST">
			<div class="form-group">
			    <label for="exampleInputEmail1" class="bmd-label-floating" >Name</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" name="name">			  
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1" class="bmd-label-floating" >Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" name="email">			  
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1" class="bmd-label-floating" >Phone Number</label>
			    <input type="number" class="form-control" id="exampleInputEmail1" name="phone">			  
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1" class="bmd-label-floating">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
			  </div>	
			  <button class="btn btn-default" type="reset">Cancel</button>
			  <button type="submit" class="btn btn-primary btn-raised" onsubmit="dothis()" >Register</button>
			</form>
		</div>
	</center>
</div>



<!-- js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
