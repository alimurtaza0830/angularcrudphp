<?php 
	include_once('config.php');

	if ($conn->connect_error){
		die("Connection Failed: " . $conn->connect_error);
	}
	$output = array();
	$sql = "SELECT * FROM tbl_posts ORDER BY id DESC";

	$result = mysqli_query($conn, $sql);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$output[] = $row;
		}
		echo json_encode($output);
	}
	mysqli_close($conn)
	// $result = $conn->query($sql);
	// if($result->num_rows > 0){
	// 	while($row = $result->fetch_array()) {
	// 		$id = $row['id'];
	// 		$title = $row['title'];
	// 		$description = $row['description'];
	// 		$published_on = $row['published_on'];
	// 		$data[] = array('id'=>$id, 'title'=>$title, 'description'=>$description, 'published_on'=>$published_on);	
	// 	}
	// 	$json = array('status' => 1, 'info'=>$data);
	// }
	// else {
	// 	$json = array('status' => 0, 'mesg'=>'No Record Found!');
	// }
	// mysqli_close($conn);
	// header('Content-type: applicaiton/json');
	// echo json_encode($json);
?>