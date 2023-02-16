<?php

$name=$_POST['Firstname'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$conn=new mysqli("localhost","root","","employee");
$q="insert into stdinfo(name,email,pass) values('".$name."','".$email."','".$pass."')";


$result=$conn->query($q);
if($result==TRUE)
{
    header("location:signin.php");
}
















?>