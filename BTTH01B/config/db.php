<?php
    $connect = mysqli_connect('localhost', 'root','','btth01_cse485_ex02');
    if($connect){
        mysqli_query($connect, "set names 'UTF8'");
    }
    else{
        echo "ket noi that bai";
    }
?>