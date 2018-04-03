<?php
    $isSend = false;
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = $name;
        $to = 'me@shauncarroll.com';
        $subject = $name . ' left a message from shauncarroll.com';
        $body = "From: $name\n \n E-Mail: $email\n \n Message:\n $message";
        print_r($body);
        die();
        // Check if name has been entered
        if (empty($_POST['name'])) {
            $errName = 'Please enter your name';
            $isSend = false;
        }
        else {
            $isSend = true;
        }

        // Check if email has been entered and is valid
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email';
            $isSend = false;
        }
        else {
            $isSend = true;
        }

        //Check if message has been entered
        if (empty($_POST['message'])) {
            $errMessage = 'Please enter a message';
            $isSend = false;
        }
        else {
            $isSend = true;
        }

        // If there are no errors, send the email
        if ($isSend) {
            $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
            mail($to, $subject, $body);
        }
        else {
            $result = '<div class="alert alert-danger">Please fill out all fields.</div>';
        }
    }
?>