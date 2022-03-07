<?php
$servername="localhost";
$username="root";
$password="";
$database="web";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn)
{
    die("Error deleting record:".mysqli_error($con));

} 
?>