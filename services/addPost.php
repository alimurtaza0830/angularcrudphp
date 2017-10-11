<?php 
	// Aquire Variables ---->
	require_once('config.php');

	$data = json_decode(file_get_contents("php://input"));

	$title = $data->title;
	$description = $datea->description;
	$today = date('Y-m-d');

	// $title = $_POST['title'];
	// $description = $_POST['description'];
	// $today = date('Y-m-d');

	$query = "INSERT INTO tbl_posts(title, description, published_on) VALUES('	$title', '$description', '$today')";
	if($conn->query($query) == TRUE) {
		echo "Post Added Successfully";
	}
	else{
		die(mysql_error());
	}


	// Check if the Query Executed Prefectly ----> 
	// if($conn->query($query) == TRUE) {
	// 	echo "Post Added Successfully";
	// }
	// else {
	// 	echo "Ooops....!!! Something went wrong Check Again. :)";
	// }
	// Query Ends here ---->
 ?>