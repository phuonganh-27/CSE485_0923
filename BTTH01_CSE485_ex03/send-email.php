<?php
require "vendor/autoload.php";
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
include "database.php";
$name = "TLU";
if ($_POST["email"] === $_SESSION['email']) {
    $email = $_POST["email"];
    // $subject = $_POST["subject"];
    $message = $_POST["message"];
    if (isset($_POST["submit"])) {
        if($_POST["submit"]==="Authentication"){

            $email = $_POST['email'];
            
        // Kiểm tra xem email có tồn tại trong cơ sở dữ liệu không
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();
        
        if ($user) {
            $sql = "UPDATE users SET code = :code WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':code', $message);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } else {
            echo "Email không tồn tại trong hệ thống.";
        }
        
        
        
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->isSMTP();
        $mail->SMTPAuth = true;
        
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        
        $mail->Username = "buipanh11@gmail.com";
        $mail->Password = "tvpgrnhetwjqhrig";
        
        $mail->setFrom("buipanh11@gmail.com");
        $mail->addAddress($email, $name);
        
        $mail->Subject = "Authentication";
        $mail->Body = $message;
        
        $mail->send();
        
        header("Location: code.php");
    }
    else{
        $email = $_POST['email'];
            
        // Kiểm tra xem email có tồn tại trong cơ sở dữ liệu không
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch();
        
        if ($user) {
            $sql = "UPDATE users SET code = :code WHERE email = :email";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':code', $message);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
        } else {
            echo "Email không tồn tại trong hệ thống.";
        }
        
        
        
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

        $mail->isSMTP();
        $mail->SMTPAuth = true;
        
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        
        $mail->Username = "buipanh11@gmail.com";
        $mail->Password = "tvpgrnhetwjqhrig";
        
        $mail->setFrom("buipanh11@gmail.com");
        $mail->addAddress($email, $name);
        
        $mail->Subject = "Authentication";
        $mail->Body = $message;
        
        $mail->send();
        
        header("Location: codeforgot.php");
    }
    }
}
