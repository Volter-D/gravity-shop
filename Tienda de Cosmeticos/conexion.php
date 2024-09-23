<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login_gs";


$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die ("Connection falied: ". $conn->connect_error);
}else{
    //echo"Conectado";
}
?>



