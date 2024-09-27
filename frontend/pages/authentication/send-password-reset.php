<?php
$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 30);

include "../../../backend/config/connection.php";

$sql = "UPDATE user_info
        SET reset_token_hash = ?,
        reset_token_expires_at = ?
        WHERE email = ?";
$stmt = $connect->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt->execute();

if ($connect->affected_rows) {

        $mail = require __DIR__ . "/../../../backend/config/mailer.php";
        ;

        $mail->setFrom("thapapramod821@gmai.com", "GameStop");
        $mail->addAddress($email);
        $mail->Subject = "Reset Your Password";
        $mail->Body = ' 

        We received a request to reset the password for your account associated with this email address. If you did not make this request, you can safely ignore this email. Otherwise, you can reset your password using the link below: <br>

        <a href="http://localhost/GameStop/frontend/pages/authentication/reset-password.php?token=' . $token . '">Reset Password</a>

        This link will expire in 24 hours. If it does, you can request a new password reset. <br>

        If you have any questions or encounter any issues, please feel free to reach out to our support team. ';
        try {
                $mail->send();

        } catch (Exception $e) {
                echo "Message Couldnt nott be sent . Mailer error:{$mail->ErrorInfo}";
        }


}
echo "Message Sent, please check your inbox";

