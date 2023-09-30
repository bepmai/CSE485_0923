<?php
    require_once 'config/db.php';                                                                                                                               
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Latest compiled JavaScript -->

    <!-- text -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="users.css"> -->
</head>
<body style="border: 1px solid blue;">
    <?php
        if(isset($_GET['page_layout_users'])){ 
            switch ($_GET['page_layout_users']){
                case 'register':
                    require_once 'b02/register.php';
                    break;
                
                case 'login':
                    require_once 'b02/login.php';
                    break;  
                    
                case 'topic':
                    require_once 'b02/topic.php';
                    break;  
        
                case 'home':
                    require_once 'b02/home.php';
                    break;

                default:
                    require_once 'b02/register.php';
                    break;  
            }
        }else{
            require_once 'b02/register.php';
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- menu con silde show-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>