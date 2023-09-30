<?php
    $sql = "SELECT * from users";
    $query = mysqli_query($connect, $sql);
    // $connect: Đây là biến kết nối cơ sở dữ liệu đã được thiết lập trước đó. 
    //         Biến này chứa thông tin về cách kết nối đến cơ sở dữ liệu MySQL, 
    //         bao gồm thông tin về máy chủ, tên người dùng, mật khẩu và tên cơ sở dữ liệu.
    // $sql: Đây là câu truy vấn SQL mà bạn muốn thực hiện.
?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-white left-part">
                <?php
                    include "./add/menu.php"; // nhúng tệp php 
                ?>
            </div>

            <div class="col-md-7 partMain">
                <div class="row partFirst">
                    <div class="col-md-6 user-form">
                        <button type="button" class="btn btn-outline-light"><i class="bi bi-list"></i></button>
                        <span class="">Users</span>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group search-form">
                            <span class="input-group-text box-search"><i class="bi bi-search search-icon"></i></span>
                            <input type="text" class="form-control" placeholder="Search here...">
                        </div>
                    </div>
                </div>

                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <span class="text-filter">Filter</span>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <div class="row partSec">
                                    <div class="col-md-3">
                                        <input type="text" name="" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="" placeholder="Mobile" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <select name="" class="form-control">
                                            <option value="0">Select groups</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="btn btn-success filter-form"><i class="bi bi-search"></i>Filter</button>
                                    </div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-success clear-form">Clear</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
                <div class="partThree">
                    <div class="row part-hearder">
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <h3 class="text-users">Users</h3>
                        </div>
                        <div class="col-md-2">
                            <a onclick="return Del_table()" href="index.php?page_layout=delete_table" class="btn btn-success fw-bolder delete-table">Delete</a>
                        </div>
                        <!--  -->
                        <!--  -->
                        <div class="col-md-3">
                            <div class="btn-group btn-addusers">
                                <a class="btn btn-color fw-bolder text-light" href="index.php?page_layout=add"><i class="bi bi-plus"></i>ADD User</a>
                            </div>
                        </div>
                    </div>
                    <div class="row table-part">
                        <div class="col-md-12 table-responsive overflow-auto">
                            <table class="table table-lg table-size">
                                <thead>
                                    <tr>
                                        <th>
                                            <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                        </th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>groupss</th>
                                        <th>Mobile</th>
                                        <th>Date Of Birth</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($query)){
                                        /*lấy một dòng (bản ghi) dữ liệu từ kết quả truy vấn và lưu trữ nó trong biến $row
                                        mysqli_fetch_array sử dụng chỉ số hàng (0, 1, ...) để truy cập dữ liệu, 
                                                            trả về dữ liệu dưới dạng một mảng kết hợp (associative array) 
                                                            và mảng chỉ số (numeric array) cùng một lúc. 
                                                            Điều này có nghĩa là bạn có thể truy cập dữ liệu bằng cả tên cột và chỉ số hàng.
                                        mysqli_fetch_assoc sử dụng tên cột để truy cập dữ liệu
                                                            chỉ trả về dữ liệu dưới dạng mảng kết hợp (associative array). 
                                                            Mảng này có các key là tên cột trong kết quả truy vấn và 
                                                            giá trị tương ứng là dữ liệu của từng cột.
                                        */
                                ?>          
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $row['fullname']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['gender']; ?></td>
                                            <td><?php echo $row['groups']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['dateBirth']; ?></td>
                                            <td><div class="circle"></div></td>
                                            <td>
                                                <a class="link-offset-2 link-underline link-underline-opacity-0 btn btn-secondary text-light" href="index.php?page_layout=edit&id=<?php echo $row['idusers']; ?>"><span class="icon_edit"><i class="bi bi-pencil"></i>Edit</span></a>
                                                <a class="link-offset-2 link-underline link-underline-opacity-0 btn btn-dark text-light" onclick="return Del('<?php echo $row['fullname']; ?>')" href="index.php?page_layout=delete&id=<?php echo $row['idusers']; ?>"><span class="icon_delete"><i class="bi bi-trash3"></i>Delete</span></a>
                                                <!-- 
                                                    onclick: Đây là một sự kiện JavaScript được gắn vào liên kết. Khi người dùng nhấp vào liên kết này, hàm Del sẽ được gọi.
                                                    Hàm này nhận một tham số name, là tên của người dùng (trích từ biến PHP $row['fullname']), 
                                                 -->
<!--  -->
                                                <!-- Modal -->
                                                <!-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete users</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                You are sure
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <a class="link-offset-2 link-underline link-underline-opacity-0 btn btn-dark text-light" href="index.php?page_layout=delete&id=<?php echo $row['idusers']; ?>"><span class="icon_delete"><i class="bi bi-trash3"></i>Delete</span></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
<!--  -->
                                            </td>
                                        </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row partPagination">
                        <div class="col-md-1"></div>
                        <div class="col-md-7">
                            Page 1 of 4.
                        </div>
                        <div class="col-md-4">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true" class="pagePag">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true"class="pagePag">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1 part-rigt">
                <?php
                include "./add/menu-child.php"
                ?>
            </div>
        </div>
    </div>
    <script>
    function Del(name){
        return confirm("Ban co chac muon nguoi dung:" + name + "?");
    }

    function Del_table(){
        return confirm("Ban co chac muon toan bo bang");
    }
    </script>
