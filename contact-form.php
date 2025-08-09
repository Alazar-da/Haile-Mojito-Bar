<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';



require_once "vendor/autoload.php";

$status = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize form data
    $name = htmlspecialchars(strip_tags($_POST['name'] ?? ''));
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags($_POST['subject'] ?? ''));
    $message = htmlspecialchars(strip_tags($_POST['message'] ?? ''));

    // Basic validation
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'MilkomiWeb@gmail.com';         // Your Gmail address
        $mail->Password   = 'vgwxubuqjvbszmqg';              // Your App Password (not your Gmail password)
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // TLS fix for local server
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true,
            ],
        ];

        // Email headers and content
        $mail->setFrom('MilkomiWeb@gmail.com', 'Milkomi Website');
/*         $mail->addAddress('Hailesmojitobar@gmail.com', "Haile's Mojito Bar"); */
        $mail->addAddress('ale2abuye@gmail.com', "Haile's Mojito Bar");

        $mail->isHTML(true);
        $mail->Subject = $subject;

        $mail->Body = '
        <table cellpadding="0" cellspacing="0" style="border-collapse: collapse; max-width: 600px; margin: 0 auto;">
            <tr>
                <td style="background-color: #f4f4f4; padding: 20px;">
                    <h2 style="color: #333; margin: 0;">New Message from Website</h2>
                </td>
            </tr>
            <tr>
                <td style="padding: 20px;">
                    <p><strong>Name:</strong> ' . $name . '</p>
                    <p><strong>Email:</strong> ' . $email . '</p>
                    <p><strong>Subject:</strong> ' . $subject . '</p>
                    <p><strong>Message:</strong><br>' . nl2br($message) . '</p>
                </td>
            </tr>
            <tr>
                <td style="background-color: #333; color: #fff; text-align: center; padding: 10px;">
                    <p style="margin: 0;">This message was sent from your website contact form.</p>
                </td>
            </tr>
        </table>';

        $mail->AltBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

        $mail->send();

/*         if ($mail->send()) {
    echo "<script>window.onload = function() { showPopup(); }</script>";
} else {
    echo "Mailer Error: " . $mail->ErrorInfo;
} */
    echo "<script>sessionStorage.setItem('contactSuccess', 'true'); window.location.href = window.location.href;</script>";
exit;

    } catch (Exception $e) {
        echo "<script>alert('❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
          $status = 'Message could not be sent. Please try again later';
    header("refresh:2");
    }
}
?>
