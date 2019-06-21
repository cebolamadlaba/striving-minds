<?php
    
   


	$to = 'dludlec.b@gmail.com';

	$email_subject = "huhuu";

	$email_body = "You have received a new message from the user\n".
                            "Here is the message:\n";
     
    $headers = "From: ddddfdf \r\n";
                    
    mail($to,$email_subject,$email_body,$headers);

?>
