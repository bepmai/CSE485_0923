<?php
    $sql = "SELECT * from blogs";
    $query = mysqli_query($connect, $sql);
?>
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
                        <span class="">Blogs</span>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group search-form">
                            <span class="input-group-text box-search"><i class="bi bi-search"></i></span>
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
                                        <input type="text" name="" placeholder="Title" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <select name="" class="form-control">
                                            <option value="0">Select Status</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="container">
                                            <div class="form-group">
                                                <input type="date" class="form-control" id="datePicker">
                                            </div>
                                        </div>
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
                            <h3 class="text-blogs">Blogs</h3>
                        </div>
                        <div class="col-md-2">
                            <a onclick="return Del_table()" href="index_blogs.php?page_layout1=delete_table_blogs" class="btn btn-success fw-bolder delete-table">Delete</a>
                        </div>
                        <div class="col-md-3">
                            <div class="btn-group btn-addusers">
                                <a class="btn btn-color text-light fw-bolder" href="index_blogs.php?page_layout1=add_blogs"><i class="bi bi-plus"></i>ADD Blogs</a>
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
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Visibility</th>
                                        <th>Publish On</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Copy Url</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $i=1;
                                    while($row = mysqli_fetch_assoc($query)){
                                ?>
                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $row['title']; ?></td>
                                            <td><?php echo $row['status']; ?></td>
                                            <td><?php echo $row['visibility']; ?></td>
                                            <td><?php echo $row['publishOn']; ?></td>
                                            <td><?php echo $row['createAt']; ?></td>
                                            <td><?php echo $row['updateAt']; ?></td>
                                            <td>
                                                <div class="text-center">
                                                    <a href="" class="copyToClip" title="Copy To Clipboard."><i class="bi bi-copy"></i></a>
                                                </div>
                                            </td>
                                            <td>
                                                <a class="link-offset-2 link-underline link-underline-opacity-0 btn btn-secondary text-light" href="index_blogs.php?page_layout1=edit_blogs&id=<?php echo $row['id_blogs']; ?>">Edit</a>
                                                <a class="link-offset-2 link-underline link-underline-opacity-0 btn btn-dark text-light" onclick="return Del('<?php echo $row['title']; ?>')" href="index_blogs.php?page_layout1=delete_blogs&id=<?php echo $row['id_blogs']; ?>">Del</a>
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
        return confirm("Ban co chac muon xoa blog:" + name + "?");
    }

    function Del_table(){
        return confirm("Ban co chac muon toan bo bang");
    }
    </script>
