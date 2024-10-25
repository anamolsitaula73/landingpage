<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_POST['name'];
    $company_name=$_POST['company_name'];
    $email=$_POST['email'];
    $turnover=$_POST['turnover'];




//Load Composer's autoloader
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ezone.anamol@gmail.com';                     //SMTP username
    $mail->Password   = 'wxoq caas ibvv sirx';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ezone.anamol@gmail.com', 'contact form');
    $mail->addAddress('anmolsitaula73@gmail.com', 'anmol');     //Add a recipient
  
    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New lead from landng page';
    $mail->Body    = "Applicant name-$name <br> Applicant Email -$email<br> Company Name - $company_name <br> Yearly turnover =$turnover ";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}







    // Initialize session array if not set
    $_SESSION['answers'] = [];

    // Store answers in session
    $_SESSION['answers'] = [
        filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING),
        filter_var(trim($_POST['company_name']), FILTER_SANITIZE_STRING),
        filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL),
        filter_var(trim($_POST['turnover']), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION)
    ];

    // Database connection
    include('config.php');

    // Save data to the database
    $stmt = $conn->prepare("INSERT INTO surveys (name, company_name, email, turnover) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssd", $_SESSION['answers'][0], $_SESSION['answers'][1], $_SESSION['answers'][2], $_SESSION['answers'][3]);
    $stmt->execute();
    $stmt->close();

    // Set a flag to indicate survey completion
    $_SESSION['survey_completed'] = true;

    // Clear session data except for completion flag
    unset($_SESSION['answers']);
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Survey Form</title>
    <style>
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        h2 {
            text-align: center;
            color: #164193;
        }
        label {
            font-size: 1.2em;
            color: #164193;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .submit_btn{
            background-color: #164193;
            color: white !important;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            width: 100%;
        }
        .submit_btn:hover{
            background-color: #092D70;
        }
        .download-link {
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
            margin-right: 10px;
        }
        .download-link a {
            background-color: #164193;
            color: white;
            padding: 12px 20px;
            border-radius: 4px;
            text-decoration: none;
        }
        .download-link a:hover {
            background-color: #092D70;
            color:white;
        }
        /* Loading spinner */
        .loading-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            visibility: hidden;
        }
        .spinner {
            border: 5px solid #f3f3f3;
            border-radius: 50%;
            border-top: 5px solid #164193;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="form-container">
    <?php if (!isset($_SESSION['survey_completed'])): ?>
        <form id="surveyForm" method="POST">
            <div class="question-container">
                <label for="name">Your Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="question-container">
                <label for="company_name">Company Name:</label>
                <input type="text" name="company_name" required>
            </div>
            <div class="question-container">
                <label for="email">Your Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="question-container">
                <label for="turnover">Yearly Turnover:</label>
                <input type="number" name="turnover" step="0.01" required>
            </div><br>
            <button class="submit_btn" type="submit">Submit</button>
        </form>
    <?php else: ?>
        <p>Thank you for completing the survey!</p>
        <div class="download-link">
            <a href="assets/pdf/eaccounting.pdf" download>Download your PDF</a>
        </div>
    <?php endif; ?>

    <!-- Loading overlay -->
    <div class="loading-overlay">
        <div class="spinner"></div>
    </div>
</div>

<script src="jquery.js"></script>

<script>
    $(document).ready(function () {
        $('#surveyForm').on('submit', function (event) {
            event.preventDefault(); // Prevent default form submission

            // Show loading spinner
            $('.loading-overlay').css('visibility', 'visible');

            $.ajax({
                url: 'survey.php', // Replace with the actual PHP file
                method: 'POST',
                data: $(this).serialize(),
                success: function (response) {
                    // Hide loading spinner and show success message
                    $('.loading-overlay').css('visibility', 'hidden');
                    $('.form-container').html('<p>Thank you for completing the survey!</p><div class="download-link"><a href="assets/pdf/eaccounting.pdf" download>Download your PDF</a></div>');
                },
                error: function () {
                    // Hide loading spinner and handle error
                    $('.loading-overlay').css('visibility', 'hidden');
                    alert('There was an error submitting the form. Please try again.');
                }
            });
        });
    });
</script>

</body>
</html>
