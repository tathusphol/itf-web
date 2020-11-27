<?php
require('connect.php');
$id=$_GET['id'];
$sql="DELETE FROM labtest WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    <a href='index.php'>back to home page</a>
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>
