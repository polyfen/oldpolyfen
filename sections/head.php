

  <!-- META General -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website"/>
  <meta name="author"  content="Polyfen OÜ"/>

  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#7537f8">
  <meta name="msapplication-TileColor" content="#7537f8">
  <meta name="theme-color" content="#7537f8">

  <!-- reCAPTCHA -->

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script>
    function recaptcha_callback() {
      $('#send').removeAttr('disabled'); //Enable the "Send" button of the contact form after checking reCaptcha
            };
  </script>

  <!-- BOOTSTRAP (I had to add this to make the case studies slider work) -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- BOOTSTRAP -->
 <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

  <!-- CSS General -->
  <link rel="stylesheet" href="app/css/general.css" type="text/css">

  <!-- FONTS -->
  <!--
/**
 * @license
 * MyFonts Webfont Build ID 3771282, 2019-06-09T19:42:40-0400
 *
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are
 * explicitly restricted from using the Licensed Webfonts(s).
 *
 * You may obtain a valid license at the URLs below.
 *
 * Webfont: Biotif-Bold by Degarism Studio
 * URL: https://www.myfonts.com/fonts/degarism-studio/biotif/bold/
 * Copyright: Copyright &#x00A9; 2016 by Deni Anggara. All rights reserved.
 * Licensed pageviews: 20,000
 *
 *
 * License: https://www.myfonts.com/viewlicense?type=web&buildid=3771282
 *
 * © 2019 MyFonts Inc
*/

-->
<link rel="stylesheet" type="text/css" href="libs/fonts/MyFontsWebfontsKit.css">
<link rel="stylesheet" href="https://use.typekit.net/aba8ecz.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- Analytics -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-151202895-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-151202895-1');

    gtag('set', {'user_id': 'USER_ID'}); // Set the user ID using signed-in user_id.
  </script>


  <!-- Pinterest -->
  <meta name="p:domain_verify" content="defdac0db8bc98b64145d03def30a79f"/>

  <!-- Fullscreen -->
  <script type="text/javascript">
  // mozfullscreenerror event handler
  function errorHandler() {
     alert('mozfullscreenerror');
  }
  document.documentElement.addEventListener('mozfullscreenerror', errorHandler, false);

  // toggle full screen
  function toggleFullScreen() {
    if (!document.fullscreenElement &&    // alternative standard method
        !document.mozFullScreenElement && !document.webkitFullscreenElement) {  // current working methods
      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.mozRequestFullScreen) {
        document.documentElement.mozRequestFullScreen();
      } else if (document.documentElement.webkitRequestFullscreen) {
        document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
      }
    } else {
      if (document.cancelFullScreen) {
        document.cancelFullScreen();
      } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
      } else if (document.webkitCancelFullScreen) {
        document.webkitCancelFullScreen();
      }
    }
  }

  // keydown event handler
  document.addEventListener('keydown', function(e) {
    if (e.keyCode == 13 || e.keyCode == 70) { // F or Enter key
      toggleFullScreen();
    }
  }, false);
  </script>
