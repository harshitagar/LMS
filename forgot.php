<?php

$email=$_GET["email"];
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
$r=mail('harshit.harshitag@gmail.com','Subject','Message',$headers);
echo $r;
?>



