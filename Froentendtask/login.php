<?php 

include ("db.php");
session_start();
$msg = ""; 
if(isset($_POST['LOGIN'])) {
  $username = trim($_POST['name']);
  $password = trim($_POST['password']);
  if($username != "" && $password != "")
   {
    
      $query = "select * from `log` where `uname`=:username and `upassword`=:password";
      $stmt = $db->prepare($query);
      $stmt->bindParam('name', $username);
      $stmt->bindValue('password', $password);
      $stmt->execute();   
    }
  } else {
   header("index.php");
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/style.css">
<!-- <button onclick="register.html">REGISTER</button> -->
</head>
<body>
    <form class="container" action="" method="get">
        <h1 class="heading">USER LOGIN</h1>
       
        <input type="text" name="name" placeholder="Name" required>
      
        <br><br>
        <input type="password" name="password"  maxlength="10"id="password" placeholder=" Password" required>

        <input type="submit" value="LOGIN &#8594;">
        <br><br>
        <input type="checkbox" value="" >REMEMBER ME
    </form>
</body>
</html>