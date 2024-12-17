<!-- connection and storage of data of form  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Appointment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
// Start session
session_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointments"; // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Include PHPMailer autoload file and use statements
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if form is submitted
if (isset($_POST['submit'])) {
    $pat_name = $_POST['name'];
    $email = $_POST['email'];
    $phn_no = $_POST['number'];
    $date_time = $_POST['date'];

    // Sanitize input to prevent SQL injection
    $pat_name = mysqli_real_escape_string($conn, $pat_name);
    $email = mysqli_real_escape_string($conn, $email);
    $phn_no = mysqli_real_escape_string($conn, $phn_no);
    $date_time = mysqli_real_escape_string($conn, $date_time);

    // Insert data into database
    $sql = "INSERT INTO booked_appoint (pat_name, phn_no, email, date_time) VALUES ('$pat_name', '$phn_no', '$email', '$date_time')";

    if (mysqli_query($conn, $sql)) {
        // Prepare confirmation email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Your SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'smilecareweb@gmail.com'; // Your SMTP username from environment variable
            $mail->Password = 'Shakalakaboom'; // Your SMTP password from environment variable
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('smilecareweb@gmail.com', 'Smile Care Dental');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Appointment Confirmation - Smile Care Dental';
            $mail->Body    = "Dear $pat_name,<br><br>Thank you for booking your appointment with Smile Care Dental.<br><br>Here are the details of your appointment:<br>- Date & Time: $date_time<br>- Name: $pat_name<br>- Phone Number: $phn_no<br><br>If you have any questions, feel free to contact us.<br><br>Best Regards,<br>Smile Care Dental Team";

            $mail->send();
            $_SESSION['message'] = "Appointment booked successfully! A confirmation email has been sent to $email.";
        } catch (Exception $e) {
            error_log("Mailer Error: {$mail->ErrorInfo}"); // Log error
            $_SESSION['message'] = "Appointment booked successfully,but failed to send confirmation email.Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $_SESSION['message'] = "Error: " . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);

    // Redirect to the same page to display the message
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

 // Display message if exists
 if (isset($_SESSION['message'])) {
    echo "<script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('messageModal'), {});
            document.getElementById('modalMessage').innerText = '" . $_SESSION['message'] . "';
            myModal.show();
        });
        </script>";
    unset($_SESSION['message']); // Clear the message after displaying
}
?>

<!-- Bootstrap Modal -->
<div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel">Notification</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"  onclick="window.location.href='index.php';"></button>
            </div>
            <div class="modal-body">
                <p id="modalMessage"></p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.location.href='index.php';">Close</button>

        
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>



