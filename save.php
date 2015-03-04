<?php
include_once("includes/db.php");     
		 $question     = $_POST['question'];
		 $answer      = $_POST['faq_answer'];
	     
		 $query= "insert into faq_content SET question = '$question', faq_answer = '$answer',page_title='faq'"; 
                          
                      
       if (mysqli_query($link, $query)) {
         header("location:add_faq.php?pass=1");
       } else {
            echo "Error updating record: " . mysqli_error($conn);
         }

mysqli_close($link);  
?>
