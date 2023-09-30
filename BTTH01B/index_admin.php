<?php
    require_once 'config/db.php';                                                                                                                               
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

</head>
<style>
    a.nav-link:hover, .navbar-brand:hover {
        font-weight: 700;
    }
</style>
<body style="border: 1px solid blue;">
    <?php
        if(isset($_GET['page_layout_admin'])){ 
            switch ($_GET['page_layout_admin']){
                case 'admin':
                    require_once 'b02/admin.php';
                    break;

                case 'category':
                    require_once 'b02/category.php';
                    break; 

                case 'add_category':
                    require_once 'b02/add_category.php';
                    break;
                    
                case 'edit_category':
                    require_once 'b02/edit_category.php';
                    break;
                     
                case 'delete_category':
                    require_once 'b02/delete_category.php';
                    break;

                default:
                    require_once 'b02/admin.php';
                    break;  
            }
        }else{
            require_once 'b02/admin.php';
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>