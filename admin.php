<?php
session_start();
include_once("includes/db.php");
$user=$_POST['userid'];
$pass=$_POST['password'];
$query="SELECT user_name, password FROM admin_register WHERE user_name='$user' AND password='$pass'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_array($result);
    /* determine number of rows result set */
    if(mysqli_num_rows($result)>0){
     $_SESSION['uname']= $row['user_name'];
	 
     header("Location:home.php");
	}
      else {
         header("Location:index.php?mes=0");
      }
   
     mysqli_close($link);



?>
