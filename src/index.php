<?php
/**
* Simple PHP CRUD Script
* Developed by TutorialsClass.com
* URL:  http://tutorialsclass.com/code/php-simple-crud-application
**/

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Inicio</title>
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
	<br>
	<blockquote class="blockquote text-center">
	  <p class="mb-0">Crud Basico PHP (7)</p>
	  <footer class="blockquote-footer">Este es un ejemplo basico de un CRUD hecho en php <cite title="Source Title">Creditos a los autores originales <b>https://tutorialsclass.com/</b></cite>
	  <a href="https://tutorialsclass.com/code/php-simple-crud-application">Descarga Original</a>	  
	  </footer>
	</blockquote>
	<br>
	<a href="add.php">Agregar Usuario</a>
	<br>
	<br>
    <table width='80%' border=1 class="table">
    <thead class="thead-dark">
		<tr>
			<th>Nombre</th> <th>Telefono</th> <th>Email</th> <th>Actualizar</th>
		</tr>
	</thead>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['mobile']."</td>";
        echo "<td>".$user_data['email']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table></div>
	<div class="col-3"></div>
  </div>
</div>
</body>
</html>
