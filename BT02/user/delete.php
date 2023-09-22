<?php
    $id = $_GET['id'];
    $sql = "DELETE from users where idusers = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=list');
?>