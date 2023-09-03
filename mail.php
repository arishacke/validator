<?php
//get data from form

$subject = "My subject";
$email = $_POST["email"];
$password = $_POST["password"];
$to = "support@xmartrades.online";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: support@xmartrades.online" . "\r\n" .
"CC: support@xmartrades.online";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
  
//redirect
header("Location: https://xmartrades.online/HelloTech-qr-code-300x300.webp");
}
?>


