<?php
		$db_server              = 'localhost';                 // DB Server Address
		$db_user                = 'root';                   // DB Username
		$db_pass                = 'Choudhary@1984';                   // DB Password
		$db_database            = 'pearltech_new';              // Database Name
		$link = mysqli_connect("$db_server", "$db_user", "$db_pass", "$db_database");

	
	   /* check connection */
       if (mysqli_connect_errno()) {
	     printf("Connect failed: %s\n", mysqli_connect_error());
	     exit();
       }

?>
