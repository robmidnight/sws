<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];
    $from = 'From:'. $_POST['email']; 
    $to = 'simplewebstrategies@gmail.com'; 
    $subject = 'Inquery from website';

    $body = "From: $name\n E-Mail: $email\n Phone Number: $phone_number\n  Message:\n $message";

    if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } 
    else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
    }
}
?>