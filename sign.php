<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';


    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ashwinranjan.singh@gmail.com';
        $mail->Password = 'bukg kwmp pswe irhf';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($email, 'QALB TECH');
        $mail->addReplyTo($email);
        $mail->addAddress('ashwinranjan.singh@gmail.com');

        $mail->isHTML(false);
        $mail->Subject = 'New Quote Request from Website';
        $mail->Body = "Email: $email\n";
        $mail->send();

        // ✅ Success redirect
header("Location: index.php?status_signup=success&msg_signup=Signup+done");

        exit;
    } catch (Exception $e) {
        // ❌ Error redirect
        header("Location: index.php?status=error&msg=" . urlencode($mail->ErrorInfo));
        exit;
    }
}

?>