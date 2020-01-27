<html>
<head>
	<title>Agregar Usuario</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<blockquote class="blockquote text-center">
				<p class="mb-0">Formulario de Agregación</p>
				  <footer class="blockquote-footer">Formulario de agregación<cite title="Source Title"> de registros en bd.</cite>
				  </footer>
				</blockquote>
				<a href="index.php">Regresar</a>
				<br/><br/>

				<form action="add.php" method="post" name="form1">
					<table width="25%" border="0" class="table">
						<tr> 
							<td>Nombre</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr> 
							<td>Email</td>
							<td><input type="text" name="email"></td>
						</tr>
						<tr> 
							<td>Telefono</td>
							<td><input type="text" name="mobile"></td>
						</tr>
						<tr> 
							<td></td>
							<td><input type="submit" class="btn btn-success" name="Submit" value="Add"></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-3"></div>
		</div>
	</div
	
	
	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "<div class='container'><div class='row'><div class='col-4'></div><div class='col-4'><p><em>Usuario Agreado Correctamente clic <a href='index.php'>Aqui</a> si desea ver el listado</em></p></div><div class='col-4'></div></div></div";
	}
	?>
</body>
</html>
