<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'midas';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    // echo "Connection ok";
}
else{
    echo "connection failed".mysqli_connect_error();
}
?>