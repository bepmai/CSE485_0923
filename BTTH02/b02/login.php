<?php
    if(isset($_POST['sbm'])){ 
        $username = $_POST['username']; 
        $pass = $_POST['pass'];
        
        $sql_check = "SELECT * FROM users WHERE username='$username' OR email = '$username'"; 
        $query = $conn->prepare($sql_check);
        $query->execute();// thực hiện lệnh 
        
        if($query->rowCount()>0){
            $row = $query->fetch();
            $pass_hash = $row['pass'];//cột mật khẩu 
            if(password_verify($pass, $pass_hash) OR $pass){
                
                session_start(); 
                $_SESSION['username'] = $row['username']; //lưu trữ giá trị tên người dùng vào phiên biến (biến phiên) có tên là `'username
                // lưu trữ trạng thái thông tin của người dùng trên nhiều trang web và giữ cho thông tin này tồn tại trong suốt phiên làm việc
                header("location: index_users.php?page_layout_users=home");
            }else{
                $error_message = "Sai mật khẩu. Vui lòng thử lại.";
            }
        }else{
            $error_message = "Mat khau khong ton tai";
        }
    }
?>

<div class="container-fluid" style="height: 652px;">
    <div class="row" style="height: 100px;"></div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!--  -->
            <form method="post" class="bg-secondary text-light" style="border-radius: 6px; height: 400px">
                <p class="text-white fs-5 fw-semibold" style="padding-top: 15px;">&ensp; Sign In</p>
                <hr>
                <div style="margin-top: 40px;">
                    <div style="margin-left:15px; margin-right: 15px;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                            <input type="password" name="pass" class="form-control" placeholder="password" >
                        </div>
                        <div style="height: 20px">
                            <?php
                            if (isset($error_message)) {
                                echo "<p style='color: red;'>$error_message</p>";
                            }
                            ?>
                        </div>
                        <div class="mb-3 form-check" style="position: relative; top: 30px">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Rember me</label>
                        </div>
                    </div>
                    <button type="submit" name="sbm" class="btn btn-warning text-end" style="position: relative; left: 309px">Login</button>
                </div>

                <hr>
                <div>
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-dark" style="margin-left: 20px;" href="index_users.php?page_layout_users=register">Don't have an account?</a>
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-warning" href="index_users.php?page_layout_users=forgot">Sign Up Forgot your password</a>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row" style="position: relative; top: 70px">
        <?php
            include 'add/footer.php';
        ?>
    </div>
</div>
