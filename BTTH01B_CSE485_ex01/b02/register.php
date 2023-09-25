<?php
    if(isset($_POST['sbm'])){
        $user = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        // $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
        $sql_insert = "INSERT INTO users (username, email, pass) VALUES ('$user', '$email', '$pass')";
        $query = mysqli_query($connect, $sql_insert);
    
        header('location: index_users.php?page_layout_users=home');
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
                <p class="text-white fs-4 fw-semibold">&ensp; Register</p>
                <hr>
                <?php
                    // if(isset($_GET['error'])){
                    //     echo "<p style='background-color:orange'>{$_GET['error']}</p>";
                    // }
                ?>
                <div style="margin-top: 40px;">
                    <div style="margin-left:15px; margin-right: 15px;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="text" name="username" class="form-control" placeholder="username" aria-label="username" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-at"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-key-fill"></i></span>
                            <input type="password" name="pass" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon1" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Rember me</label>
                        </div>
                    </div>
                    <button type="submit" name="sbm" class="btn btn-warning text-end" style="position: relative; left: 309px">Register</button>
                </div>

                <hr>
                <div>
                    <span class="text-dark">Don't have an account? -</span>&ensp; <a class="link-offset-2 link-underline link-underline-opacity-0 fw-bold" href="location: index_users.php?page_layout_users=login">Login</a>
                    <br><a class="link-offset-2 link-underline link-underline-opacity-0 text-warning" href="#">Sign Up Forgot your password</a>
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