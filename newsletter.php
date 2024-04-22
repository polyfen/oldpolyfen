<!DOCTYPE html>
<html lang="en">

<head>
    <title>Get our Newsletter | Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'includes/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Get our to Newsletter">
    <meta property="og:url" content="https://polyfen.com/subscribe">
    <meta name="keywords" content="#">
    <meta name="description" property="og:description"
        content="#">
    <meta property="og:image" content="https://polyfen.com/imgs/meta/#.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="fb:app_id" content="1799272553516195">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="Polyfen">
    <meta name="twitter:creator" content="@ThePolyfenGroup">
    <meta name="twitter:title" content="Subscribe to Newsletter">
    <meta name="twitter:description"
        content="#">
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/#.png">
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->

</head>

<body class="newsletter landing-page dark-mode">
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
        <section class="subscribe-cover hidden-header" style="margin-bottom: 6rem;">
            <h1 class="caption align-center">Newsletter</h1>
            <h2 class="heading-1 align-center">Unlock Insights &amp;<br>Stay Ahead</h2>
            <?php include 'includes/mailchimp-form.php';?>
        </section>

        <section class="container hidden" style="margin-bottom:6rem;">
        <div class="column-to-row">
            <div class="one-half">
                <img src="imgs/email-illustration.webp" alt="" style="max-width:260px;margin:auto;">
            </div>
            <div class="one-half">
                <ul class="hanging-list arrow-bullets spaced-list">
                    <li id="newsletter-icon-1"><h3 class="heading-5">All killer, no filler</h3><br>Bite-sized, high-quality content.</li>
                    <li id="newsletter-icon-2"><h3 class="heading-5">Members-only benefits</h3><br>Insider knowledge and early access for subscribers.</li>
                    <li id="newsletter-icon-3"><h3 class="heading-5">Active community</h3><br>Engage with our community on <a href="https://www.linkedin.com/company/polyfen" target="_blank">LinkedIn</a>.</li>
                </ul>
            </div>
        </div>
        </section>

        <?php include 'includes/past-newsletters.php';?>   

        <?php include 'includes/newsletter-cta.php';?>
        

    </main>
    <!-- FORCE MAX-WIDTH 100% end -->

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'includes/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

</body>

</html>