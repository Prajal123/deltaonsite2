<?php
$servername="localhost";
$username="root";
$password="";
$database="url shortener";
$base_url="https://localhost/deltaon1/";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    echo "Something went wrong";
}
?>
