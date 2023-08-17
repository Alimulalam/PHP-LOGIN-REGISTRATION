<?php
$userlocation = 'localhost';
$user = 'root';
$password = '';
$dbname = 'myloginsystem';

$conn = new mysqli($userlocation, $user,$password,$dbname);
// $conn = new mysqli('localhost','root','','myloginsystem');
    if (!$conn) {
        echo 'Not Connent';
    }else {
        echo ' Done';
    }

?>