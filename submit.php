<?php

$conn=new mysqli("localhost","root","","employee");
session_start();

if(isset($_POST['submit']))
{

    $name=$_POST["Username"];
    $Password=$_POST["Pass"];
    $q="select * from stdinfo where name='$name' and pass='$Password'";
    $result=$conn->query($q);
    if(mysqli_num_rows($result)>0)
    {
        $_SESSION['User_name']=$name;
        echo"<table>";
        echo"<tr>";
        echo"<th>ID</th>";
        echo"<th>Name</th>";
    echo" <th>Email</th>";
        echo"<th>Password</th>";
    echo" </tr>";
    while($row=$result->fetch_assoc())
    {
    echo" <tr>";
    echo"<td>".$row["Id"]."</td>";
    echo"<td>".$row["name"]."</td>";
    echo" <td>".$row["email"]."</td>";
    echo"<td>".$row["pass"]."</td>";
    echo"<td><a href='delete.php?id=".$row['Id']."'>Delete</a> </td>";
    // echo "<td><a href='delete.php?id=".$row["id"]."'>Delete</a></td>";
    echo" </tr>";


    }



    echo"</table>";



    }
    else{
    }
}




?>