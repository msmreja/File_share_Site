<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
     echo "";	
}
else
{
	die("Connetion faild becuse".mysqli_connect_error());
	
}
?>