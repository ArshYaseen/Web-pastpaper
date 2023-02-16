<?php

$id=$_GET["id"];
$conn=new mysqli("localhost","root","","employee");

$q="Delete from stdinfo where id=".$id;

$result=$conn->query($q);
if($result==TRUE)
{ header("location:show.php");
}

?>