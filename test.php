<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$from = 'Artemis Moonlight Contact Form';
$to = 'boulton123@gmail.com';
$subject = '$subj';

$body = "From: $name\n E-mail: $email\n Message:\n $message";

if (!$_POST['name']) {
    $errName = 'Please enter your name';
}
if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
}
if (!$_POST['subj']) {
    $errSubj = 'Please enter a subject';
}
if (!$_POST['msg']) {
    $errMsg = 'Please enter a message';
}

if (!$errName && !$errEmail && !$errSubj && !$errMsg) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will see to your message as soon as possible</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later</div>';
    }
}
?>