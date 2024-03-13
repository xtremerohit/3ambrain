<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'accessdb';

$conn = mysqli_connect($server,$username,$password,$database);

if (!$conn) {
    echo "DataBase Not Connected";
}
?>