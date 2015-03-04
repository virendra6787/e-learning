<?php
include_once("includes/db.php"); 
$query="SELECT question, faq_answer FROM  faq_content";
$result = mysqli_query($link,$query);
while($row = mysqli_fetch_array($result)){
	echo $row['question']. " "." answered is ".$row['faq_answer'];
	
	
}
?>