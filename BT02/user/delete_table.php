<?php
    $sql = "TRUNCATE TABLE users";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=list');
?>