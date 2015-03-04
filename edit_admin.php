<?php 
include_once("includes/db.php");     
		 $f_name     = $_POST['f_name'];
		 $l_name     = $_POST['l_name'];
		 $email      = $_POST['email'];
		 $password   = $_POST['password'];
		 $password2  = $_POST['password2'];
		 $u_name     = $_POST['u_name'];
		 echo $u_name;
		  if($password <> $password2){
			 header("location:admin_edit.php?pass=0");
			  exit();
		 }
		 $password = md5($password);
	     $query= "UPDATE admin_register SET first_name = '$f_name',last_name = '$l_name', email = '$email', password = '$password', user_name = '$u_name' WHERE admin_type = '1'"; 
                          
                      
       if (mysqli_query($link, $query)) {
         header("location:admin_edit.php?pass=1");
       } else {
            echo "Error updating record: " . mysqli_error($conn);
         }

mysqli_close($link);  
?>			  
                 
