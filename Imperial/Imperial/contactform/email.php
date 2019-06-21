<?php
    
    $name = $_POST['name'];
    $email_from = $_POST['email'];
    $email_body = $_POST['message'];
    $email_subject = $_POST['subject'];


	$to = 'dludlec.b@gmail.com';

	$email_subject = $email_subject;

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $email_body";
     
    $headers = "From: $email_from \r\n";
                    
    mail($to,$email_subject,$email_body,$headers);

?>
