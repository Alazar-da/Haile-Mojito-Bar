<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize input
    $name    = htmlspecialchars(strip_tags($_POST['name'] ?? ''));
    $email   = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
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

    $mail = new PHPMailer(true);

    try {
        // SMTP settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'hailesmojitobarwebsite@gmail.com'; // Your Gmail address
        $mail->Password   = 'nqxjdnaispmmkjip';     // Your Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // TLS for local testing
        $mail->SMTPOptions = [
            'ssl' => [
                'verify_peer'       => false,
                'verify_peer_name'  => false,
                'allow_self_signed' => true
            ]
        ];

        // FROM must match Gmail account to pass SPF/DKIM
        $mail->setFrom('hailesmojitobarwebsite@gmail.com', 'haile\'s mojito bar Website');

        // User’s email goes here as Reply-To
        $mail->addReplyTo($email, $name);

        // Recipient
        $mail->addAddress('ale2abuye@gmail.com', "Haile's Mojito Bar");

        // Email format
        $mail->isHTML(true);
        $mail->Subject = "[Website Contact] " . $subject;

        // HTML Body
        $mail->Body = "
        <p>You have received a new message from your website contact form:</p>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Subject:</strong> {$subject}</p>
        <p><strong>Message:</strong><br>" . nl2br($message) . "</p>
        <hr>
        <p style='font-size:12px;color:#666;'>This message was sent from your website contact form.</p>
        ";

        // Plain text alternative
        $mail->AltBody = "New message from your website:\n\n"
            . "Name: {$name}\n"
            . "Email: {$email}\n"
            . "Subject: {$subject}\n"
            . "Message:\n{$message}";

       $mail->send();
echo "<script>
    sessionStorage.setItem('contactSuccess', 'true');
    window.location.href = '" . $_SERVER['PHP_SELF'] . "';
</script>";
exit;


    } catch (Exception $e) {
        echo "<script>alert('❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>
