<?php
    $sql="SELECT * from users";
    $query = $conn->prepare($sql);
    $query->execute();
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
            <br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ten nguoi dung</th>
                        <th scope="col">Status</th>
                        <th scope="col">Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 4;
                    while($row = $query->fetch()){?>
                    <tr>
                        <td><?php echo $i++?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td>
                            <a href="index_admin.php?page_layout_admin=change_status"><i class="bi bi-pencil-square"></i>Sửa</a>
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
    <div class="row" style="position: relative; top: 130px">
        <?php
        include './add/footer.php';
        ?>
    </div>
</div>
