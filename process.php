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
    if (mail($to, $subject, $body)){
        echo "OKIDOKI";
    }
}else { $error = "Invalid ?!?!?!";
}
else {
    $error = "Invalid Captcha!!!!";
}


//Output result
echo $error=="" ? "OK" : $error;
?>


<!-- de otro codigo, no dar bola
if($response->success){
              mail($to_email,$email_subject,$email_body,$headers);
              echo "Message Sent Successfully, vamoo!";
              } else {
                echo "<span>Invalid Captcha, please try again.</span>";
              }
-->