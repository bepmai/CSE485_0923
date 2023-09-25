<?php
    $id = $_GET['id'];
    $sql = "DELETE from theloai where ma_tloai = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index_admin.php?page_layout_admin=category');
?>