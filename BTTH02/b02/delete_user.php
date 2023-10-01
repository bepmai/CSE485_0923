<?php
    $id = $_GET['id'];
    $sql = "DELETE from users where idusers = $id";
    $query = $conn->prepare($sql);
    $query->execute();
    header('location: index_admin.php?page_layout_admin=table_users');
?>