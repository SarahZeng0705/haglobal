<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'database/validation.php';
require_once 'database/database.php';

$pdo = db_connect();
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    validate();
    $success = handle_form_submission();

    $_SESSION['inquiry_id'] = get_id();
    $_SESSION['form_submitted'] = $success;
    header("Location: contact.php");
    exit;
}

if (isset($_SESSION['form_submitted'])) {
    $success = $_SESSION['form_submitted'];
    unset($_SESSION['form_submitted']);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <?php include 'base.php'; ?>

    <link rel="stylesheet" href="css/across.css">
    <link rel="stylesheet" href="css/contact.css?v=1234">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>

<body>
    <?php include 'templates/header.php'; ?>

    <main>

        <h1>Interested in our services? </h1>
        <p>
            Please fill out the form below, and our team will get back to you shortly.
        </p>
        <form action="contact.php" method="POST">

            <div class="row">
                <div>
                    <label for="fullName">Full Name *</label>
                    <input id="fullName" name="fullName" type="text" required>
                    <?php the_validation_message('fullName'); ?>

                </div>

                <div>
                    <label for="company">Company Name (Optional)</label>
                    <input id="company" name="company" type="text">
                </div>
            </div>

            <div class="row">
                <div>
                    <label for="email">Email Address *</label>
                    <input id="email" name="email" type="email" required>
                    <?php the_validation_message('email'); ?>
                </div>

                <div>
                    <label for="phone">Phone Number (Optional)</label>
                    <input id="phone" name="phone" type="tel">
                    <?php the_validation_message('phone'); ?>
                </div>
            </div>

            <div>
                <label for="service">Service of Interest *</label>
                <select id="service" name="service" required>
                    <option value="" disabled selected>Select a service...</option>
                    <option>Fire Safety</option>
                    <option>ESG Consultancy</option>
                    <option>General Inquiry</option>
                </select>
                <?php the_validation_message('service'); ?>

            </div>

            <div>
                <label for="message">Message *</label>
                <textarea id="message" name="message" required></textarea>
                <?php the_validation_message('message'); ?>
            </div>

            <button type="submit">Submit</button>
        </form>

        <?php if ($success) { ?>
            <div class="container">
                <div class="success">
                    <img src="images/accept.png" alt="">
                    <p>We've received your message and our team will get back to you shortly.</p>
                    <p>Your Inquiry id is:  <?php echo $_SESSION['inquiry_id']; ?> </p>
                    <p>Have a great day!</p>
                </div>
            </div>

        <?php } ?>

        <script>
            $('.container').on('click', function () {
                $('.container').remove();
            });
        </script>
    </main>

    <?php include 'templates/footer.php'; ?>
</body>

</html>