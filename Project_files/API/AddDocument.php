<?php

//error_reporting(E_ERROR);
require_once "../config/config.php";
//$con = mysqli_connect("localhost","pesrsxttfd","Demo@123","pesrsxttfd");
  
   $get_connection=new connectdb;
   $db=$get_connection->connect();

   if (mysqli_connect_errno($db)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
  
   // $SerT=$_POST["ServiceT"];
   //$ServiceN=$_POST["servicename"];
   $serviceid=$_POST["service"];
   //$sername=$_POST["Client"];
  // $serviceT=$_POST["serviceT"];
   //$country=$_POST["country"];
   //$Date=date('Y-m-d');
   echo $serviceid;
   

?>
