<?php 

$sname = "localhost";
$unmae = "root";
$password = "";

Sdb_name = "test1_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn) {
    echo "Connection Failed";
}