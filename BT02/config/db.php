<?php
    $connect = mysqli_connect('localhost', 'root','','w3cms');
    // mysqli_connect: mở một kết nối cho mmysql 
    // 'locolhost': Đây là máy chủ MySQL bạn đang cố gắng kết nối đến.
    // 'root': Đây là tên người dùng MySQL mà bạn sử dụng để kết nối. người dùng root thường được sử dụng để thực hiện các thao tác quản trị cơ sở dữ liệu.
    // '': Đây là mật khẩu của người dùng MySQL. 
    // 'php1fpt': Đây là tên cơ sở dữ liệu mà bạn muốn kết nối đến.
    if($connect){
        mysqli_query($connect, "set names 'UTF8'");
        //mysqli_query: chấp nhận một giá trị chuỗi biểu thị một truy vấn dưới dạng một trong các tham số và thực hiện/thực hiện truy vấn đã cho trên cơ sở dữ liệu.
        //Dòng này thiết lập bộ mã ký tự cho kết nối cơ sở dữ liệu thành UTF-8. Điều này là quan trọng để đảm bảo rằng các ký tự đặc biệt và ngôn ngữ không gian đều được xử lý đúng cách.
    }
    else{
        echo "ket noi that bai";
    }
?>