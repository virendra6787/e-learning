<?php
//include_once("db.php");

function get_content($page = null) {
	$valid_pages = array('about_us','term_and_condition', 'privacy_and_policy');
	if (empty($page) || !in_array($page, $valid_pages)) {
		return null;
	}
	$DB_NAME = 'pearltech_new';
	$DB_HOST = 'localhost';
	$DB_USER = 'root';
	$DB_PASS = '';
	// CONNECT TO THE DATABASE
	$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	}

	// A QUICK QUERY ON A FAKE USER TABLE
	$query = "SELECT * FROM  con_mgmt_content WHERE page_title = '$page'";
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

	// GOING THROUGH THE DATA
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo stripslashes($row['page_description']);	
			$ret = stripslashes($row['page_description']);	
		}
	} else {
		$ret = 'NO RESULTS';	
	}
	// CLOSE CONNECTION
	mysqli_close($mysqli);
	return $ret;
}

?>
