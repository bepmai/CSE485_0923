<?php
if(isset($_POST['sbm'])){
    $ten_tloai = $_POST['ten_tloai'];

    $sql = "INSERT into theloai (ten_tloai)
            values ('$ten_tloai')";

    $query = mysqli_query($connect, $sql);
    header('location: index_admin.php?page_layout_admin=category');
}
?>

<div class="container-fluid" style="height: 653px;">
    <div class="row">
        <?php
        include './add/menu_admin.php';
        ?>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h3 class="d-flex justify-content-center text-uppercase">Thêm mới thể loại</h3>
            <form method="POST">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên thể loại</span>
                    <input type="text" name="ten_tloai" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success" name="sbm">Thêm</button>&emsp;
                    <a type="button" class="btn btn-warning" href="index_admin.php?page_layout_admin=category">Quay lại</a>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row" style="position: relative; top: 320px">
        <?php
        include './add/footer.php';
        ?>
    </div>
</div>