<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

function ifynmail($to,$toname,$subject,$fromname,$from,$body,$attach=''){


	$mail = new PHPMailer;
	$mail->IsSMTP();

	$mail->WordWrap = 100;
	$mail->IsHTML(false);
	$mail->AddAddress($to,"");
	$mail->From = $from;
	$mail->FromName = $fromname;
	$mail->Subject = $subject;
	$mail->Body = $body;

	/*$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);
*/


$mail->Username = 'mycontactform205@gmail.com';
$mail->Password = 'jgTzJv3gZyEbf2hdXC6o';




$mail->SMTPAuth = true;


	$mail->SetLanguage("en", $_SERVER['DOCUMENT_ROOT'].'/app/contact-form/phpmailer/language/');

$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';



$mail->Host = 'smtp.gmail.com';
	$res = $mail->Send();




return true;

}

?>
