<?php
session_start();
include "newconnect.php";
if(isset($_POST["submit"]))
{
$username = $_POST["username"];
$password =$_POST["password"];
$IMAGES =$_POST["images"];
$ENTER = "INSERT INTO clients(fullname,password,images) VALUES('$username ','$password','$IMAGES')";
mysqli_query($conn,$ENTER);
}
?>


<!DOCTYPE html>
<head>
  <title>
    whereishouse
  </title>
  <link rel="stylesheet" href="commissioner.css">
</head>
<body class="body">
    

        <div class="menu">
             <H1> SEE HOUSE</H1>
            <ul>
              <li><a href="homepage.php">Home</a></li> 
              <li><a href="commissioner.php">Comissiner</a></li> 
              <li><a href="location.php">Location</a></li> 
              <li><a href="about.php">About</a></li> 
            </ul>
        </div>
        
        <center> 
    <div class="div">
       
        <div class="div-1">
         <div class="login">login</div>
        <br><br>
         <form action="commissioner.php"style="padding: 20px;margin-left: 50px;" method="post">
           <label>
             username:<input type style="border-radius: 50px;" name="username">
           </label><br>
           <br>
           <label>
            password:
           <input type="password" name="password" name="password" size="15" style="border-radius: 50px">
           </label>
           <br>
           <br>
           
             <i><b>Do you have a House for hire or sell ?</b></i>
             <br><br>
             upload image of house: <br><br>
             <input type="file" name="images">
             <br><br>
             <input type="submit" name="submit" value="SEND">
         </p>

       </form> 
       <br>
       if  you don't have account becouse commissioner must have account
       <p>
        <div class="sign-up">
            <p>
            <a href="form.php">sign up</a> 
            </p>
        </div>
      </div>
      </center>
      
        </body>
</html>
