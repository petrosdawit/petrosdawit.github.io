<?php

//get parameters
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$message = $_POST['message'];
$submit = $_POST['submit'];


if($submit){

    $from = 'From: petontheinter.net'."\r\n"; 
    $to = 'cloudsblack84@gmail.com'; 
    $subject = "Message from petontheinter.net";
    $body = "".
        "From: ".$name."\n".
        "E-mail: ".$email."\n".
        "Phone: ".$phone."\n".
        "Call: ".$call."\n".
        "Message: ".$message."\n";

    //Send email
    if(mail($to, $subject, $body, $from)){
        echo '<p>Your message has been sent!</p>';
    }
    else{
        die('<p>Something went wrong, go back and try again!</p>'); 
    }
}

?>