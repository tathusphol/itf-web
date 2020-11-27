<?php
    $conn = mysqli_init();
    mysqli_real_connect($conn, 'tathus.mysql.database.azure.com', 'tathus@tathus', 'SakuraHiro8852', 'labtest', 3306);
    if(mysqli_connect_errno($conn)){
        echo "connect fail".mysqli_connect_error();
    }

?>