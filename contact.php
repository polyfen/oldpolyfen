<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Contact | Polyfen" />
    <meta property="og:url" content="https://polyfen.com" />
    <meta name="keywords"
        content="Creative agency, Software development, Get in touch, Contact form, Collaboration, Customer engagement, Sales, Branding, Marketing, Design, Development, Consulting, Staff augmentation, Digital experiences, Remote business, Flexible contracts, R&D innovation, Expert solutions" />
    <meta name="description" property="og:description"
        content="Empower your brand with our end-to-end services. Get in touch for exceptional results." />
    <meta property="og:image" content="https://polyfen.com/imgs/meta/contact-meta.png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="fb:app_id" content="1799272553516195" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="Polyfen" />
    <meta name="twitter:creator" content="@PolyfenAgency">
    <meta name="twitter:title" content="Contact" />
    <meta name="twitter:description"
        content="Empower your brand with our end-to-end services. Get in touch for exceptional results." />
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/contact-meta.png" />
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->

    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->

    <!-- contact form script start -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body id="contact" class="dark-mode">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
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
            <h1 class="hidden caption align-center">Contact</h1>
            <h2 class="hidden heading-1 align-center">Let's start a Conversation</h2>
            <h3 class="hidden heading-2 align-center" id="message">Send a Message</h3>
            <div class="err-msj">Verify you are human</div>
            <form id="contact-form" method="POST" class="hidden">

                <label for="email">Email</label>
                <input type="email" name="email" required>

                <label for="name">Name</label>
                <input type="text" name="name" required>

                <label for="message">Message</label>
                <textarea name="message" required></textarea>
                <!-- place captcha here -->
                <div class="g-recaptcha" data-sitekey="6Lej_NMnAAAAAK4fPl76kHS_8o21z1YER7Y4LtR7"
                    data-callback="onRecaptchaSuccess" data-expired-callback="onRecaptchaResponseExpiry"
                    data-error-callback="onRecaptchaError">
                </div>
                <br>
                <div class="opal opal-rainbow-soft">
                    <div class="opal-solid">
                        <div class="opal-mask"><button id="nostyle" type="submit">Send Message</button></div>
                    </div>
                </div>
            </form>
        </section>
        <hr>
        <section id="call">
            <h3 class="hidden heading-2 align-center">Schedule a Call</h3>
            <!-- Calendly inline widget begin -->
            <div class="hidden calendly-inline-widget"
                data-url="https://calendly.com/borishr/discovery?hide_event_type_details=1&hide_gdpr_banner=1&background_color=ffffff&text_color=070924&primary_color=7537f8"
                style="min-width:320px;height:700px;"></div>
            <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
            <!-- Calendly inline widget end -->
        </section>
        <hr>
        <section class="hidden container" id="details">
            <h3 class="heading-2 align-center">hi@polyfen.com</h3>
            <h3 class="heading-2 align-center">🇺🇸 +1 415 800 4115</h3>
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
        if (recaptchaResponse === '') onRecaptchaError()

        const data = contactForm.serializeArray()

        $.ajax({
            method: "POST",
            url: "submit.php",
            dataType: "json",
            data: data,
            success: function(response) {
                window.location.href = '/thank-you.php';
                // console.log(response.message);

                // Estas lineas son por si no quieren que redireccione a un thank you page
                // contactForm.trigger('reset');
                // grecaptcha.reset();
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseJSON.message);
            }
        })
    })
    </script>

</body>

</html>