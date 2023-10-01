<?php
    $sql_SumUsers = "SELECT COUNT(*) as Sum_users FROM users";
    $query_SumUsers = $conn->prepare($sql_SumUsers);
    $query_SumUsers->execute();
    $result_SumUers = $query_SumUsers->fetch();
    $SumUsers = $result_SumUers['Sum_users'];
   
    $sql_SumTloai = "SELECT COUNT(*) as Sum_Tloai FROM theloai";
    $query_SumTloai = $conn->prepare($sql_SumTloai);
    $query_SumTloai->execute();
    $result_SumTloai = $query_SumTloai->fetch();
    $SumTloai = $result_SumTloai['Sum_Tloai'];

    $sql_SumTgia = "SELECT COUNT(*) as Sum_Tgia FROM tacgia";
    $query_SumTgia = $conn->prepare($sql_SumTgia);
    $query_SumTgia->execute();
    $result_SumTloai = $query_SumTgia->fetch();
    $SumTgia = $result_SumTloai['Sum_Tgia'];

    $sql_SumBV = "SELECT COUNT(*) as Sum_BV FROM baiviet";
    $query_SumBV = $conn->prepare($sql_SumBV);
    $query_SumBV->execute();
    $result_SumBV = $query_SumBV->fetch();
    $SumBV = $result_SumBV['Sum_BV'];
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
            <div class="row d-flex">
                <div class="col-md-3">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="">&emsp;Người dùng</a><br><br>
                    <p style="border:1px solid gray; height: 130px; width: 130px">
                        <?php echo '<sapn style = "font-weight:600; font-size: 40px; position: relative;top: 25px;left: 50px">'.$SumUsers.'</sapn>';?>
                    </p>
                </div>
                <div class="col-md-3">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="">&emsp;&emsp;Thể loại</a><br><br>
                    <p style="border:1px solid gray; height: 130px; width: 130px">
                        <?php echo '<sapn style = "font-weight:600; font-size: 40px; position: relative;top: 25px;left: 50px">'.$SumTloai.'</sapn>';?>
                    </p>
                </div>
                <div class="col-md-3">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="">&emsp;&emsp;Tác giả</a><br><br>
                    <p style="border:1px solid gray; height: 130px; width: 130px">
                        <?php echo '<sapn style = "font-weight:600; font-size: 40px; position: relative;top: 25px;left: 50px">'.$SumTgia.'</sapn>';?>
                    </p>
                </div>
                <div class="col-md-3">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="">&emsp;&emsp;Bài viết</a><br><br>
                    <p style="border:1px solid gray; height: 130px; width: 130px">
                        <?php echo '<sapn style = "font-weight:600; font-size: 40px; position: relative;top: 25px;left: 50px">'.$SumBV.'</sapn>';?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="row" style="position: relative; top: 270px">
        <?php
        include './add/footer.php';
        ?>
    </div>
</div>