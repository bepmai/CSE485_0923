<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body style="background-color: #dbe3e0;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <form action="<?php echo DOMAIN."/public/indexPatient.php?action=Store_Add"?>" method="post" class="row g-3" style="margin-top: 70px;">
                    <h3 class="text-center text-uppercase text-success my-3">thêm bệnh nhân</h3>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Tên bệnh nhân:</label>
                        <input type="text" name="namePatient" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Ngày khám:</label>
                        <input type="date" name="datePatient" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Triệu chứng:</label>
                        <input type="text" name="symptom" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="form-label fw-bold">Mã bác sĩ:</label>
                        <select class="form-select" name="idDoctor" required>
                            <option value="0">Chọn mã bác sĩ</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" name="sbm"  class="btn btn-success">Thêm</button>
                        <a type="button" class="btn btn-secondary" href="<?php echo DOMAIN."/public/indexPatient.php"?>">Thoát</a>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>