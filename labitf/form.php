<?php
require('connect.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $total = $weight / (($height/100)*($height/100));
    
    $sql = "INSERT INTO labtest (name , weight, height, bmi) VALUES ('$name', '$weight', '$height', '$total')";
    if (mysqli_query($conn, $sql)) {
        echo "created successfully";
        echo "<a href='index.php'> Return to home page</a>";
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name" class="container">ชื่อ : </label>
        <input type="text" name="name">
        <br>
        <label for="weight" class="container">น้ำหนัก : </label>
        <input type="text" name="weight">
        <br>
        <label for="height" class="container">ส่วนสูง : </label>
        <input type="text" name="height">
        <br>
        <input type="submit" value="ยืนยัน" name="submit">
    </form>
</body>

</html>
