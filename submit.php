<?php
  $secret = $_POST['secret'];
  $response = $_POST['response'];
  $email = $_POST['email'];
  $name = $_POST['name'];
  $mensaje = $_POST['mensaje'];
  $error = "";

  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify'; 
  $recaptcha_secret = '6Lej_NMnAAAAAA_cHM65NQgTnibELPKC5GRRx2ht';
  $recaptcha_response = $_POST['response']; 
  $json = json_decode(file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response), true);


  //send email if OK
if ($json['success']) {
  $to = "hp.hernanpereira@gmail.com";
  $bcc = "hachesolo@hotmail.com";
  $subject = "Contact Form POLYFEN TEST";
  $body = "";

  $body .= "$email\r\n";
  $body .= "$name\r\n";
  $body .= "$mensaje\r\n";

  if (!mail($to, $subject, $body)){
    $error = "Falla en enviar email";
  }

  // Enviarlo
  //mail($to, $subject, $mensaje);

  /* foreach ($_POST as $k=>$v) {
      if ($k != "g-recaptcha-response") { $body .= "$k : $v\r\n";}
  } */
  
} else { 
  $error = "Captcha Inválido";
}

//Output result
// echo $json['success'] ? 'success' : $error;
?>
