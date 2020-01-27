<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$email=$_POST['email'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$email = $user_data['email'];
	$mobile = $user_data['mobile'];
}
?>
<html>
<head>	
	<title>Editar Usuario</title>
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
				<p class="mb-0">Formulario de Edición</p>
				  <footer class="blockquote-footer">Formulario de edición de los registros almacenados <cite title="Source Title">en base de datos.</cite>
				  </footer>
			</blockquote>
				<a href="index.php">Regresar</a>
				<br/><br/>				
				<form name="update_user" method="post" action="edit.php">
					<table border="0"class="table">
						<tr> 
							<td>Nombre</td>
							<td><input type="text" name="name" value=<?php echo $name;?>></td>
						</tr>
						<tr> 
							<td>Email</td>
							<td><input type="text" name="email" value=<?php echo $email;?>></td>
						</tr>
						<tr> 
							<td>Telefono</td>
							<td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
						</tr>
						<tr>
							<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
							<td><input type="submit" class="btn btn-success" name="update" value="Update"></td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-3"></div>
		</div>
	</div>

	
</body>
</html>

