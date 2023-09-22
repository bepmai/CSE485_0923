<?php
    $sql="SELECT * from theloai";
    $query = mysqli_query($connect, $sql);
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
            <div>
                <a type="submit" class="btn btn-success" href="index_admin.php?page_layout_admin=add_category">Thêm mới</a>
            </div>
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while($row = mysqli_fetch_assoc($query)){?>
                    <tr>
                        <td><?php echo $i++?></td>
                        <td><?php echo $row['ten_tloai']; ?></td>
                        <td>
                            <a href="index_admin.php?page_layout_admin=edit_category&id=<?php echo $row['ma_tloai']; ?>"><i class="bi bi-pencil-square"></i>Sửa</a>
                        </td>
                        <td>
                            <a  onclick="return Del('<?php echo $row['ten_tloai']; ?>')" href="index_admin.php?page_layout_admin=delete_category&id=<?php echo $row['ma_tloai']; ?>"><i class="bi bi-trash3"></i>Xóa</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row" style="position: relative; top: 210px">
        <?php
        include './add/footer.php';
        ?>
    </div>
</div>
<script>
    function Del(name){
        return confirm("Ban co chac muon xoa blog:" + name + "?");
    }
</script>