<?php
require('connect.php');
    if(isset($_POST['submit'])){
        $A = $_POST['A'];
        $B = $_POST['B'];
        $C = $A + $B;

        $sql = "INSERT INTO  (A, B, C) value ('$A', '$B', '$C')";

        if(mysqli_query($conn, $sql)){
            echo "New data insert successfully";
            echo "<a href='show.php'>back to home page</a>";
        }
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="insert.php" method="post">
        <h1>A</h1>
        <input type="text" name="valuea">
        <h1>B</h1>
        <input type="text" name="valueb">
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>