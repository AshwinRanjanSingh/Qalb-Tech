<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = $_POST['name'] ?? '';
    $password = $_POST['newpassword'] ?? '';
    $password1 = $_POST['confirmpassword'] ?? '';
    echo "<h1>$password</h1>";
    // $service = $_POST['service'] ?? '';
    // $message = $_POST['message'] ?? '';
    if ($password===$password1) {
        // ✅ Success redirect
        header("Location: index.php?status=success");
        exit;
    }
    else{
        // ❌ Error redirect
        header("Location: index.php?status=error&msg=" . urlencode($mail->ErrorInfo));
        exit;
        // $mail = new PHPMailer(true);
    }

    // try {
    //     $mail->isSMTP();
    //     $mail->Host = 'smtp.gmail.com';
    //     $mail->SMTPAuth = true;
    //     $mail->Username = 'ashwinranjan.singh@gmail.com';
    //     $mail->Password = 'bukg kwmp pswe irhf';
    //     $mail->SMTPSecure = 'tls';
    //     $mail->Port = 587;

    //     $mail->setFrom($email, 'QALB TECH');
    //     $mail->addReplyTo($email);
    //     $mail->addAddress('ashwinranjan.singh@gmail.com');

    //     $mail->isHTML(false);
    //     $mail->Subject = 'New Quote Request from Website';
    //     $mail->Body = "http://localhost/startup2-1.0.0/index.php?";
    //     $mail->send();

    //     // ✅ Success redirect
    //     header("Location: index.php?status=success");
    //     exit;
    // } catch (Exception $e) {
    //     // ❌ Error redirect
    //     header("Location: index.php?status=error&msg=" . urlencode($mail->ErrorInfo));
    //     exit;
    // }
}
?>