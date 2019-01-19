<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Polyfen</title>


  <!-- INCLUDE HEAD.PHP start -->
    <?php include 'sections/head.php';?>
  <!-- INCLUDE HEAD.PHP end -->

  <!-- META Page-Specific -->
  <meta property="og:title" content="Polyfen"/>
  <meta property="og:url" content="http://polyfen.com"/>
  <meta name="keywords" content="Brand Identity Design, Brand ID, Branding, Brand, Graphic, Design, Logo" />
  <meta name="description" property="og:description" content="We are a small team of creatives from around the world connected by our passion to design engaging brand identities." />
  <meta property="og:image" content="http://polyfen.com/imgs/meta/polyfen-homepage-thumbnail.png"/>
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="fb:app_id" content="1799272553516195" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@WeArePolyfen" />
  <meta name="twitter:title" content="Polyfen" />
  <meta name="twitter:description" content="We are a small team of creatives from around the world connected by our passion to design engaging brand identities." />
  <meta name="twitter:image" content="http://polyfen.com/imgs/meta/polyfen-homepage-thumbnail.png" />
  <meta name="robots" content="index, follow">

  <!-- PAGE-SPECIFIC CSS -->
  <link rel="stylesheet" href="app/css/general.css" type="text/css">

  <!-- PAGE-SPECIFIC SCRIPTS -->
    <script type="text/javascript">
      $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll > 0) {
          $("#pearl-01").removeClass("pearl-01-INACTIVE").addClass("pearl-01-ACTIVE");
          $("#pearl-02").removeClass("pearl-02-INACTIVE").addClass("pearl-02-ACTIVE");
          $("#pearl-03").removeClass("pearl-03-INACTIVE").addClass("pearl-03-ACTIVE");
          $("#pearl-04").removeClass("pearl-04-INACTIVE").addClass("pearl-04-ACTIVE");
          $("#pearl-05").removeClass("pearl-05-INACTIVE").addClass("pearl-05-ACTIVE");
          $("#pearl-06").removeClass("pearl-06-INACTIVE").addClass("pearl-06-ACTIVE");
      }
      if (scroll <= 0) {
          $("#pearl-01").removeClass("pearl-01-ACTIVE").addClass("pearl-01-INACTIVE");
          $("#pearl-02").removeClass("pearl-02-ACTIVE").addClass("pearl-02-INACTIVE");
          $("#pearl-03").removeClass("pearl-03-ACTIVE").addClass("pearl-03-INACTIVE");
          $("#pearl-04").removeClass("pearl-04-ACTIVE").addClass("pearl-04-INACTIVE");
          $("#pearl-05").removeClass("pearl-05-ACTIVE").addClass("pearl-05-INACTIVE");
          $("#pearl-06").removeClass("pearl-06-ACTIVE").addClass("pearl-06-INACTIVE");
      }
      if (scroll >= 20) {
          $("#polyfen-cover").addClass("polyfen-cover-ACTIVE");
      }
      if (scroll >= 20) {
          $("polyfen-cover").removeClass("polyfen-cover-INACTIVE");
      }
      if (scroll >= 50) {
          $("#polyfen-thumbnail").addClass("polyfen-thumbnail-ACTIVE");
      }
      if (scroll >= 50) {
          $("polyfen-thumbnail").removeClass("polyfen-thumbnail-INACTIVE");
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
  </head>

  <body id="home">

    <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <section id="cover">
        <h1>A creative agency devoted to brand identity design.</h1>
        <div class="curve">
        </div>
        <div class="background">
          <div id="pearl-04" class="pearl pearl-04-INACTIVE rotate-slower">
          </div>
          <div id="pearl-05" class="pearl pearl-05-INACTIVE rotate">
          </div>
          <div id="pearl-06" class="pearl pearl-06-INACTIVE rotate">
          </div>
          <div id="pearl-03" class="pearl pearl-03-INACTIVE rotate">
          </div>
          <div id="pearl-02" class="pearl pearl-02-INACTIVE rotate-slower">
          </div>
          <div id="pearl-01" class="pearl pearl-01-INACTIVE rotate-slower">
          </div>
        </div>
    </section>

    <div id="content-wrapper">

      <section id="case-studies">
            <h2>Case Studies</h2>

            <section class="case-project">
              <a href="case-study.php"><div id="polyfen-cover" class="project-cover polyfen-cover-INACTIVE"  onmouseover="document.getElementById('developing-our-own-brand-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('developing-our-own-brand-button').className='secondary-button';"></div></a>
              <a href="case-study.php"><div id="polyfen-thumbnail" class="project-thumbnail polyfen-thumbnail-INACTIVE d-none d-sm-none d-md-none d-lg-none d-xl-block" onmouseover="document.getElementById('developing-our-own-brand-button').className='secondary-button secondary-button-hover';" onmouseout="document.getElementById('developing-our-own-brand-button').className='secondary-button';">
              </div></a>
              <div class="project-description">
                <h3>Developing our own brand</h3>
                <p><strong>Polyfen</strong> stands for one core concept, the midpoint between business and creativity. <span class="d-none d-sm-none d-md-inline d-lg-inline d-xl-inline">A brand with a clean and professional look, yet with a playful and whimsical flair.</span></p>
                <a class="secondary-button" href="case-study.php" id="developing-our-own-brand-button">View project ›</a>
              </div>
            </section>

      </section>

      <div style="clear:both;">
      </div>

      <section id="services">
            <h2>Our services</h2>

            <div id="service-cards-wrapper">


              <div style="clear:both;" class="d-none d-xl-block"></div>

              <div class="horizontal-separator">
              </div>

              <div style="clear:both;" class="d-none d-xl-block"></div>

              <div class="service-card" id="brand-research-card">
                <div id="brand-research" class="service-heading">
                  <img src="imgs/services/brand-research-icon.svg" class="d-xl-none">
                  <div class="icon-gradient d-none d-xl-block">
                    <img src="imgs/services/brand-research-icon.svg">
                  </div>
                  <h4>Brand Research</h4>
                </div>
                <ul>
                  <li>Business analysis</li>
                  <li>Competitive analysis</li>
                  <li>Audience analysis</li>
                  <li>Research conclusion</li>
                </ul>
              </div>

              <div class="separator">
              </div>

              <div class="service-card" id="brand-strategy-card">
                <div id="brand-strategy" class="service-heading">
                  <img src="imgs/services/brand-strategy-icon.svg" class="d-xl-none">
                  <div class="icon-gradient d-none d-xl-block">
                    <img src="imgs/services/brand-strategy-icon.svg">
                  </div>
                  <h4>Brand Strategy</h4>
                </div>
                <ul>
                  <li>Keywords</li>
                  <li>Creative concept</li>
                  <li>Moodboard</li>
                  <li>Voice</li>
                  <li>Naming</li>
                  <li>Key messages</li>
                  <li>Slogan</li>
                </ul>
              </div>

              <div class="separator">
              </div>

              <div class="service-card" id="visual-identity-card">
                <div id="visual-identity" class="service-heading">
                  <img src="imgs/services/visual-identity-icon.svg" class="d-xl-none">
                  <div class="icon-gradient d-none d-xl-block">
                    <img src="imgs/services/visual-identity-icon.svg">
                  </div>
                  <h4>Visual Identity</h4>
                </div>
                <ul>
                  <li>Visual exploration</li>
                  <li>Logo system</li>
                  <li>Typeface selection</li>
                  <li>Colour scheme</li>
                  <li>Visual language</li>
                </ul>
              </div>

              <div style="clear:both;" class="d-none d-xl-block"></div>

              <div class="horizontal-separator">
              </div>

              <div style="clear:both;" class="d-none d-xl-block"></div>

              <div class="service-card" id="brand-guidelines-card">
                <div id="brand-guidelines" class="service-heading">
                  <img src="imgs/services/brand-guidelines-icon.svg" class="d-xl-none">
                  <div class="icon-gradient d-none d-xl-block">
                    <img src="imgs/services/brand-guidelines-icon.svg">
                  </div>
                  <h4>Brand Guidelines</h4>
                </div>
                <p>
                  A summary of all the strategic parameters and visual assets that constitute the brand identity.
                </p>
              </div>

              <div class="separator">
              </div>

              <div class="service-card" id="brand-touchpoints-card">
                <div id="brand-touchpoints" class="service-heading">
                  <img src="imgs/services/brand-touchpoints-icon.svg" class="d-xl-none">
                  <div class="icon-gradient d-none d-xl-block">
                    <img src="imgs/services/brand-touchpoints-icon.svg">
                  </div>
                  <h4>Brand Touchpoints</h4>
                </div>
                <ul>
                  <li>Email signature</li>
                  <li>Social media profiles</li>
                  <li>Business cards</li>
                  <li>Letterhead</li>
                  <li>Invoice</li>
                  <li>Presentation slides</li>
                </ul>
              </div>

              <div class="separator">
              </div>

              <div class="service-card" id="web-development-card">
                <div id="web-development" class="service-heading">
                  <img src="imgs/services/web-development-icon.svg" class="d-xl-none">
                  <div class="icon-gradient d-none d-xl-block">
                    <img src="imgs/services/web-development-icon.svg">
                  </div>
                  <h4>Web Development</h4>
                </div>
                <ul>
                  <li>UX research</li>
                  <li>Content creation</li>
                  <li>UI design</li>
                  <li>Prototyping</li>
                  <li>Programming</li>
                  <li>Deployment</li>
                </ul>
              </div>
            </div>

            <div style="clear:both;" class="d-none d-xl-block"></div>

            <div class="horizontal-separator">
            </div>

            <div style="clear:both;" class="d-none d-xl-block"></div>

            <div style="clear:both;">
            </div>

            <div class="card-navigation d-block d-sm-block d-md-none d-lg-none d-xl-none">
              <div class="navigation-bullet active-navigation-bullet"></div>
              <div class="navigation-bullet inactive-navigation-bullet"></div>
              <div class="navigation-bullet inactive-navigation-bullet"></div>
              <div class="navigation-bullet inactive-navigation-bullet"></div>
              <div class="navigation-bullet inactive-navigation-bullet"></div>
              <div class="navigation-bullet inactive-navigation-bullet"></div>
            </div>

            <div class="desktop-card-navigation-wrapper d-none d-sm-none d-md-block d-lg-block d-xl-block">
              <div class="desktop-card-navigation-button">
                <i class="fas fa-angle-right"></i>
              </div>
            </div>

      </section>

      <div style="clear:both;">
      </div>

      <section id="about">
            <h2 class="d-block d-sm-none d-md-none d-lg-none d-xl-none">We mean business</h2>
            <h2 class="d-none d-sm-block d-md-block d-lg-block d-xl-block">The link between business &amp; creativity</h2>
            <img src="imgs/about/illustration.svg">
            <p>We are a small team of people distributed around the world combining our talents in design, marketing, and tech under the flag name of <strong>Polyfen</strong>.</p>
            <p class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Our services are a solution for new and emerging businesses who need guidance in translating their business strategy into an engaging brand identity.</p>
      </section>

    </div>

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/call-to-action.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

  </body>
</html>
