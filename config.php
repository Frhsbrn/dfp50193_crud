<?php
$databaseHost = 'localhost';
$databaseName = 'database'; 
$databaseUsername = 'root'; 
$databasePassword = ''; 

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (mysqli_connect_errno()) {
    printf("%s \n", mysqli_connect_error());
    exit();
}
