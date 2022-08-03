<?php
session_start();
include "newconnect.php";
if(isset($_POST["send_form"])){
$fullname = $_POST["fullname"];
$telnumber =$_POST["telnumber"];
$province =$_POST["province"];
$district =$_POST["district"];
$sector =$_POST["sector"];
$cell =$_POST["cell"];
$images=$_POST["images"];

$insert = "INSERT INTO loginclients(fullname,tel_number,province,district,sector,cell,images) VALUES('$fullname','$telnumber','$province','$district','$sector','$cell','$images')";
mysqli_query($conn,$insert);
}
?>
<!DOCTYPE html>
<head>
	<title>where is house</title>
    
    <link rel="stylesheet" type="text/css" href="homepage.css">
</head>
<body>
    <div class="menu">
    	 <H1> SEE HOUSE</H1>
        <ul>
          <li><a href="homepage.php">Home</a></li> 
          <li><a href="commissioner.php">Comissiner</a></li> 
          <li><a href="location.php">Location</a></li> 
          <li><a href="about.php">About</a></li> 
        </ul>
    </div>

    <div class="div">
  
      
       <div class="login">login</div>
     <br><br>
       <form >
         <label>
           fullname:<input type="text" name="fullname" name="">
          </label>
         <br>
         <br>
         <label>
           telnumber:<input type="number" name="telnumber" size="15">
         </label>
       <br><br>
       <label>
        province:<input type="text" name="province" size="15">
      </label><br><br>
      
           <label>
            district:<input type="text" name="district" size="15">
          </label>
          <br><br>
          <label>
            sector:<input type="text" name="sector" size="15">
          </label><br><br>
          <label>
            cell:<input type="text" name="cell" size="15">
          </label>
           <br><br><br>
           <i><b>Do you have have a House ?</b></i>
           <br><br>
           upload image of house: <input type="file" name="house">
           <input type="submit" name="send_form">
           </form>

           <div>
            <p>
              do you want to go back ?
              <a href="interface .html">back</a>
             </p>
           </div>
           
       
     
      
     
      
      </div>
      <div class="form_style">
      <form action="">
      
       <p style="font-size: large;color:black;">comment:</p>
       <textarea rows="15" cols="35" name="comment"></textarea>
       <input type="submit" name="images">
      </div>
      </form>
     </div>
     </div>
    <br><br>
    <div class="available_houses">
      <p>
        there is available houses for hire 
      look below
      </p>
    </div>  
</div>
<div class="image_resources">
  <div>
    <img src="cottage-.jpg" height="200px" width="450px">
    
  </div>
  <div>
    <img src="house.jpg" height="200px" width="450px">
  </div>
  <div>
    <img src="large-home-.jpg" height="200px" width="450px">
  </div>
  
</div>
<footer>
  <div class="back">
    <a href="interface.html">back</a>
  </div>
</footer>

</body>

</html>
