<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book a Discovery Call | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Book a Discovery Call with us">
    <meta property="og:url" content="https://polyfen.com/discovery-call">
    <meta name="keywords" content="">
    <meta name="description" property="og:description"
        content="Tell me about your project. Hear what we can do for you. No strings attached.">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/discovery-call.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="fb:app_id" content="1799272553516195">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Polyfen">
    <meta name="twitter:creator" content="@PolyfenGroup">
    <meta name="twitter:title" content="Book a Discovery Call with us">
    <meta name="twitter:description"
        content="Tell me about your project. Hear what we can do for you. No strings attached.">
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/discovery-call.png">
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->

</head>

<body class="discovery-call landing-page dark-mode">
    <!-- ya hay un estilo del founder-social  que llama a este ID -->

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- INCLUDE HEADER.PHP start -->
    <?php include 'includes/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <!-- Discovery Call - Landing page start -->
    <main class="discovery-main">
        <h1 class="heading-1 align-center hidden-header">Book a Discovery Call</h1>


        <section class="boris-container container">
            <div class="boris-portrait">
                <img id="boris-portrait" src="imgs/about/boris-hrncic.webp" alt="Boris Hrnčić" loading="lazy" class="portrait">
            </div>
            <div class="boris-bio">
                <h2 class="heading-4">Boris Hrnčić</h2>
                <h3 class="caption">Founder & CEO</h3>
                <p>
                    Tell us about your project.<br>
                    Learn what we can do for you.<br>
                    No strings attached.
                </p>
                <div class="founder-social">
                    <a class="boris-in-link" href="https://www.linkedin.com/in/borishr/" target="_blank"><img
                            src="/imgs/icons/linkedin-in.svg" height="25" alt=""><small>LinkedIn</small></a>
                    <a class="boris-hr-link" href="https://boris.hr/" target="_blank" rel="follow"><img
                            src="/imgs/icons/globe-white.svg" height="25" alt=""><small>boris.hr</small></a>
                </div>
            </div>
        </section>

        <section aria-label="Calendly" id="calendly">
            <!-- INCLUDE CALENDLY.PHP start -->
            <?php include 'includes/calendly.php';?>
            <!-- INCLUDE CALENDLY.PHP end -->
        </section>

        <hr>

        <?php include 'includes/testimonial.php';?>

        <?php include 'includes/call-to-action.php';?>

    </main>
    <!-- FORCE MAX-WIDTH 100% end -->

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

</body>

</html>