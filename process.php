<?php
// verify captcha
$error = "";
$secret ="6Lej_NMnAAAAAA_cHM65NQgTnibELPKC5GRRx2ht";
$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=".$_POST['g-recaptcha-response'];
$verify = json_decode(file_get_contents($url));

//send email if OK
if ($verify->success) {
    $to = "leandrobilokapic@gmail.com";
    $subject = "Contact Form POLYFEN TEST";
    $body = "";
    foreach ($_POST as $k=>$v) {
        if ($k != "g-recaptcha-response") { $body .= "$k : $v\r\n";}
    }
    if (!mail($to, $subject, $body)){
        $error = "Falla en enviar email";
    }
} else { $error = "Captcha Invadido";}



//Output result
echo $error=="" ? "OK" : $error;
?>


