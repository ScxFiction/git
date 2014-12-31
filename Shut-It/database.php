<?php 
//Conect to MySql
$con = mysqli_connect("localhost","shut", "sho1234", "cd_1");
//Test
if (mysqli_connect_errno()) {
	echo 'Faild to connect to MySQL: ' .mysqli_connect_error() ;
}
 ?>