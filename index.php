<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Polyfen</title>


    <!-- INCLUDE HEAD.PHP start -->
    <?php include 'sections/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- PAGE-SPECIFIC META start -->
    <meta property="og:title" content="Polyfen"/>
    <meta property="og:url" content="https://polyfen.com"/>
    <meta name="keywords" content="Brand, Brand Identity Design, Branding, Agency, Graphic Design, Logo, Creative, Strategy, Consultancy, Business Growth" />
    <meta name="description" property="og:description" content="We are a small team of creatives from around the world connected by our passion to design engaging Brand Identities and help businesses grow." />
    <meta property="og:image" content="https://polyfen.com/imgs/meta/polyfen-homepage-thumbnail.png"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="fb:app_id" content="1799272553516195" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@WeArePolyfen" />
    <meta name="twitter:title" content="Polyfen" />
    <meta name="twitter:description" content="We are a small team of creatives from around the world connected by our passion to design engaging brand identities." />
    <meta name="twitter:image" content="https://polyfen.com/imgs/meta/polyfen-homepage-thumbnail.png" />
    <meta name="robots" content="index, follow">
    <!-- PAGE-SPECIFIC META end -->

    <!-- PAGE-SPECIFIC CSS start -->
    <link rel="stylesheet" href="app/css/home.css" type="text/css">
    <!-- PAGE-SPECIFIC CSS end -->

    <!-- PAGE-SPECIFIC SCRIPTS start -->
    <script type="text/javascript">
      $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll > 650) {
          $("#bike-in-mex-thumbnail").removeClass("bike-in-mex-thumbnail-INACTIVE").addClass("bike-in-mex-thumbnail-ACTIVE");
      }
      if (scroll <= 650) {
          $("#bike-in-mex-thumbnail").removeClass("bike-in-mex-thumbnail-ACTIVE").addClass("bike-in-mex-thumbnail-INACTIVE");
      }
      });
    </script>
    <script type="text/javascript">
      $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll > 90) {
          $("#polyfen-thumbnail").removeClass("polyfen-thumbnail-INACTIVE").addClass("polyfen-thumbnail-ACTIVE");
      }
      if (scroll <= 90) {
          $("#polyfen-thumbnail").removeClass("polyfen-thumbnail-ACTIVE").addClass("polyfen-thumbnail-INACTIVE");
      }
      });
    </script>
    <script type="text/javascript">
    $(window).scroll(function () {
      var st = $(window).scrollTop();
      var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();
      if (scrollBottom <= 200) {
            $("#pearl-07").removeClass("pearl-07-INACTIVE").addClass("pearl-07-ACTIVE");
            $("#pearl-08").removeClass("pearl-08-INACTIVE").addClass("pearl-08-ACTIVE");
            $("#pearl-09").removeClass("pearl-09-INACTIVE").addClass("pearl-09-ACTIVE");
            $("#pearl-10").removeClass("pearl-10-INACTIVE").addClass("pearl-10-ACTIVE");
        }
      if (scrollBottom > 200) {
            $("#pearl-07").addClass("pearl-07-INACTIVE").removeClass("pearl-07-ACTIVE");
            $("#pearl-08").addClass("pearl-08-INACTIVE").removeClass("pearl-08-ACTIVE");
            $("#pearl-09").addClass("pearl-09-INACTIVE").removeClass("pearl-09-ACTIVE");
            $("#pearl-10").addClass("pearl-10-INACTIVE").removeClass("pearl-10-ACTIVE");
        }
      });
    </script>
    <!-- PAGE-SPECIFIC SCRIPTS end -->
  </head>

  <body id="home">

    <!-- FORCE MAX-WIDTH 100% start -->
    <!-- this is for avoiding horizontal scroll due to some images having negative (ie. "-215px") margin-left or margin-right passed the width of the screen -->
    <div class="main-wrapper">

      <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
      <!-- INCLUDE HEADER.PHP end -->

      <!-- COVER start -->
      <section id="cover">
          <h1>A creative agency devoted to branding</h1>
          <div class="background">
            <div id="pearl-11" class="pearl rotate-slower">
            </div>
            <div id="pearl-12" class="pearl rotate">
            </div>
            <div id="pearl-13" class="pearl rotate-slower">
            </div>
          </div>
      </section>
      <!-- COVER end -->

      <!-- CONTENT WRAPPER start -->
      <section class="container-fluid content-wrapper">

        <!-- FEATURED PROJECTS start -->
        <div id="case-studies">
              <h2>Featured projects</h2>

              <!-- DEVELOPING OUR OWN BRAND start -->
              <div class="case-project-wrapper" style="margin-top:40px;">

                <div class="case-project row d-block d-sm-none d-md-none d-lg-none d-xl-none">
                  <a href="case-study.php"><div id="polyfen-cover" class="project-cover polyfen-cover-ACTIVE"  onmouseover="document.getElementById('developing-our-own-brand-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('developing-our-own-brand-button').className='secondary-button';"></div></a>
                </div>

                <div class="case-project row">

                  <div class="col d-none d-sm-block d-md-block d-lg-block d-xl-block">
                    <a href="case-study.php"><div id="polyfen-cover" class="project-cover polyfen-cover-ACTIVE"  onmouseover="document.getElementById('developing-our-own-brand-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('developing-our-own-brand-button').className='secondary-button';"></div></a>
                    <a href="case-study.php"><div id="polyfen-thumbnail" class="project-thumbnail polyfen-thumbnail-INACTIVE d-none d-sm-none d-md-none d-lg-none d-xl-block" onmouseover="document.getElementById('developing-our-own-brand-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('developing-our-own-brand-button').className='secondary-button';">
                    </div></a>
                  </div>

                  <div class="col">
                    <div class="project-description">
                    <h3>Your ForEx Risk Manager</h3>
                    <p><strong>Tradeana</strong> stands for one core concept, the midpoint between business and creativity. <span class="d-none d-sm-none d-md-inline d-lg-inline d-xl-inline">A brand with a clean and professional look, yet with a playful and whimsical flair.</span></p>
                    <a class="secondary-button" href="case-study.php" id="developing-our-own-brand-button">View project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>

                </div>
              </div>
            </div>
            <!-- OUR CASE STUDY end -->

            <!-- BIKE IN MEX start -->
            <div class="case-project-wrapper" style="margin-bottom: 0;">

              <div class="case-project row d-block d-sm-none d-md-none d-lg-none d-xl-none">
                <a href="https://www.instagram.com/p/Bzrpk5flCHr/" target="_blank"><div id="bike-in-mex-cover" class="project-cover bike-in-mex-ACTIVE"  onmouseover="document.getElementById('bike-in-mex-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('bike-in-mex-button').className='secondary-button';"></div></a>
              </div>

              <div class="case-project row">
                <div class="col d-none d-sm-block d-md-block d-lg-block d-xl-block">
                  <a href="https://www.instagram.com/p/Bzrpk5flCHr/" target="_blank"><div id="bike-in-mex-cover" class="project-cover bike-in-mex-cover-ACTIVE"  onmouseover="document.getElementById('bike-in-mex-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('bike-in-mex-button').className='secondary-button';"></div></a>
                  <a href="https://www.instagram.com/p/Bzrpk5flCHr/" target="_blank"><div id="bike-in-mex-thumbnail" class="project-thumbnail bike-in-mex-thumbnail-INACTIVE d-none d-sm-none d-md-none d-lg-none d-xl-block" onmouseover="document.getElementById('bike-in-mex-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('bike-in-mex-button').className='secondary-button';">
                  </div></a>
                </div>

                <div class="col">
                  <div class="project-description">
                  <h3>Bike in Mex</h3>
                  <p>A bicycle rental shop based in Tulum, Mexico. We designed a minimalist, geometric illustration inspired by ancient aztec and mayan symbols<span class="d-none d-sm-none d-md-inline d-lg-inline d-xl-inline"> set on the vibrant colors of Mexico’s flag</span>.</p>
                  <a class="secondary-button" href="https://www.instagram.com/p/Bzrpk5flCHr/" target="_blank" id="bike-in-mex-button">View project <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>

              </div>
            </div>
          </div>
          <!-- BIKE IN MEX STUDY end -->

        </div>
        <!-- FEATURED PROJECTS end -->

        <div style="clear:both;">
        </div>

        <div class="row">
          <div class="horizontal-separator"></div>
        </div>


        <!-- ABOUT start -->
        <div id="about" class="row">
          <div style="max-width: 540px;">
            <h2>The link between business &amp; creativity</h2>
            <p>We are a small team of creatives from around the world based in Argentina combining our talents in design, marketing, and tech under the flag name of <strong>Polyfen</strong>.</p>
          </div>
          </div>
        </div>
        <!-- ABOUT end -->

        <div style="clear:both;">
        </div>

        <div class="row">
          <div class="horizontal-separator"></div>
        </div>

      </section>
      <!-- CONTENT WRAPPER end -->

      <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/call-to-action.php';?>
      <!-- INCLUDE FOOTER.PHP end -->

      <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/footer.php';?>
      <!-- INCLUDE FOOTER.PHP end -->

    </div>
    <!-- FORCE MAX-WIDTH 100% end -->

  </body>

</html>
