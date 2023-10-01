<?php
$email = $_POST["email"];

// Create the email message
$message = <<<END
Click <a href="http://localhost/TH_PHP/BT_TH/BTTH02/index_admin.php?page_layout_admin=table_users">here</a> to reset your password.
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
