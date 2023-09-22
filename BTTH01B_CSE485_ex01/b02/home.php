<!--  -->
<div class="container-fluid">
    <?php
        include './add/menu.php';
    ?>
    <!-- chuyen anh -->
    <div class="row">
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/Screenshot_1.png" class="d-block w-100" style="height: 400px">
                </div>
                <div class="carousel-item">
                    <img src="./img/Screenshot_7.png" class="d-block w-100" style="height: 400px">
                </div>
                <div class="carousel-item">
                    <img src="./img/Screenshot_8.png" class="d-block w-100" style="height: 400px">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- song -->
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-3 text-primary fw-bold" style="margin-top:30px; margin-bottom:30px">TOP BAI HAT YEU THICH</div>
        <div class="col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/Screenshot_2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="index_users.php?page_layout_users=topic" class="card-link link-offset-2 link-underline link-underline-opacity-0">Cay, la va gio</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/Screenshot_3.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="" class="card-link link-offset-2 link-underline link-underline-opacity-0">Cuon song mem thuong</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/Screenshot_4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#" class="card-link link-offset-2 link-underline link-underline-opacity-0">Long me</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/Screenshot_5.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#" class="card-link link-offset-2 link-underline link-underline-opacity-0">Phoi cha</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card" style="width: 18rem;">
                <img src="./img/Screenshot_6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="#" class="card-link link-offset-2 link-underline link-underline-opacity-0">Noi tinh yeu bat dau</a>
                </div>
            </div>
        </div>
    </div>

    <!-- bottom -->
    <div class="row">
        <?php
            include './add/footer.php';
        ?>
    </div>
</div>
