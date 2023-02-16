<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            border:2px solid red;
        }
    </style>
</head>
<body>

<?php
$conn=new mysqli("localhost","root","","employee");
$q="select * from stdinfo";
$result=$conn->query($q);
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


 


?>
     <a href="logout.php">LOGOUT</a>
    
    





</body>
</html>