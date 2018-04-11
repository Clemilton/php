
<?php

require_once('vendor/autoload.php');

// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",

);
Tpl::configure( $config );
// Add PathReplace plugin (necessary to load the CSS with path replace)
Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
// create the Tpl object
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Obi Wan Kenoby" );

$tpl->assign("version",PHP_VERSION);
// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template
$tpl->draw( "index" );

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "projeto.solenoide@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "bolodemacaco123";

//Set who the message is to be sent from
$mail->setFrom('projeto.solenoide@gmail.com', 'Teste PHP');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('clemilton.ufam@gmail.com', 'Clemilton Pereira');

//Set the subject line
$mail->Subject = 'PHP mailer';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('contents.html'), __DIR__);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

?>
