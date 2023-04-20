<?php

// Super global variables 
    // $_GET['']
    // $_POST[''] most secure
    // $_SERVER['']
?>
<!-- // Working with HTML forms -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="dashboard.php" method="GET">
    <label for="">Username </label>
    <input type="text" name= "Username">
    <label for="">Email</label>
    <input type="text" name="Email">
    <input type="submit" value= "Submit" name= "Submit">
   </form>
</body>
</html>