<?php
$Id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'tathus.mysql.database.azure.com', 'tathus@tathus', 'SakuraHiro8852', 'itflab', 3306);
$Name=$_POST['Name'];
$Comment=$_POST['Comment'];
$Link=$_POST['Link'];
$sql="UPDATE guestbook SET Name='$Name',Comment='$Comment',Link='$Link' WHERE ID='$Id'";
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
