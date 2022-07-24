<?php
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])){

$subject = $_POST['subject'];
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

$receiver = "info@buffalochemicals.com";
$headers = "From: " .$name ." <" .$email ."> \r\n" . "Reply-To: " .$email;
//$txt = "You have received and e-mail from  $name \n\n $message";

mail($receiver, $subject, $msg, $headers);

echo  json_encode([
	'msg' => 'Thank you for contacting us, we will get back to you very soon'
]);

} else {
    echo  json_encode([
        'msg' => 'Sorry, there was an error sending the message.'
    ]);
}


// $msg = "Hello Buffalo again";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg,70);

// $headers = "From: Buffalo Chemicals <info@buffalochemicals.com>" . "\r\n" . "Reply-To: Buffalo Chemicals <info@buffalochemicals.com>";

// // send email
// mail("gdscsiantou2021@gmail.com","My subject",$msg, $headers);

// echo "<br> Hello Buffalo";