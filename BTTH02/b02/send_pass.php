<?php
    $email = $_POST["email"];
    $token = bin2hex(random_bytes(16)); // Tạo mã thông báo ngẫu nhiên
    $token_hash = hash("sha256", $token);
    // $expiry = date("Y-m-d H:i:s", strtotime("+1 hour")); // Thời gian hết hạn (ví dụ: 1 giờ sau)
    $expiry = date("Y-m-d H:i:s", time() + 60 * 30); // Thời gian hết hạn (ví dụ: 1 giờ sau)

    $sql = "UPDATE users SET reset_token = :token_hash, reset_expiry = :expiry WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':token_hash', $token_hash);
    $stmt->bindParam(':expiry', $expiry);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
// Create the email message
    $message = <<<END
    Click <a href="http://localhost/TH_PHP/BT_TH/BTTH02/index_users.php?page_layout_users=reset_password">here</a> to reset your password.
    END;

    // Send the email
    $mail = require __DIR__ . "/mailer.php";
    $mail->setFrom("mainguyenphuong04@gmail.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = $message;

    try {
        $mail->send();
        echo "Message sent, please check your inbox";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    }
?>
