<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // make sure PHPMailer is installed via Composer

// --- CONFIG ---
$recaptchaSecret = '6Lei6_YrAAAAAIZiTIpgREwdgvJpHw3ng6JsUFdS';
$recipientEmail  = 'info@dubaimyhouse.com';

// --- HELPER ---
function jsonResponse($data, $code = 200)
{
    http_response_code($code);
    header('Content-Type: application/json');
    echo json_encode($data);
    exit;
}

// --- VALIDATION ---
$errors = [];

$firstName = trim($_POST['firstName'] ?? '');
$lastName  = trim($_POST['lastName'] ?? '');
$email     = trim($_POST['email'] ?? '');
$phone     = trim($_POST['phone'] ?? '');
$investment = trim($_POST['investment'] ?? '');
$details   = trim($_POST['details'] ?? '');
$recaptcha = $_POST['g-recaptcha-response'] ?? '';

// ✅ Required fields
if ($firstName === '' || strlen($firstName) > 255) $errors[] = 'Invalid first name';
if ($lastName === '' || strlen($lastName) > 255)   $errors[] = 'Invalid last name';
if (!filter_var($email, FILTER_VALIDATE_EMAIL))     $errors[] = 'Invalid email address';
if (!is_numeric($investment))                       $errors[] = 'Investment must be numeric';
if ($recaptcha === '')                              $errors[] = 'reCAPTCHA is required';

// ✅ UK phone number validation (only 01, 02, or 07 allowed)
$pattern = '/^(?:0(1\d{3}\s?\d{6}|2\d{1,2}\s?\d{3}\s?\d{4})|07\d{3}\s?\d{6}|\+447\d{3}\s?\d{6})$/';
if (!preg_match($pattern, $phone)) {
    $errors[] = 'Invalid UK phone number format';
}

if (!empty($errors)) {
    jsonResponse(['success' => false, 'errors' => $errors], 422);
}

// --- VERIFY reCAPTCHA ---
$verify = file_get_contents(
    'https://www.google.com/recaptcha/api/siteverify?secret='
    . urlencode($recaptchaSecret)
    . '&response='
    . urlencode($recaptcha)
);
$result = json_decode($verify, true);

if (empty($result['success']) || ($result['score'] ?? 0) < 0.5) {
    jsonResponse(['success' => false, 'message' => 'reCAPTCHA verification failed.'], 422);
}

// --- BUILD HTML EMAIL ---
$emailBody = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px;">
    <div style="max-width: 600px; background: #fff; margin: auto; padding: 20px; border-radius: 8px;">
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="https://dubaimyhouse.com/assets/images/logo-golden.png" alt="Logo" width="100">
        </div>

        <h2 style="text-align:center;">Contact Form Details</h2>
        <p><strong>First Name:</strong> ' . htmlspecialchars($firstName) . '</p>
        <p><strong>Last Name:</strong> ' . htmlspecialchars($lastName) . '</p>
        <p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>
        <p><strong>Phone:</strong> ' . htmlspecialchars($phone) . '</p>
        <p><strong>Investment Amount:</strong> £' . htmlspecialchars($investment) . '</p>';

if (!empty($details)) {
    $emailBody .= '<p><strong>Additional Details:</strong> ' . nl2br(htmlspecialchars($details)) . '</p>';
}

$emailBody .= '
    </div>
</body>
</html>';

// --- SEND USING PHPMailer ---
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'mail.dubaimyhouse.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'contact@dubaimyhouse.com';
    $mail->Password   = 'X&72@ppz=(z(';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom("contact@dubaimyhouse.com", $firstName . ' ' . $lastName);
    $mail->addAddress($recipientEmail);

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission from ' . $firstName . ' ' . $lastName;
    $mail->Body    = $emailBody;

    $mail->send();
    jsonResponse(['success' => true, 'message' => 'Form submitted successfully!']);
} catch (Exception $e) {
    jsonResponse(['success' => false, 'message' => 'Mail could not be sent. Error: ' . $mail->ErrorInfo], 500);
}
