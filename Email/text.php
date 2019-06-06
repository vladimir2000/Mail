<?php

echo $_POST['q'];
echo $_POST['w'];
echo $_POST['e'];

$to      = $_POST['q'];
$subject = $_POST['w'];
$message = $_POST['e'];

mail($to, $subject, $message);


?>
