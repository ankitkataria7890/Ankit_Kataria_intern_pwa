<?php
$host='localhost';
$dbuser='root';
$dbpassword='';
$dbname='image';
$con=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
if(!$con){
 die("not connected");}

?>