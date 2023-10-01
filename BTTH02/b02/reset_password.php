<div class="container-fluid" style="height: 652px;">
    <div class="row" style="height: 150px;"></div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <!--  -->
            <form method="post" action="index_users.php?page_layout_users=process_reset_pass" class="bg-secondary text-light" style="border-radius: 6px; height: 255px">
                <p class="text-white fs-5 fw-semibold" style="padding-top: 10px;">&ensp; Reset Password</p>
                <input type="hidden" name="token" value="<?=htmlspecialchars($token)?>">
                <hr>
                <div>
                    <div style="margin-left:15px; margin-right: 15px;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="password" name="pass" class="form-control" placeholder="password">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="password_confirmation">
                        </div>
                    </div>
                    <button class="btn btn-warning text-end" style="position: relative; left: 309px">Continue</button>
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