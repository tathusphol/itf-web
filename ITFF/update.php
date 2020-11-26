<?php
	require('conn.php');
	$title = $_POST['title'];
	$id = $_GET['id'];
	$query = mysqli_query($conn, "UPDATE website SET title_name = '".$title."' WHERE ID = ".$id."");
	if($query) {
		header('Location: index.php');
	}
?>