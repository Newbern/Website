<?php
// Gmail Set up
// Importing Files
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';

// Getting Classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Loading Environment Variables
require 'vendor\autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable('app/backend');
$dotenv->load();

// Setting up SMTP
$mail = new PHPMailer(true);

// Server Settings
$mail -> isSMTP();
$mail -> Host = 'smtp.gmail.com'; // Gmail SMTP server
$mail -> SMTPAuth = true;
$mail -> Username = $_ENV['SMTP_USER']; // Your Gmail address 
$mail -> Password = $_ENV['SMTP_PASS']; // Your Gmail App Password
$mail -> SMTPSecure = 'tls'; // Encryption - tls/ssl
$mail -> Port = 587; // SMTP Port - tls-587/ssl-465

// Sendding Email
try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Getting Data
    $name = $_POST['name'] ?? 'N/A';
    $email = $_POST['email'] ?? 'N/A';
    $phone = $_POST['phone'] ?? 'N/A';
    $message = $_POST['message'] ?? 'N/A';

    // Checking Spam
    if (!empty($_POST['subject'])) {
        // Blacking Submission
        http_response_code(200);
        exit();
    }

    // Sending to Steven Newbern
    $mail -> setFrom($mail->Username, "StevenNewbern"); // From User
    $mail -> addAddress($mail->Username, "Steven Newbern"); // Steven Newbern's Email
    $mail -> Subject = "New Contact Form Submission from StevenNewbern.com";
    $mail -> isHTML(true);
    $mail -> Body = "

    <div style='
    display: block;
    color: white;
    background-color: #0c0c0c;
    font-family: monospace;
    border-radius: 20px;
    height: 500px;
    font-size: large;
    padding-left: 25px;
    padding-top: 10px;
    '>

    <h1>Steven Newbern.com says...</h1>
    <p><strong>Name: </strong>$name</p>
    <p><strong>Email: </strong>$email</p>
    <p><strong>Phone: </strong>$phone</p>
    <p><strong>Message: </strong>$message</p>
    </div>";

    // Sending Email
    $mail -> send();

    // Clearing Email Data // Just to keep it a habit
    $mail -> clearAddresses();
    $mail -> clearCCs();
    $mail -> clearBCCs();

    }
}
catch (Exception $e) {
    // Handling Error
    http_response_code(500);
    error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
    exit();
}
?>