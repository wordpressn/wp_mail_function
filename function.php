//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$message = $_POST['message_text'];

//php mailer variables
$to = get_option('admin_email');
$subject = "Some text in subject...";
$headers = 'From: '. $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";

//Here put your Validation and send mail
$sent = wp_mail($to, $subject, strip_tags($message), $headers);
    
if($sent) {
  //message sent!       
}
else  {
  //message wasn't sent       
}
