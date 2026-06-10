<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

session_start();

$mail = new PHPMailer(true);

$name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : 'Not provided';
$phone = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : 'Not provided';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : 'Not provided';
$service = isset($_POST['service']) ? strip_tags(trim($_POST['service'])) : 'General Consultation';
$message = isset($_POST['message']) ? strip_tags(trim($_POST['message'])) : 'Not provided';
$source = isset($_POST['source']) ? strip_tags(trim($_POST['source'])) : 'Website Contact Form';

$body = "";
$body .= '<h4>New Lead Growig Hair Solution Website</h4>';
$body .= '<h5>Client Details:</h5>';
$body .= 'Name: ' . htmlspecialchars($name) . "<br>";
$body .= 'Phone Number: ' . htmlspecialchars($phone) . "<br>";
$body .= 'Email: ' . htmlspecialchars($email) . "<br>";
$body .= 'Service: ' . htmlspecialchars($service) . "<br>";
$body .= 'Message: ' . htmlspecialchars($message) . "<br>";
$body .= 'Source: ' . htmlspecialchars($source) . "<br>";

try {
    // SMTP Settings (copied from RF- Update)
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@retrofusion.in';
    $mail->Password = '#tORTx2j30';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Email Settings (default recipients)
    $mail->setFrom('contact@retrofusion.in', $name);
    $mail->addAddress('satyamrai374@gmail.com', 'New Lead');
    $mail->addAddress('growighairsolution@gmail.com', 'Growig Hair Solution');

    $mail->Subject = 'New Lead: Growig Hair Solution Website';
    $mail->MsgHTML($body);
    $mail->IsHTML(true);

    $mail->send();

    // Google Sheets Webhook Integration
    $webhook_url = "https://script.google.com/macros/s/AKfycbwWcm3zsALyIJ2D7tP6e8LTF0z3dEm9DpFKSBBXFrnC5t_zNQ8Cnpr1_PCxpuplsFD9gg/exec"; 

    if (!empty($webhook_url)) {
        $webhook_data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'service' => $service,
            'message' => $message,
            'source' => $source
        ];
        
        $ch = curl_init($webhook_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($webhook_data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5); // 5 sec timeout to avoid blocking
        curl_exec($ch);
    }

    echo "<script> window.location.href = 'thank-you.php'; </script>";
}
catch (Exception $e) {
    echo "<script>
        alert('Something went wrong, Please try again later');
        window.history.back();
    </script>";
}
?>
