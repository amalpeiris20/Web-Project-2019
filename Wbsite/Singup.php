<?php

if(isset($result['submit']))
{
include_once 'Connection/Untitled-1.php';
$NIC = $_REQUEST["NIC_Number"];
$Eail = $_REQUEST["Email"];
$Password= $_REQUEST["Password"];
$msg = $_REQUEST["msg"];


$sql = "INSERT INTO `customerinformation`(`UserID`, `EmailAddress`, `Password`, `Message`) VALUES('$NIC','$Eail','$Password','$msg')";

$result = mysqli_query($conn,$sql);
if($result= 1)
{
    header("Location: ./e reads/Signup Form with Social login/sign up.html?Singup='Success'");
}
else
{
    header("Location: ./e reads/Signup Form with Social login/sign up.html?Singup='Unsuccess'");
}
}


