<?php
// db_config.php
DEFINE ('DB_USER', 'employee00');
DEFINE ('DB_PASSWORD', 'lovehandle');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'examples');

$db = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: '.mysqli_connect_error());
?>