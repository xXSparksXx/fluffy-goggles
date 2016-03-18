<?php 

DEFINE ('DB_USER', 'Admin');
DEFINE ('DB_PASSWORD', 'Password1');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'Contracts');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('mySQL connection error');

?>