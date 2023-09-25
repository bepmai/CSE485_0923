<?php
    $id = $_GET['id'];
    $sql_up = "SELECT * from users where (fullname='$fullname', or email='$email') and idusers != $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $groups = $_POST['groups'];
        $mobile = $_POST['mobile'];
        $dateBirth = $_POST['dateBirth'];

        $sql = "UPDATE users SET (fullname='$fullname', email='$email', gender='$gender', groups='$groups', mobile='$mobile', dateBirth='$dateBirth') WHERE idusers='$id'";

        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=list');
    }
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 bg-light left-part">
                <?php
                    include "./add/menu.php"; 
                ?>
        </div>
        <div class="col-md-7 partMain">
            <div class="row partFirst">
                <div class="col-md-6 user-form">
                    <button type="button" class="btn btn-outline-light"><i class="bi bi-list"></i></button>
                    <span class="">Users</span>
                </div>
                <div class="col-md-6">
                    <div class="input-group search-form">
                        <span class="input-group-text box-search"><i class="bi bi-search search-icon"></i></span>
                        <input type="text" class="form-control" placeholder="Search here...">
                    </div>
                </div>
            </div>
            <br>
            <form method="POST" enctype="multipart/form-data" class="bg-light">
                <br>
                <h3 class="fw-bold" style="color:#ff6a59">&ensp;Edit User Form</h3>
                <hr>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <img src="./img/avatar.jpg" style="height: 80px;border-radius: 38px;">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="fw-bold">Full name</label>
                            <input type="text" name="fullname" class="form-control" required value="<?php echo $row_up['fullname']; ?>"> 
                            <!--readonly-chỉ đọc cho khóa chính -->
                        </div>

                        <div class="form-group">
                            <label class="fw-bold">Email</label>
                            <input type="email" name="email" class="form-control" required value="<?php echo $row_up['email']; ?>">
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="fw-bold">Gender</label><br>
                            <input type="radio" id="boy" name="gender" value="boy" required <?php if ($row_up['gender'] === 'boy') echo 'checked'; ?>> 
                            <label for="boy">boy</label>
                            <input type="radio" id="girl" name="gender" value="girl" required <?php if ($row_up['gender'] === 'girl') echo 'checked'; ?>>
                            <label for="girl">girl</label><br>  
                        </div>

                        <div class="form-group">
                            <label class="fw-bold">Group</label>
                            <input type="text" name="groups" class="form-control" required value="<?php echo $row_up['groups']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="fw-bold">Mobile:</label>
                            <input type="tel" name="mobile" class="form-control" required value="<?php echo $row_up['mobile']; ?>">
                        </div>

                        <div class="form-grpup">
                            <label class="fw-bold">Birth day</label>
                            <input type="date" name="dateBirth" class="form-control" required value="<?php echo $row_up['dateBirth']; ?>">
                        </div>
                        <br>
                        <button name="sbm" class="btn btn-success text-light fw-bold" type="submit">Save</button>
                        <a class="btn btn-danger text-light fw-bold" href="index.php?page_layout=list#" role="button">Cancel</a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1 part-rigt">
            <?php
                include "./add/menu-child.php"
            ?>
        </div>
    </div>
</div>