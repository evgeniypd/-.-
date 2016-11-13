<?php
// Check for empty fields

$phone = $_POST['phonetour1'];

	
// Create the email and send the message
$to = 'larisa-pavlova@yandex.ru'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Заказ звонка";
$email_body = "Новое сообщение от посетителя.\n\n"."Детали ниже:\n\nТелефон: $phone";
$headers = "От: noreply@expresstour.ru\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>