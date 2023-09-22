<?php
    $id = $_GET['id'];
    $sql_up = "SELECT * from blogs where id_blogs = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $title = $_POST['title'];
        $status = $_POST['status'];
        $visibility = $_POST['visibility'];
        $publishOn = $_POST['publishOn'];
        $createAt = $_POST['createAt'];
        $updateAt = $_POST['updateAt'];

        $sql = "UPDATE blogs SET title='$title', status='$status', visibility='$visibility', publishOn='$publishOn', createAt='$createAt', updateAt='$updateAt' WHERE id_blogs='$id'";

        $query = mysqli_query($connect, $sql);
        header('location: index_blogs.php?page_layout=list_blogs');
    }
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 bg-light left-part">
            <?php
                include "./add/menu.php";
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
                <br>
            <form method="POST" enctype="multipart/form-data" class="bg-light">
                <br>
                <h3 class="fw-bold" style="color:#ff6a59">&ensp;EDIT BLOGS</h3>
                <hr>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3"><img src="./img/avatar.jpg" style="height: 80px;border-radius: 38px;"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="fw-bold">Title</label>
                            <input type="text" name="title" class="form-control" required value="<?php echo $row_up['title']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="fw-bold">Status</label>
                            <input type="status" name="status" class="form-control" required value="<?php echo $row_up['status']; ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="form-group">
                            <label class="fw-bold">Visibility</label><br>
                            <input type="radio" id="public" name="visibility" value="public" required <?php if ($row_up['visibility'] === 'public') echo 'checked'; ?>>
                            <label for="public">Public</label>
                            <input type="radio" id="private" name="visibility" value="private" required <?php if ($row_up['visibility'] === 'private') echo 'checked'; ?>>
                            <label for="private">Private</label><br>
                        </div>

                        <div class="form-group">
                            <label class="fw-bold">Publish On</label>
                            <input type="date" name="publishOn" class="form-control" required value="<?php echo $row_up['publishOn']; ?>">
                        </div>

                        <div class="form-group">
                            <label class="fw-bold">Create At:</label>
                            <input type="date" name="createAt" class="form-control" required value="<?php echo $row_up['createAt']; ?>">
                        </div>

                        <div class="form-grpup">
                            <label for="updateAt">Up date At</label>
                            <input type="date" name="updateAt" class="form-control" required value="<?php echo $row_up['updateAt']; ?>">
                        </div>
                        <br>
                        <button name="sbm" class="btn btn-success fw-bold" type="submit">EDIT</button>
                        <a class="btn btn-danger text-light fw-bold" href="index_blogs.php?page_layout=list_blogs#" role="button">Cancel</a>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </form>
        </div>
        <div class="col-md-1"></div>
            <div class="col-md-1 part-rigt">
                <?php
                    include "./add/menu-child.php"
                ?>
        </div>
    </div>
</div>

