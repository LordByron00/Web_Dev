<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php'; // Include PHPMailer autoloader

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'jbayron76@gmail.com'; // Your Gmail email address
        $mail->Password = 'pdtd hwda edml cayo'; // Your Gmail password
        $mail->Port = 587; // SMTP port (587 for TLS)
        $mail->SMTPSecure = 'tls'; // Enable TLS encryption

        // Email content
        $mail->setFrom('jbayron76@gmail.com', 'Lord Byron');
        $mail->addAddress($_POST['recipient']);
        $mail->Subject = $_POST['subject'];
        $mail->Body = $_POST['message'];

        // Send email
        $mail->send();
        echo 'Email sent successfully.';
    } catch (Exception $e) {
        echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
    }
?>
