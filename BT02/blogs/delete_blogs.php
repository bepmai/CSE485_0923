<?php
    $id = $_GET['id'];
    $sql = "DELETE from blogs where id_blogs = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index_blogs.php?page_layout1=list_blogs');
?>