<?php

$dbServer ="localhost";
$dbUsername ="root";
$dbPassword = "";
$dbName = "e_reads";

$conn = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);

if($conn->connect_error)
{
    die("Connection filed : ".$conn->connect_error);
}

echo "dijhdsa";