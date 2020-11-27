<?php
require('connect.php');
$id=$_GET['id'];
$sql="DELETE FROM labtest WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "delete data successfully";
    echo "<button type="button" class="btn btn-outline-warning" onclick="window.location.href='index.php'">Home page</button>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>
