<?php
    session_start(); 
    if(isset($_POST['sbm'])){ 
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        
        $sql_check = "SELECT * FROM users WHERE username='$username' OR email = '$username'";
        $query = mysqli_query($connect, $sql_check);
        $row = mysqli_fetch_assoc($query);
        if($row){
            $_SESSION['username'] = $row['username'];
            header("location: index_users.php?page_layout_users=home");
        }else{
            echo "<p style = 'color:red'>Dang nhap that bai, vui long dang nhap lai</p>";
        }
    }
?>

<div class="container-fluid" style="height: 652px;">
    <?php
        include 'add/menu.php';
    ?>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!--  -->
            <form method="post" class="bg-secondary text-light" style="border-radius: 6px; height: 360px">
                <p class="text-white fs-5 fw-semibold">&ensp; Sign In</p>
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
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Rember me</label>
                        </div>
                    </div>
                    <button type="submit" name="sbm" class="btn btn-warning text-end" style="position: relative; left: 309px">Login</button>
                </div>

                <hr>
                <div>
                    <span class="text-dark">Don't have an account?</span>
                    <a class="link-offset-2 link-underline link-underline-opacity-0 text-warning" href="#">Sign Up Forgot your password</a>
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