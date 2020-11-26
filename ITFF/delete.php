<?php
	require('conn.php');
	$id = $_GET['del'];
	$query = mysqli_query($conn, 'DELETE FROM website WHERE ID = '.$id.'');
	if($query) {
		header('Location: index.php');
	}
?>