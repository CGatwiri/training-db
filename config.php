<?php
$serverName="localhost";
$username="root";
$password="";
$db="trainingdb";

$conn=mysqli_connect($serverName,$username,$password,$db);

if(!$conn)
{
	die("Connection Failed:".mysqli_connect_error());
}
echo"Connected Successfully";