<?php


$name=$_POST['Name'];
$email=$_POST['Email'];
$Pass=$_POST['Password'];

$conn=new mysqli("localhost","root","","employee");

$q="insert into stdinfo(name,email,pass) values ('".$name."','".$email."','".$Pass."')";
if($conn->query($q)==TRUE)
{
    echo"Inserted";
    header("location:show.php");
}
else{
    echo "Not inserted";
}

?>