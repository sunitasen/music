<!-- <center>
	<h1>Registration Form</h1>
<form action='addform.php'  method="POST">
	Name:<input type="test" name="name"><br>
	type:<input type="text" name="type"><br>
	link:<input type="text" name="link"><br>
	<input type="submit" value="Submit">
	<input type="reset" value="Refresh">
</form>
</center> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://unpkg.com/tachyons/css/tachyons.min.css">
<link rel="stylesheet" type="text/css" href="design.css">
<link href="https://fonts.googleapis.com/css?family=Chicle" rel="stylesheet">


<!-- html codes -->
<div id="body" class="body">
	<div class="f1 tc adminhead mt4">Add songs</div>
	<center>
		<div id="playlistEdit" class="card w-50 center mt4" >
			<form class="container-fluid text-center" action="addform.php" method="POST">
			<div class="form-group">
			    <label for="exampleInputEmail1" class="bmd-label-floating" >Name</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" name="name">			  
			 </div>
			 <div class="form-group">
			    <label for="exampleInputEmail1" class="bmd-label-floating" >Type</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" name="type">			  
			 </div>
			 <div class="form-group">
			    <label for="exampleInputEmail1" class="bmd-label-floating" >Link</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" name="link">			  
			 </div>
			  <button class="btn btn-default" type="reset">Cancel</button>
			  <button type="submit" class="btn btn-primary btn-raised">Add</button>
			</form>
		</div>
	</center>
</div>




<!-- js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>