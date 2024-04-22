<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Contact | Polyfen">
    <meta property="og:url" content="https://polyfen.com">
    <meta name="keywords"
        content="Creative agency, Software development, Get in touch, Contact form, Collaboration, Customer engagement, Sales, Branding, Marketing, Design, Development, Consulting, Staff augmentation, Digital experiences, Remote business, Flexible contracts, R&D innovation, Expert solutions">
    <meta name="description" property="og:description"
        content="Empower your brand with our end-to-end services. Get in touch for exceptional results.">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/contact-meta.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="fb:app_id" content="1799272553516195">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Polyfen">
    <meta name="twitter:creator" content="@PolyfenAgency">
    <meta name="twitter:title" content="Contact">
    <meta name="twitter:description"
        content="Empower your brand with our end-to-end services. Get in touch for exceptional results.">
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/contact-meta.png">
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->

    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->

    <!-- contact form script start -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="contact dark-mode">

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

    <!-- CONTACT page start -->
    <main class="contact-main">
        <section class="message-call container-1080 hidden-header" aria-label="Contact">
            <section class="send-a-message">
                <h2 class="heading-2 align-center">Send a Message</h2>
                <div class="err-msj">Verify you are human</div>
                <form id="contact-form" method="POST" class="">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>

                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>

                    <label for="message">Message</label>
                    <textarea name="message" id="message" required></textarea>
                    <!-- place captcha here -->
                    <div class="g-recaptcha" data-sitekey="6Lej_NMnAAAAAK4fPl76kHS_8o21z1YER7Y4LtR7"
                        data-callback="onRecaptchaSuccess" data-expired-callback="onRecaptchaResponseExpiry"
                        data-error-callback="onRecaptchaError">
                    </div>
                    <br>
                    <button id="nostyle" type="submit" class="secondary-button">Send Message</button>
                </form>
            </section>
            <hr class="vertical-hr">
            <section>
                <h2 class="heading-2 align-center">Schedule a Call</h2>
                <!-- INCLUDE CALENDLY.PHP start -->
                <?php include 'includes/calendly.php';?>
                <!-- INCLUDE CALENDLY.PHP end -->
            </section>
        </section>
        <hr>
        <section class="email-phone container hidden">
            <h3 class="heading-2 align-center">hi@polyfen.com</h3>
            <h3 class="heading-2 align-center"><img src="/imgs/flags/us.svg" class="contact-flag" alt=""> +1 415 610 8439</h3>
        </section>
    </main>
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