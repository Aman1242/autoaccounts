<?php

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $companyname = $_POST['company_name'];

    $emailfrom = 'Auto Accounts Website';
    $email_subject = 'New message from Auto Accounts Contact';
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";
    $to = "contact@auto-accounts.com";
    $headers = "From: $email_form \r\n";
    $headers . = "Reply-To: $email \r\n";

    mail($to, $email-subject, $email_body, $headers);

    header("location: index.html");
?>