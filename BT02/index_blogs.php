<?php
    require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOGS</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="blogs.css">
</head>
<body style="background-color:#F0F0F0; font-family: 'poppins', sans-serif;">
    <?php
        if(isset($_GET['page_layout1'])){
            switch ($_GET['page_layout1']){
                case 'list_blogs':
                    require_once 'blogs/list_blogs.php';
                    break;
                
                case 'add_blogs':
                    require_once 'blogs/add_blogs.php';
                    break;  
             
                case 'edit_blogs':
                    require_once 'blogs/edit_blogs.php';
                    break;  
                
                case 'delete_blogs':
                    require_once 'blogs/delete_blogs.php';
                    break; 
                
                case 'delete_table_blogs':
                    require_once 'blogs/delete_table_blogs.php';
                    break; 
        
                default:
                    require_once 'blogs/list_blogs.php';
                    break;  
            }
        }else{
            require_once 'blogs/list_blogs.php';
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>