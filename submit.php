<?php
  $secret = $_POST['secret'];
  $response = $_POST['response'];
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
  //$body = "";

// Varios destinatarios
$para  = 'hp.hernanpereira@gmail.com';

// título
$título = 'Recordatorio de cumpleaños para Agosto';

// mensaje
$mensaje = '
<html>
<head>
  <title>Recordatorio de cumpleaños para Agosto</title>
</head>
<body>
  <p>¡Estos son los cumpleaños para Agosto!</p>
  <table>
    <tr>
      <th>Quien</th><th>Día</th><th>Mes</th><th>Año</th>
    </tr>
    <tr>
      <td>Joe</td><td>3</td><td>Agosto</td><td>1970</td>
    </tr>
    <tr>
      <td>Sally</td><td>17</td><td>Agosto</td><td>1973</td>
    </tr>
  </table>
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <hp.hernanpereira@gmail.com>' . "\r\n";
$cabeceras .= 'From: Recordatorio <hp.hernanpereira@gmail.com>' . "\r\n";
$cabeceras .= 'Bcc: hachesolo@hotmail.com' . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);



  /* foreach ($_POST as $k=>$v) {
      if ($k != "g-recaptcha-response") { $body .= "$k : $v\r\n";}
  } */
  
} else { 
  $error = "Captcha Inválido";
}

//Output result
// echo $json['success'] ? 'success' : $error;
?>
