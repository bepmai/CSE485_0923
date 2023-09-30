<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="dash.css">


</head>
<body style="background-color:#F0F0F0; font-family: 'poppins', sans-serif;"> 
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-white left-part">
                <?php
                    include "./add/menu.php";
                ?>
            </div>
        
            <div class="col-md-7 partMain">
                <div class="row partFirst">
                    <div class="col-md-6 user-form">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-list"></i></button>
                        <span class="">Dashboard</span>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group search-form">
                            <span class="input-group-text box-search"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="row partTwo">
                    <div class="col-md-6">
                        <img src="./img/bg1.png" class="img_bg_join">
                        <span class="text_jon_lorem">
                            <p class="fw-bolder text-light">Join Now and Get Discount Voucher Up To 20%</p>
                            <span class="text-light">Lorem ipsum dolor sit samet, consectetur adipiscing edit, sed do eiusmod tempor incididunt</span>
                        </span>
                    </div>

                    <div class="col-md-6">
                        <img src="./img/chart_learn.png" class="img_chart_learn">
                    </div>
                </div>

                <div class="row partThree">
                    <div class="col-md-4">
                        <img src="./img/bg_one.png" class="bg_partThree">
                    </div>
                    <div class="col-md-4">
                        <img src="./img/bg_two.png" class="bg_partThree bg_tramf_two">
                    </div>
                    <div class="col-md-4">
                        <img src="./img/bg_three.png" class="bg_partThree bg_tramf_three">
                    </div>

                </div>

                <div class="row img_chart" style="position: relative; bottom: 30px; width: 807px; height: 301px;">
                </div>
            </div> 

            <div class="col-md-1"></div>
        <div class="col-md-1 part-rigt">
            <?php
                include "./add/menu-child.php"
            ?>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-xVjVeu7gF75w1lgE+Bc2wK7qio4D4jqru/YBNtgFakxxJFxF0bhxyzyJw05j0fne" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <!-- day month year -->
</body>
</html>