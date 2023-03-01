<?php
$servername= "localhost";
$username= "root";
$password= "root";
$db_name= "phpform";
$conn= new mysqli($servername,$username," ",$db_name,3306);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "Connection Successful"; 
?>