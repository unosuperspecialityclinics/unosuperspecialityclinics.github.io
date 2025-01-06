<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path to autoload.php based on your project

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assign POST data to variables
    $name = $_POST['patient'] ?? '';
    $number = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $date = $_POST['date'] ?? '';
    $department = $_POST['department'] ?? '';
    $gender = $_POST['gender'] ?? '';
    

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // Server settings for Gmail SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'unosuperspecialityclinics@gmail.com'; // Your Gmail email address
        $mail->Password = 'mqirzxmawmaygkrf'; // Your Gmail password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('unosuperspecialityclinics@gmail.com', 'UNO'); // Your Gmail email and name
        $mail->addAddress('unosuperspecialityclinics@gmail.com', 'UNO'); // Recipient's email and name

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message for Appointment';
        $mail->Body = "
            <h1>New Message</h1>
            <p><strong>Patient Name:</strong> $name</p>
             <p><strong>Phone:</strong> $number</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Date:</strong> $date</p>
            <p><strong>Department:</strong> $department</p>
            <p><strong>gender:</strong> $gender</p>
             
        ";

        $mail->send();
        echo '<script> window.alert("Message has been sent.\n\nPlease click OK."); window.location.href="index.html";</script>';

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    // If accessed directly without POST data
    echo 'Access Denied';
}
