<?php 
	// Aquire Variables ---->
	require_once('config.php');
	$title = $_POST['title'];
	$description = $_POST['description'];
	$today = date('Y-m-d');
	$query = "INSERT INTO tbl_posts(title, description, published_on) VALUES('	$title', '$description', '$today')";

	// Check if the Query Executed Prefectly ----> 
	if($conn->query($query) == TRUE) {
		echo "Post Added Successfully";
	}
	else {
		echo "Ooops....!!! Something went wrong Check Again. :)";
	}
	// Query Ends here ---->
 ?>