<?php
require_once("db.php");



?>
<!DOCTYPE html>
<html>
    <head><title>VIEW TABLE DATA</title>
      <link rel="stylesheet" href="style.css"> 
</head>
    <body>
        <h2 class="success"><?php echo @$_GET["id"]?></h2>
       
        <?php
        if(isset($_GET["SearchButton"]))
        {
            $Search=$_GET["search"];
            $sql="SELECT * FROM emp_record WHERE ename=:searcH or ssn=:searcH";
            $stmt=$ConnectingDB->prepare($sql);
            $stmt->bindValue(':searcH',$Search);
            $stmt->execute();
            while($DataRows= $stmt->fetch())
            {
                $uname         =        $DataRows["uname"];
                $password      =        $DataRows["upassword"];
                $email     =        $DataRows["Email"];
                $phoneno =        $DataRows["Phoneno"];
              
                ?>
                <div>
                <table width="1000" border="5" align="center">
                <caption>View From Database</caption>
            <tr>
                <th>USERNAME </th>
                <th> PASSWORD</th>
                <th>EMALI </th> 
                <th>PHONENO</th>
                
            </tr>
            <tr>
        <td><?php echo $uname; ?> </td>
        <td><?php  echo $password;?> </td>
        <td><?php  echo $email?> </td>
        <td><?php echo $phoneno; ?> </td>
     
       
    </tr>

                 </table>
            </div>
           <?php }
           
        }
        ?>
        <table width="1000" border="5" align="center" >
            <caption>View From Database</caption>
            <tr>
            <th>USERNAME </th>
                <th> PASSWORD</th>
                <th>EMALI </th> 
                <th>PHONENO</th>
            </tr>
            
        </div>
       
    <?php
   
    global $ConnectingDB;
    $sql="SELECT * FROM log";
    $stmt= $ConnectingDB->query($sql);
    while($DataRows=$stmt->fetch())
    {
        $uname         =        $DataRows["uname"];
        $password      =        $DataRows["upassword"];
        $email     =        $DataRows["Email"];
        $phoneno =        $DataRows["Phoneno"];
    
    ?>
    <tr>
    <td><?php echo $uname; ?> </td>
        <td><?php  echo $password;?> </td>
        <td><?php  echo $email?> </td>
        <td><?php echo $phoneno; ?> </td>
      
       
    </tr>
    <?php } ?>
     </table>
   
    
    </div>
    </body>
</html>
