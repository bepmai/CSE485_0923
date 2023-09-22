<?php
    $sql = "TRUNCATE TABLE blogs";
    $query = mysqli_query($connect, $sql);
    header('location: index_blogs.php?page_layout1=list_blogs');
?>