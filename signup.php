<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    Signup Form 
    </h1>
    
<form action="signupp.php" Method="POST">
<input type="text"  name="Firstname" placeholder=" First name">
<input type="text"  name="Lastname" placeholder="last name"><br><br>
<input type="text"  name="Email" placeholder="Email"><br><br>
<input type="text"  name="Password" placeholder="Password"><br><br>
<input type="text"  name="Re-password" placeholder="Retype Password"><br><br>
<input type="radio" name="gender" value="Male">
<label for="Male">Male</label>
<input type="radio" name="gender" value="Female">
<label for="Female">Female</label><br>
<label for="Semesters" placeholder="Select your current semester"></label><br><br>
<select name="Semester" >
<option value="0">Select your current semester</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
</select><br><br>
<input type="checkbox" name="Terms">
<label for="Terms"> I agree with terms and conditions </label><br><br>
<input type=submit value="Register">




    



</form>




</body>
</html>