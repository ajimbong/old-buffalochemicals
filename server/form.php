<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $subject = $_POST['subject'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['message'];
        
        $receiver = "info@buffalochemicals.com";
        $headers = "From: " .$name ." <" .$email ."> \r\n" . "Reply-To: " .$email;
        
        mail($receiver, $subject, $msg, $headers);
        
        echo 'Thank you for contacting us, we will get back to you very soon.';
    } else{
        echo 'The email provided is not a valid email';
    }

} else {
    echo 'Sorry, all the fields were not provided';
}

header("refresh:5;url=contact.html");


//$txt = "You have received and e-mail from  $name \n\n $message";

// $msg = "Hello Buffalo again";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// $headers = "From: Buffalo Chemicals <info@buffalochemicals.com>" . "\r\n" . "Reply-To: Buffalo Chemicals <info@buffalochemicals.com>";

// // send email
// mail("gdscsiantou2021@gmail.com","My subject",$msg, $headers);

// echo "<br> Hello Buffalo";