<?php
  $conn = mysqli_init();
  mysqli_real_connect($conn, 'tathus.mysql.database.azure.com', 'tathus@tathus', 'SakuraHiro8852', 'it63070065', 3306);

  if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: ' . mysqli_connect_error());
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW</title>
</head>
<body>
    <table>
      <thead>
        <tr>
            <th width="150"> <div align="center">A</div></th>
            <th width="350"> <div align="center">B</div></th>
            <th width="150"> <div align="center">C</div></th>
        </tr>
      </thead>
        <tbody>
        <?php
        $res = mysqli_query($conn, 'SELECT * FROM it63070065');
        while ($Result = mysqli_fetch_array($res)) {
        ?>
          <tr id="row<?php echo $Result['ID']; ?>">
            <td width="150"> <div align="center"><?php echo $Result['A']; ?></div></td>
            <td width="350"> <div align="center"><?php echo $Result['B']; ?></div></td>
            <td width="150"> <div align="center"><?php echo $Result['C']; ?></div></td>
          </tr>
            <?php
        } mysqli_close($conn);
        ?>
        </tbody>
    </table>
</body>
</html>
