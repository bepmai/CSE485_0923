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
    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> 
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- text -->

    <link rel="stylesheet" href="users.css">
</head>
<body style="background-color:#F0F0F0; font-family: 'poppins', sans-serif;">
    <?php
        if(isset($_GET['page_layout'])){ 
            switch ($_GET['page_layout']){
                case 'list':
                    require_once 'user/list.php';
                    break;
                
                case 'add':
                    require_once 'user/add.php';
                    break;  
             
                case 'edit':
                    require_once 'user/edit.php';
                    break;  
                
                case 'delete':
                    require_once 'user/delete.php';
                    break; 
                
                case 'delete_table':
                    require_once 'user/delete_table.php';
                    break; 
        
                default:
                    require_once 'user/list.php';
                    break;  
            }
        }else{
            require_once 'user/list.php';
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>