<?php 
include_once("includes/db.php");     
		 $f_name     = $_POST['f_name'];
		 $l_name     = $_POST['l_name'];
		 $email      = $_POST['email'];
		 $password   = $_POST['password'];
		 $password2  = $_POST['password2'];
		 $u_name     = $_POST['u_name'];
		 
		  if($password <> $password2){
			 header("location:admin_add.php?pass=0");
			  exit();
		 }
		 $sql=mysqli_query($link ,"SELECT user_name FROM admin_register  WHERE user_name=$u_name");
           if(mysqli_num_rows($sql)>=1)
          {
             header("location:admin_add.php?pass=2");
          }
           else
          {
   

				 $password = md5($password);
				 $query= "insert into admin_register SET first_name = '$f_name',last_name = '$l_name', email = '$email', password = '$password', user_name = '$u_name',admin_type = '0',status='1',is_deleted='0'"; 
								  
							  
			   if (mysqli_query($link, $query)) {
				 header("location:admin_add.php?pass=1");
			   } else {
					echo "Error updating record: " . mysqli_error($conn);
				 }
          }
mysqli_close($link);  
?>			  
