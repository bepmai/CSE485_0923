<div class="container-fluid" style="height: 652px;">
    <div class="row" style="height: 150px;"></div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!--  -->
            <form method="post" action="index_users.php?page_layout_users=send_pass" class="bg-secondary text-light" style="border-radius: 6px; height: 255px">
                <p class="text-white fs-5 fw-semibold" style="padding-top: 10px;">&ensp; Forgot Password</p>
                <hr>
                <div>
                    <div style="margin-left:15px; margin-right: 15px;">
                    <p style="height: 10px;" class="fw-bolder text-warning">Enter your email address</p>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="email" name="email" class="form-control" placeholder="email">
                        </div>
                    </div>
                    <button class="btn btn-warning text-end" style="position: relative; left: 309px">Continue</button>
                </div>

                <hr>
                <div style="margin-left: 20px;">
                    <a href="index_users.php?page_layout_users=register" class="link-offset-2 link-underline link-underline-opacity-0 text-dark">Don't have an account?</a>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
    <div class="row" style="position: relative; top: 175px">
        <?php
            include 'add/footer.php';
        ?>
    </div>
</div>