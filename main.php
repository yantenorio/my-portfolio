<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$msg = $_POST['msg'];
$send_date = date('d/m/Y');
$send_time = date('H:i:s');


$file = "
    <html>
    <p><b>Name: </b>$name</p>
    <p><b>Email: </b>$email</p>
    <p><b>Subject: </b>$subject</p>
    <p><b>Message: </b>$msg</p>
    <p><b>This email was sent at $send_time on $send_date</b></p>

    </html>
";


$to = "tenorioyan11@gmail.com";

$headers = "From: $name <$email>";


if(mail($to, $subject, $msg, $headers)){
    echo "Message accepted";
} else {
    echo "Error: Message not accepted";
}
