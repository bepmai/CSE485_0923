<?php
    $sql_SumUsers = "SELECT COUNT(*) as Sum_users FROM users";
    $query_SumUsers = mysqli_query($connect, $sql_SumUsers);
    $row_Users = mysqli_fetch_assoc($query_SumUsers);
    $SumUsers = $row_Users['Sum_users'];
   
    $sql_SumTloai = "SELECT COUNT(*) as Sum_Tloai FROM theloai";
    $query_SumTloai = mysqli_query($connect, $sql_SumTloai);
    $row_Tloai = mysqli_fetch_assoc($query_SumTloai);
    $SumTloai = $row_Tloai['Sum_Tloai'];

    $sql_SumTgia = "SELECT COUNT(*) as Sum_Tgia FROM tacgia";
    $query_SumTgia = mysqli_query($connect, $sql_SumTgia);
    $row_Tgia = mysqli_fetch_assoc($query_SumTgia);
    $SumTgia = $row_Tgia['Sum_Tgia'];

    $sql_SumBV = "SELECT COUNT(*) as Sum_BV FROM baiviet";
    $query_SumBV = mysqli_query($connect, $sql_SumBV);
    $row_BV = mysqli_fetch_assoc($query_SumBV);
    $SumBV = $row_BV['Sum_BV'];
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