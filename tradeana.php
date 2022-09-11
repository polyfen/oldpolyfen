<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Polyfen | Tradena Brand Identity Design</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'sections/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Tradena brand design by Polyfen"/>
    <meta property="og:url" content="https://polyfen.com/tradeana"/>
    <meta name="keywords" content="Brand, Brand Identity Design, Branding, Agency, Graphic Design, Logo, Creative, Strategy, Consultancy, Business Growth" />
    <meta name="description" property="og:description" content="[TBD]" />
    <meta property="og:image" content="[TBD]"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="fb:app_id" content="1799272553516195" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@WeArePolyfen" />
    <meta name="twitter:title" content="Polyfen" />
    <meta name="twitter:description" content="[TBD]" />
    <meta name="twitter:image" content="[TBD]" />
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <link rel="stylesheet" href="app/css/case-studies.css" type="text/css">
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <!-- BOOTSTRAP start-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP end-->
    <!-- SLICK start-->
    <link rel="stylesheet" type="text/css" href="libs/slick/slick/slick.css"/>
    <!--// Add the new slick-theme.css if you want the default styling //-->
    <link rel="stylesheet" type="text/css" href="libs/slick/slick/slick-theme.css"/>
    <!-- SLICK end-->
    <!-- PAGE-SPECIFIC SCRIPTS end -->


  </head>

  <body>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P25JFWC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- FORCE MAX-WIDTH 100% start -->
    <div class="main-wrapper">

      <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
      <!-- INCLUDE HEADER.PHP end -->

      <div id="slider-container">
        <div class="slider lazy">
          <div>
            <img data-lazy="imgs/case-studies/tradeana/01_tradeana_cover.jpg" width="100%" height="auto">
          </div>
          <div>
            <img data-lazy="imgs/case-studies/tradeana/02_tradeana_intro.jpg" width="100%" height="auto">
          </div>
          <div>
            <img data-lazy="imgs/case-studies/tradeana/03_tradeana_tone.jpg" width="100%" height="auto">
          </div>
          <div>
            <img data-lazy="imgs/case-studies/tradeana/04_tradeana_keywords.jpg" width="100%" height="auto">
          </div>
          <div>
            <img data-lazy="imgs/case-studies/tradeana/05_tradeana_creative-concept.jpg" width="100%" height="auto">
          </div>
          <div>
            <img data-lazy="imgs/case-studies/tradeana/06_tradeana_naming.jpg" width="100%" height="auto">
          </div>
          <div>
            <img data-lazy="imgs/case-studies/tradeana/07_tradeana_typography.jpg" width="100%" height="auto">
          </div>
          <div>
            <img data-lazy="imgs/case-studies/tradeana/08_tradeana_color.jpg" width="100%" height="auto">
          </div>
          <div>
            <img src="imgs/case-studies/tradeana/09_tradeana_early-drafts.jpg" width="100%" height="auto">
          </div>
          <div>
            <img src="imgs/case-studies/tradeana/10_tradeana_final-design.jpg" width="100%" height="auto">
          </div>
          <div>
            <img src="imgs/case-studies/tradeana/11_tradeana_web-design.jpg" width="100%" height="auto">
          </div>
        </div>
      </div>

      <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/call-to-action.php';?>
      <!-- INCLUDE FOOTER.PHP end -->

    </div>
    <!-- FORCE MAX-WIDTH 100% end -->

    <!-- INCLUDE FOOTER.PHP start -->
    <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="libs/slick/slick/slick.min.js"></script>

    <script type="text/javascript">
      $('.slider').slick({
        dots: true,
        infinite: false
      });
      $('.lazy').slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1
      });
    </script>

  </body>

</html>
