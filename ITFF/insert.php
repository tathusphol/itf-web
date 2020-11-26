<?php
	$title = $_POST['title'];
	if($title != '') {
		require('conn.php');
		$query = mysqli_query($conn, 'INSERT INTO website (title_name) VALUES ("'.$title.'")');
		if($query) {
			header('Location: index.php');
		}
	}
	else {
		echo "Null";
	}
?>