<?php function ifynmail($to,$toname,$subject,$fromname,$from,$body,$attach=''){


require_once($_SERVER['DOCUMENT_ROOT'].'/app/contact-form/phpmailer/PHPMailer.php');
	$mail = new PHPMailer();
	$mail->IsSMTP();
//$mail->Mailer="sendmail";
	$mail->WordWrap = 100;
	$mail->IsHTML(false);
	$mail->AddAddress($to,"");
	$mail->From = $from;
	$mail->FromName = $fromname;
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

	//$mail->Host = 'smtp.gmail.com';
$mail->Username = 'mycontactform205@gmail.com';
$mail->Password = 'jgTzJv3gZyEbf2hdXC6o';




$mail->SMTPAuth = true;

//$mail->SMTPSecure = 'tls';

	//$mail->SMTPSecure= "ssl"; //  Used instead of TLS when only POP mail is selected
	$mail->Port = 465;        //  Used instead of 587 when only POP mail is selected
	$mail->SetLanguage("en", $_SERVER['DOCUMENT_ROOT'].'/app/contact-form/phpmailer/language/');


	$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
	$res = $mail->Send();
	//echo $mail->ErrorInfo;



return true;

}

?>
