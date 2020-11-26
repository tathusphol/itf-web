<?php
	require('conn.php');
	$id = $_GET['update'];
	$query = mysqli_query($conn, "SELECT * FROM website WHERE ID =".$id."");
	$echo = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form action="update.php?id=<?php echo $echo['ID']; ?>" method="post">
		title: <input type="text" name="title" value="<?php echo $echo['title_name']; ?>">
		<input type="submit" value="Update">
	</form>
</body>
</html>