<?php 
$host = "localhost";
$username ="root";
$password = "";
$databases = "db_food_order";

$con = mysqli_connect("$host","$username","$password","$databases");
mysqli_set_charset($con,"utf8");

if(!$con){
    print("Database Not connect");
}
?>