<?php
include_once("db.php");
  if (isset($_POST["SignUp"])){ 
   
    $username = $_POST["name"]; 
    $email = $_POST["email"]; 
    $Phone=$_POST["Phone"];
    $password = $_POST["password"]; 
    $Cpass=$_POST["cpassword"];

$sql="INSERT INTO log(uname,upassword,confirmpass,mail,Phoneno)VALUES(:unamE,:paSS,:cpaSS,:emaiL,:phonenO)";
$stmt=$ConnectingDB->prepare($sql);//here we use conncetiongdb as an object
$stmt->bindValue(':uenamE',$username);
$stmt->bindValue(':emaiL',$email);
$stmt->bindValue(':phonenO',$Phone);
$stmt->bindValue(':paSS',$password);
$stmt->bindValue(':cpaSS',$Cpass);
$Execute=$stmt->execute();
if($Execute)
{
echo "record has been added successfully" ;
//echo "executed successfuly";
}
else
{
 echo "oops smething went wrong";
}
  }
// Close connection
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form class="container" action="" method="get">
        <h1 class="heading">SIGN UP</h1>
       
        <input type="text" name="name" placeholder="Name" required>
        <br><br>
        <input type="email" name="email"  placeholder="Email ID" required>

        <br><br>
        <input type="text" name="Phone"  placeholder="Phone No" pattern="[0-9]" required>
        <br><br>
        <label for="password" ></label>
        <input type="password" name="password" maxlength="10" pattern="[A-Z][a-z][0-9]" placeholder="Your password" required>
        <br><br>
        <label for="cpassword" ></label>
        <input type="password" name="cpassword" placeholder="Confirm Password" required>

        <input type="submit" onclick="matchPassword()" value="SignUp &#8594;">
        <br><br>
        <input type="checkbox" value="" >I AGGREE TO TERMS AND CONDITIONS
    </form>
    <script>  
        function matchPassword() {  
          var pw1 = document.getElementById("password");  
          var pw2 = document.getElementById("cpassword");  
         
          if(pw1 == pw2)  
          {   
              
            alert("Password created successfully");
          } else {  
            alert("Passwords did not match");
          }  
        }  
        </script>  
        <script>
            
            </script>
</body>
</html>