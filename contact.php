<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Contact | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
      <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Contact | Polyfen"/>
    <meta property="og:url" content="https://polyfen.com"/>
    <meta name="keywords" content="Brand, Brand Identity Design, Branding, Agency, Graphic Design, Logo, Creative, Strategy, Consultancy, Business Growth, Contact, Pricing, Message, Email, Call" />
    <meta name="description" property="og:description" content="[TBD]" />
    <meta property="og:image" content="https://polyfen.com/imgs/meta/polyfen-meta.png"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="fb:app_id" content="1799272553516195" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Polyfen" />
    <meta name="twitter:creator" content="@PolyfenAgency">
    <meta name="twitter:title" content="Contact" />
    <meta name="twitter:description" content="[TBD]" />
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/polyfen-meta.png" />
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <link rel="stylesheet" href="app/css/home.css" type="text/css">
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->

    <!-- contact form script start -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>

  <body id="contact" class="dark-mode">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- INCLUDE HELLO-BAR.PHP start -->
    <?php include 'includes/hello-bar.php';?>
    <!-- INCLUDE HELLO-BAR.PHP end -->

    <!-- INCLUDE HEADER.PHP start -->
    <?php include 'includes/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <!-- CONTACT start -->
    <main id="contact">

    <section id="contact-intro" class="container">
      <h1 class="caption align-center">Contact</h1>
      <h2 class="heading-1 align-center">Let's start a Conversation</h2>
      <div class="err-msj" style="text-align: center; color: red; margin: 10px 0; display: none">Soy el mensaje de error</div>
      <form id="contact-form" method="POST">
      
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="esa es la form que anda" required>
        
        <label for="name">Name</label>
        <input type="text" name="name" required>

        <label for="message">Message</label>
        <textarea name="message" required></textarea>
        <!-- place captcha here -->
        <!-- <div class="g-recaptcha" data-sitekey="6Lej_NMnAAAAAK4fPl76kHS_8o21z1YER7Y4LtR7"></div> -->
        <div
          class="g-recaptcha"
          data-sitekey="6Lej_NMnAAAAAK4fPl76kHS_8o21z1YER7Y4LtR7"
          data-callback="onRecaptchaSuccess"
          data-expired-callback="onRecaptchaResponseExpiry"
          data-error-callback="onRecaptchaError"
        >
        </div>
        <br>
        <button type="submit">Send</button>
      </form>
    </section>
    </main>
    <!-- process form on submit-->
    <?php
      /* if(isset($_POST['name'])){
        require "process.php";  
      } */
    ?>
    <!-- CONTACT end -->


    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- contact form script start -->
    <script>
      const contactForm = $('#contact-form')
      const errMsj = $('.err-msj')

      function onRecaptchaSuccess() {
        //aca va la clase de css que quieras añadir
        errMsj.css('display', 'none')
      }

      function onRecaptchaError() {
        //aca va la clase de css que quieras añadir
        errMsj.css('display', 'block')
      }

      function onRecaptchaResponseExpiry() {
        onRecaptchaError();
      }

      contactForm.on('submit', (e) => {
        e.preventDefault()
        const recaptchaResponse = $('#g-recaptcha-response').val()
        if(recaptchaResponse === '') onRecaptchaError()

        $.post('submit.php', {
          'response': recaptchaResponse
          }, function(response){
            if(response === 'success') {
                // window.location.href = '/';
                console.log('ok');
                // Estas lineas son por si no quieren que redireccione a un thank you page
                // contactForm.trigger('reset');
                // grecaptcha.reset();
            } else {
                console.log(response);
            }
        })
      })
    </script>

  </body>

</html>
