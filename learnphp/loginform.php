<?php
session_start();

$host="localhost";
$user="root";
$password="";
$db="whereishouse";
mysql_connect($host,$user,$password);
mysql_select_db($db)
if(isset($_POST['SEND']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $IMAGE=$_POST['IMAGEhouse']
    $sql="INSERT INTO clients(fullname,password)VALUES('AMBRO','WEEE')";
    $result=msql_query($sql);
    if(mysql_num_rows($result)==1)
    {
        echo "you have successfull loged in";
        exit();
    }
    else
    {
        echo"you have entered incorrect password";
    }

}


?>