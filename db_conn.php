<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";//database name

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection failed".mysqli_connect_erro());
}
echo("Connected successfully");


?>