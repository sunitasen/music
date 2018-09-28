<!-- <center>
<h1>Log In</h1>
<form action="logaction.php" method="POST">
Email:<input type="text" name="email"><br><br>
Password:<input type="text" name="Password"><br>
<input type="submit" value="LogIn" name="login">
<input type="reset" value="refresh">
</form>
<p>Register-><a href="form.php">Here</a></p>
</center> -->

<!-- css files -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
<link rel="stylesheet" type="text/css" href="design.css">
<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">


<!-- html codes -->
<div id="body" class="body">
	<div class="f1 tc adminhead blue mt4">Admin Login</div>
	<center>
		<div id="admin" class="card w-50 center mt4" >
			<form class="container-fluid text-center" action="logaction.php" method="POST">
			  <div class="form-group">
			    <label for="exampleInputEmail1" class="bmd-label-floating" >Email address</label>
			    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
			  
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1" class="bmd-label-floating">Password</label>
			    <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
			  </div>	
			  <button class="btn btn-default" type="reset">Cancel</button>
			  <button type="submit" class="btn btn-primary btn-raised">LogIn</button>
			</form>
		</div>
	</center>
</div>


<!-- js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>