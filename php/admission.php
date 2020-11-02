<?php
error_reporting(0);
/*
 * ------------------------------------
 * Registration Form Configuration
 * ------------------------------------
 */

$to    = "test@surjithctly.in"; // <--- Your email ID here
$server_email = 'webmaster@web3canvas.com';  // Your server email to authenticate outgoing emails. eg: name@yourdomain.com
/*
 * ------------------------------------
 * END CONFIGURATION
 * ------------------------------------
 */

$name     = $_POST["first_name"];
$email    = $_POST["email"];
$website  = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$website = dirname($website);

if (isset($email) && isset($name)) {

	$subject  = "New Application from $name"; // <--- Contact for Subject here.

	$msg      = 'Hello Admin, <br/> <br/> Here are the application details:';
	$msg     .= ' <br/> <br/> <table border="1" cellpadding="6" cellspacing="0" style="border: 1px solid  #eeeeee;">';
	foreach ($_POST as $label => $value) {
	    $msg .= "<tr><td width='100'>". ucfirst($label) . "</td><td width='300'>" . $value . " </tr>";
	}
	$msg      .= " </table> <br> --- <br>This e-mail was sent from $website";

/*
 * ------------------------------------
 * Send Mail via PHP Mailer
 * ------------------------------------
 */

if( isset($POST['email']) && $POST['email'] != ''){
  if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    name = $_POST['name'];
    father_name = $POST['father_name'];
    phone = $_POST['phone'];
    father_phone = $_POST['father_phone'];
    email = $_POST['email'];
    dob = $_POST['dob'];
    school_name = $_POST['school_name'];
    education = $_POST['education'];
    address = $_POST['address1' + ', address2'];
    message = $_POST['message'];

    $to = "nihar@gmail.com"
    $subject = "Form Submittion Details"
    $body = "";

    $body .= "Name: ".$name. "\r\n";
    $body .= "Father's Name: ".$father_name. "\r\n";
    $body .= "Phone no.: ".$phone. "\r\n";
    $body .= "Father's Phone no.: ".$father_phone. "\r\n";
    $body .= "Email: ".$email. "\r\n";
    $body .= "Date of Birth: ".$dob. "\r\n";
    $body .= "School Name: ".$school_name. "\r\n";
    $body .= "Percentage in 10th: ".$education. "\r\n";
    $body .= "Address: ".$address. "\r\n";
    $body .= "Message: ".$message. "\r\n";

  
    mail($to , $subject, $body);


  }
}




/* -----------------------------------
 * Mail sending ends here
 * -----------------------------------
 */
date_default_timezone_set('Etc/UTC');

require 'phpmailer/PHPMailerAutoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Set who the message is to be sent from
$mail->setFrom($server_email, $name);
//Set an alternative reply-to address
$mail->addReplyTo($email, $name);
//Set who the message is to be sent to
$mail->addAddress($to);
//Set the HTML True
$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $msg;

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "success";
}


} // END isset



?>
