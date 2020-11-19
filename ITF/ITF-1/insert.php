<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'tathus.mysql.database.azure.com', 'tathus@tathus', 'SakuraHiro8852', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$Name = $_POST['Name'];
$Comment = $_POST['Comment'];
$Link = $_POST['Link'];


$sql = "INSERT INTO guestbook (name, comment, link) VALUES ('$Name', '$Comment', '$Link')";


if (mysqli_query($conn, $sql)) {
  header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
