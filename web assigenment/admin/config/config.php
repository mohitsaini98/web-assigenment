<?php
ini_set("display error",1);
session start();

$host='localhost';
$username="root"
$password=""
$database="bms"
$conn =new mysquil('localhost',"root","","bms")

if($conn->connect_error)
{
    echo 'failed'
}
else{
    echo 'pass'
}
?>