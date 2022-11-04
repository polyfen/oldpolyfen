<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Polyfen | Get a free Brand Audit</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'sections/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Get a free Brand Audit for your Business"/>
    <meta property="og:url" content="https://polyfen.com/brand-audits"/>
    <meta name="keywords" content="Free, Brand, Audit, Report, Consultancy, Consultant, Branding, Marketing, Business, Digital, Analysis, Research, Strategy, Logo, Visual Identity, Website, Web, UX, Experience, CX, Growth, Scale, Start-up" />
    <meta name="description" property="og:description" content="Apply for a full custom report listing how your business can improve its brand and website." />
    <meta property="og:image" content="https://polyfen.com/imgs/meta/brand-audits.png"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="fb:app_id" content="1799272553516195" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@PolyfenAgency" />
    <meta name="twitter:title" content="Get a free Brand Audit for your Business" />
    <meta name="twitter:description" content="Apply for a full custom report listing how your business can improve its brand and website." />
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/brand-audits.png" />
    <meta name="robots" content="noindex, nofollow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <link rel="stylesheet" href="app/css/forms.css" type="text/css">
    <link rel="stylesheet" href="app/css/landing-pages.css" type="text/css">
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
    <!-- https://www.npmjs.com/package/canvas-confetti -->
    <!-- PAGE-SPECIFIC SCRIPTS end -->


  </head>

  <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- FORCE MAX-WIDTH 100% start -->
    <div class="main-wrapper">

      <script>
        confetti();

        var duration = 1 * 1000;
        var animationEnd = Date.now() + duration;
        var skew = 1;

        function randomInRange(min, max) {
          return Math.random() * (max - min) + min;
        }

        (function frame() {
          var timeLeft = animationEnd - Date.now();
          var ticks = Math.max(200, 500 * (timeLeft / duration));
          skew = Math.max(0.8, skew - 0.001);

          confetti({
            particleCount: 1,
            startVelocity: 0,
            ticks: ticks,
            origin: {
              x: Math.random(),
              // since particles fall down, skew start toward the top
              y: (Math.random() * skew) - 0.2
            },
            colors: ['#ffffff'],
            shapes: ['circle'],
            gravity: randomInRange(0.4, 0.6),
            scalar: randomInRange(0.4, 1),
            drift: randomInRange(-0.4, 0.4)
          });

          if (timeLeft > 0) {
            requestAnimationFrame(frame);
          }
        }());
      </script>

      <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
      <!-- INCLUDE HEADER.PHP end -->

      <div class="content-container">
      
        <h2 style="text-align:center;line-height:1.25;">Success!<br/>👏👏👏</h2>

        <p style="text-align:center;max-width:390px;margin: auto;">We'll be emailing you if your application is selected.<br/>Best of luck! 🍀</p>

      <div style="clear:both;">
      </div>
      <div class="row">
        <div class="horizontal-separator"></div>
      </div>


      <div id="boris-hrncic-container">

        <div id="boris-hrncic">
          <div class="portrait">
            <img id="boris-portrait" src="imgs/about/boris-hrncic.webp" alt="Boris Hrnčić" loading="lazy" class="portrait">
          </div>
          <div class="bio">
            <h4>In the meantime,<br/>feel free to reach out!</h4>
            <p>You can send us an email with additional information to <a href="mailto:brand-audits@polyfen.com">brand-audits@polyfen.com</a> or schedule an initial call:</p>
            <button onclick="window.open('https://calendly.com/thepolygroup-boris/brand-audits','_blank')" class="button secondary-button">Schedule a Call</button>
          </div>
        </div>
      
      </div>

      </div>

    </div>
    <!-- FORCE MAX-WIDTH 100% end -->

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->


  </body>

</html>
