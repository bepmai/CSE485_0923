<?php
    if(isset($_GET['id'])){
        $id = $_GET['id']; //giá trị của tham số "id" và lưu nó vào biến $id.
        //'id' lấy giá trị của $id
        $sql_up = "SELECT * from users where idusers = '$id'";
        $query_up = $conn->prepare($sql_up);
        $query_up->execute();

        $row_up = $query_up->fetch();

        if(isset($_POST['sbm'])){
            $status = $_POST['status'];

            $sql = "UPDATE users SET status = '$status' WHERE idusers='$id'";
            $query = $conn->prepare($sql);

            $query->execute();
            header('location: index_admin.php?page_layout_admin=table_users');
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
                <h3 class="d-flex justify-content-center text-uppercase">Sửa thông tin nguoi dung</h3>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mã nguoi dung</span>
                    <input type="text" name="idusers" class="form-control" value="<?php echo $row_up['idusers']; ?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tên nguoi dung</span> 
                    <input type="text" name="username" class="form-control" value="<?php echo $row_up['username']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label class="fw-bold">Status</label><br>
                    <input type="radio" id="inactive" name="status" value="inactive" required <?php if ($row_up['status'] === 'inactive') echo 'checked'; ?>> 
                    <label for="inactive">inactive</label>
                    <input type="radio" id="active" name="status" value="active" required <?php if ($row_up['status'] === 'active') echo 'checked'; ?>>
                    <label for="active">active</label><br>  
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" name="sbm" class="btn btn-success">Lưu lại</button>&emsp;
                    <a type="button" class="btn btn-warning" href="index_admin.php?page_layout_admin=table_users">Quay lại</a>
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