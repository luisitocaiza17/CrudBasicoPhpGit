<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'database';
$databaseName = 'crud_db';
$databaseUsername = 'root2';
$databasePassword = 'root';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>
