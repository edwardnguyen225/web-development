<?php 
    $username = "employee00";
    $password = "lovehandle";
    $hostname = "localhost";
    $dbname   = "examples";
    $db = mysqli_connect($hostname,$username,$password,$dbname) or die("Unable to connect to MySQL");
?>