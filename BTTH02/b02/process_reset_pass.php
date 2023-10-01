<?php
// Bước 1: Xác định token từ tham số URL
$token = $_POST["token"]; // lấy thông tin "token" lấy thông tin từ html 

// Bước 2: Hash token để so sánh với giá trị lưu trữ trong cơ sở dữ liệu
$token_hash = hash("sha256", $token);

// Bước 3: Truy vấn cơ sở dữ liệu để kiểm tra sự tồn tại của token và hạn sử dụng
$sql = "SELECT * FROM users WHERE reset_token = :token_hash";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':token_hash', $token_hash);
$stmt->execute();

$user = $stmt->fetch();

if (!$user) {
    die("Token not found or expired");
}
$pass = $_POST["pass"];
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

$update_sql = "UPDATE users SET pass = :pass_hash, reset_token = NULL, reset_expiry = NULL WHERE id = :id";
$update_stmt = $conn->prepare($update_sql);
$update_stmt->bindParam(':pass_hash', $pass_hash);
$update_stmt->bindParam(':id', $user['id']);

if ($update_stmt->execute()) {
    echo "Mật khẩu đã được cập nhật thành công. Bạn có thể đăng nhập bây giờ.";
    header("location: index_users.php?page_layout_users=login");
} else {
    echo "Lỗi khi cập nhật mật khẩu: " . $update_stmt->errorInfo()[2];
}

?>
