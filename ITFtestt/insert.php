<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'tathus.mysql.database.azure.com', 'tathus@tathus', 'SakuraHiro8852', 'it63070065', 3306);

    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: ' . mysqli_connect_error());
};

    $x = $_POST['in_a'];
    $y = $_POST['in_b'];
    $z = $x + $y;

    $sql = "INSERT INTO it63070065 (A , B , C) VALUES ('$x', '$y', '$z')";

    if (mysqli_query($conn, $sql)) {
    echo "New record created successfully"; 
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
<script>
    window.location.replace("show.php");
</script>
