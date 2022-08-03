<?php
session_start();
include "newconnect.php";
if(isset($_POST["send_form"])){
$fullname = $_POST["fullname"];
$password =$_POST["password"];
$phonenbr =$_POST["phonenbr"];
$district =$_POST["district"];
$sector =$_POST["sector"];
$cell =$_POST["cell"];
$email =$_POST["email"];
$id_number =$_POST["id_number"];
$insert = "INSERT INTO comissioner(fullname,password,telnumber,district,sector,cell,email,id_nbr) VALUES('$fullname','$password','$phonenbr','$district','$sector','$cell','$email','$id_number')";
mysqli_query($conn,$insert);
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>fill form</title>
    
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
      <div class="div-1">
       <div class="fill">FILL FORM </div>
     <br><br>
     <form action="form.php" method="post">
         <label>
          <b>
            fullname:<input type="text" name="fullname">
          </b>
           
         </label>
         <br>
         <br>
         <label>
          <b>
           password: <input type="password" name="password" name="password" size="15">
          </b>
          <br><br>
          <label>

         <label>
          <b>
            phone number:<input type="number" name="phonenbr" size="15">
          </b>

         </label>
         <br>
         <br>
          <label>
            <b>
             district: <input type="text" name="district" size="15">
            </b>
        </label>
       <br><br>
       <label>
        <b>
         Sector: <input type="text" name="sector" size="15">
        </b>
        <br><br>
       </label>
       <label>
        <b>
         cell: <input type="text" name="cell" size="15">
        </b>
      
       </label>
       <br>
       <br>
       <label>
        <b>
          email: <input type="text" name="email">
        </b>
      </label>
       <br><br>
       <label>
        <b>
         id number: <input type="number" name="id_number" size="15">
        </b>
       </label>
       <br><br>
          <input type="submit" name="send_form" value="send_form">
       </p>
       <br>
       </form>
       <p><b>thank you for join us</b> </p>

      </div>
     </div>
   
      
     <div>
        <a href="commissioner.php">back</a>
    </div>
     </section>
       


</div>

</body>

</html>
