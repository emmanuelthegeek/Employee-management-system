<?php

$host = "localhost";
$user = "root";
$pass = "";
$db_name = "embila";


$conn = mysqli_connect($host, $user, $pass, $db_name);

if($conn){
    // echo "Connection Successful";
}else{
    echo "Fail to connect";
}
?>