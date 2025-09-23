<?php
// require 'vendor/autoload.php'; // Agar Composer se install kiya hai
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;


// // Form data yaha aayega
// $name = $_POST['name'];
// $email = $_POST['email'];
// $service = $_POST['service'];
// $message = $_POST['message'];

// $mail = new PHPMailer(true);

// try {
//     $mail->isSMTP();
//     $mail->Host = 'smtp.gmail.com';  // Gmail SMTP
//     $mail->SMTPAuth = true;
//     $mail->Username = 'ashwinranjan.singh@gmail.com'; // 👈 apna Gmail likho
//     $mail->Password = 'bukg kwmp pswe irhf';   // 👈 jo 16 digit app password bna tha
//     $mail->SMTPSecure = 'tls';  
//     $mail->Port = 587;

//     // Sender & Receiver
//     $mail->setFrom($email, 'QALB TECH'); // 👈 From (apna Gmail)
//     $mail->addAddress('ashwinranjan.singh@gmail.com');         // 👈 Kaha receive karna h (apna Gmail hi dal sakte ho)

//     // Email content
//     $mail->isHTML(false);
//     $mail->Subject = 'Security Alert';
//     $mail->Body = "Name: $name\nEmail: $email\nService: $service\nMessage: $message";

//     $mail->send();
//     echo "Message sent successfully!";
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $service = $_POST['service'] ?? '';
    $message = $_POST['message'] ?? '';

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
        $mail->addReplyTo($email, $name);
        $mail->addAddress('ashwinranjan.singh@gmail.com');

        $mail->isHTML(false);
        $mail->Subject = 'New Quote Request from Website';
        $mail->Body = "Name: $name\nEmail: $email\nService: $service\nMessage: $message";

        $mail->send();

        // ✅ Success redirect
        header("Location: index.php?status_request=success&msg_request=Request+sent");
        exit;
    } catch (Exception $e) {
        // ❌ Error redirect
        header("Location: index.php?status=error&msg=" . urlencode($mail->ErrorInfo));
        exit;
    }
}

?>
