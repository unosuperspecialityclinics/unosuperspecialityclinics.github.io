<?php

    $to = "unosuperspecialityclinics@gmail.com";
    $from = $_REQUEST['unosuperspecialityclinics@gmail.com'];
    $name = $_REQUEST['name'];
	$surname = $_REQUEST['surname'];
	$phone = $_REQUEST['phone'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$subject = $_REQUEST['subject'];
    $headers = "From: $from";
    

    $fields = array();
    $fields{"name"} = "Name";
	$fields{"surname"} = "Surname";
	$fields{"phone"} = "Phone";
    $fields{"email"} = "E-mail";
	$fields{"city"} = "City";
	$fields{"state"} = "State";
    $fields{"subject"} = "Subject";
    $fields{"message"} = "Message";

    $body = "Here is the message from conceito:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
