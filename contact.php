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
        <form id="contact-form" onsubmit="sendEmail(); reset(); return false;">
          <label for="name">Name</label>
          <input id="name" name="name" type="text" required>
          <label for="email">Email</label>
          <input id="email" name="email" type="email" required>
          <label for="message">Message</label>
          <textarea id="message" name="message"></textarea>
          <input type="submit" class="button">
        </form>
      </section>

    </main>
    <!-- CONTACT end -->


    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- contact form script start -->
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
      function sendEmail(){
        Email.send({
          Host : "smtp.gmail.com",
          Username : "leanbilokapic@gmail.com",
          Password : "XXII.funko",
          To : 'leandrobilokapic@gmail.com',
          From : document.getElementById("email").value,
          Subject : "New Contact Form desde Polyfen.com",
          Body : "Name: " + document.getElementById("name").value
          + "<br> Email: " + document.getElementById("email").value
          + "<br> Message: " + document.getElementById("message").value
        }).then(
          message => alert("Gracias, vuelvas prontos")
        );
      }
  </body>

</html>
