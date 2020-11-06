<?php
$errors = '';
$myemail = 'sales@creativeidea-eg.com';//<-----Put Your email address here.
if(empty($_POST['email']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$message = $_POST['message'];

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))

{

$to = $myemail;

$email_subject = "New Message from Creative-Idea.com";

$email_body = "You have received a new message. \n".

"Here are the details:\nName: $name \n".

"Email: $email_address \nPhone: $phone \n".
        
"Service Type: $service \nMessage: $message \n\nContact Us";

$headers = "From: $myemail \n";

$headers .= "Reply-To: $email_address";

$send = @mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: contact.php');

}
?>