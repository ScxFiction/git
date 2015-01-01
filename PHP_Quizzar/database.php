<?php 
	$db_host = 'localhost';//some host example db.somehost.com
	$db_name = 'cd_1';
	$db_user = 'shut';
	$db_pass = 'sho1234';
//Creating mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
//Error Handeler
if ($mysqli->connect_error) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
 ?>