<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require('connect.php');
    $res = mysqli_query($conn, 'SELECT * FROM it63070065');
?>
    <table>
        <tr>
            <th>A</th>
            <th>B</th>
            <th>C</th>
        </tr>
        <?php
        while($result = mysqli_fetch_array($res)){
        ?>
        <tr>
            <td><?php echo $result['C'];?></td>
            <td><?php echo $result['A'];?></td>
            <td><?php echo $result['B'];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <a href="insert.php">add data</a>
</body>
</html>