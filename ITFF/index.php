<?php
	require('conn.php');
	$query = mysqli_query($conn, "SELECT * FROM website");
	echo "<a href=\"form.php\">insert</a><br><hr>";
	while($echo = mysqli_fetch_array($query)) {
		echo $echo['title_name'].' <a href="delete.php?del='.$echo['ID'].'">delete</a> <a href="form-update.php?update='.$echo['ID'].'">update</a>'.'<br>';
	}
?>