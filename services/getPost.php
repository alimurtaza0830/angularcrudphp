<?php 
	include_once('config.php');
	$id = $_GET['id'];
	
	if(!empty($id))
		{
			$output = arrary();
			$sql = "SELECT * FROM tbl_posts WHERE id = $id";
			$query = mysqli_query($conn, $sql);
				if($query->num_rows > 0){
					while($row = mysqli_fetch_assoc())
						{
							$output[] = $row;
						}
					echo json_encode($output);
				}
		}
	mysqli_close($conn);
 ?>