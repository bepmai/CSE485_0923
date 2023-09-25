<?php
    if(isset($_GET['id'])){
        $id = $_GET['id']; //giá trị của tham số "id" và lưu nó vào biến $id.
        //'id' lấy giá trị của $id
        $sql_up = "SELECT * from theloai where ma_tloai = '$id'";
        $query_up = mysqli_query($connect, $sql_up);
        $row_up = mysqli_fetch_assoc($query_up);

        if(isset($_POST['sbm'])){
            $ten_tloai = $_POST['ten_tloai'];

            $sql = "UPDATE theloai SET ten_tloai='$ten_tloai' WHERE ma_tloai='$id'";

            $query = mysqli_query($connect, $sql);
            header('location: index_admin.php?page_layout_admin=category');
        }
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
            <form action="" method="Post" enctype="multipart/form-data" class="bg-light">
                <h3 class="d-flex justify-content-center text-uppercase">Sửa thông tin thể loại</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mã thể loại</span>
                    <input type="text" name="ma_tloai" class="form-control" required value="<?php echo $row_up['ma_tloai']?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên thể loại</span> 
                    <input type="text" name="ten_tloai" class="form-control" required value="<?php echo $row_up['ten_tloai']?>">
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="sbm" class="btn btn-success">Lưu lại</button>&emsp;
                    <a type="button" class="btn btn-warning" href="index_admin.php?page_layout_admin=category">Quay lại</a>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row" style="position: relative; top: 270px">
        <?php
        include './add/footer.php';
        ?>
    </div>
</div>