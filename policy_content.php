<?php
include_once("includes/db.php");     
$about_content     = $_POST['about_content'];
  $query= "UPDATE con_mgmt_content SET page_description = '$about_content' WHERE page_title='privacy_and_policy'";
  if (mysqli_query($link, $query)) {
         header("location:privacy_policy.php?pass=1");
       } else {
            echo "Error updating record: " . mysqli_error($conn);
         }

  mysqli_close($link);  
?>