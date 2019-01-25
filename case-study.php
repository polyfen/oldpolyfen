<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Polyfen | Developing our own brand</title>


    <!-- INCLUDE HEAD.PHP start -->
      <?php include 'sections/head.php';?>
    <!-- INCLUDE HEAD.PHP end -->

    <!-- META Page-Specific -->
    <meta property="og:title" content="Polyfen | Developing our own brand"/>
    <meta property="og:url" content="http://polyfen.com/case-study"/>
    <meta name="keywords" content="Case Study, Process, Brand Identity Design, Brand ID, Branding, Brand, Graphic, Design, Logo" />
    <meta name="description" property="og:description" content="A glimpse of the process behind the development of our brand identity." />
    <meta property="og:image" content="http://polyfen.com/imgs/meta/case-study-thumbnail.png"/>
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="fb:app_id" content="1799272553516195" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@WeArePolyfen" />
    <meta name="twitter:title" content="Polyfen" />
    <meta name="twitter:description" content="A glimpse of the process behind the development of our brand identity." />
    <meta name="twitter:image" content="http://polyfen.com/imgs/meta/case-study-thumbnail.png" />
    <meta name="robots" content="index, follow">

    <!-- PAGE-SPECIFIC CSS -->
    <link rel="stylesheet" href="app/css/case-studies.css" type="text/css">

    <!-- PAGE-SPECIFIC SCRIPTS -->
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

    <script type="text/javascript">
	$(document).ready(function(){
      $("#item1").click(function(){
		  $("#overview > div.card-navigation.carousel-indicators > div.navigation-bullet.active-navigation-bullet").removeClass('active-navigation-bullet').addClass('inactive-navigation-bullet')
		  $("#overview > div.card-navigation.carousel-indicators > #item1").addClass('active-navigation-bullet').removeClass('inactive-navigation-bullet');
      });
      $("#item2").click(function(){
		  $("#overview > div.card-navigation.carousel-indicators > div.navigation-bullet.active-navigation-bullet").removeClass('active-navigation-bullet').addClass('inactive-navigation-bullet')
          $("#overview > div.card-navigation.carousel-indicators > #item2").addClass('active-navigation-bullet').removeClass('inactive-navigation-bullet');
      });
      $("#item3").click(function(){
		  $("#overview > div.card-navigation.carousel-indicators > div.navigation-bullet.active-navigation-bullet").removeClass('active-navigation-bullet').addClass('inactive-navigation-bullet')
          $("#overview > div.card-navigation.carousel-indicators > #item3").addClass('active-navigation-bullet').removeClass('inactive-navigation-bullet');
      });
      $("#item4").click(function(){
		$("#overview > div.card-navigation.carousel-indicators > div.navigation-bullet.active-navigation-bullet").removeClass('active-navigation-bullet').addClass('inactive-navigation-bullet')
        $("#overview > div.card-navigation.carousel-indicators > #item4").addClass('active-navigation-bullet').removeClass('inactive-navigation-bullet');
      });
    });
    </script>
  </head>

  <body id="developing-our-brand" class="case-study">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script>
        window.fbAsyncInit = function(){
      FB.init({
          appId: 'xxxxx', status: true, cookie: true, xfbml: true });
      };
      (function(d, debug){var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
          if(d.getElementById(id)) {return;}
          js = d.createElement('script'); js.id = id;
          js.async = true;js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
          ref.parentNode.insertBefore(js, ref);}(document, /*debug*/ false));
      function postToFeed(title, desc, url, image){
      var obj = {method: 'feed',link: url, picture: 'http://polyfen.com/imgs/meta/case-study-thumbnail.png'+image,name: title,description: desc};
      function callback(response){}
      FB.ui(obj, callback);
      }
    </script>

    <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <section id="title">
      <h1>Developing our own brand</h1>
      <div id="pearl-11" class="pearl rotate-slower">
      </div>
      <div id="pearl-12" class="pearl rotate">
      </div>
    </section>

    <section id="content-wrapper" class="container-fluid">

      <div class="row">
        <div id="brand-research" class="col">
          <h2>1. Brand Research</h2>
          <p>We started by conducting an exhaustive analysis of our business offering, our industry and competitors, and our audience.</p>
          <p>Our conclusion was that most creative agencies position their brands in one of two different ways.</p>
          <ol>
            <li>Some creative agencies, <strong>the business-oriented</strong>, focus on targeting an executive audience with a very sober and simple visual identity.</li>
            <li>Other agencies, <strong>the peculiarly creative</strong>, focus on showcasing their artistic talents gaining popularity amongst the creative industry with a quirky and playful brand.</li>
          </ol>
          <p>Based on our business proposal, our conclusion was to position our brand in between (A) the business-oriented and (B) the peculiarly creative.</p>
        </div>

        <div class="col-xl-1 col-lg-1 d-none d-lg-flex d-xl-flex">
          <div class="vertical-case-study-separator"></div>
        </div>

        <div class="col-12 d-flex d-lg-none d-xl-none">
          <div class="horizontal-case-study-separator"></div>
        </div>

        <div id="brand-strategy" class="col">
          <h2>2. Brand Strategy</h2>
          <img src="imgs/case-studies/developing-our-own-brand/brand-strategy/moodboard.jpg" title="Moodboard" alt="Moodboard" class="moodboard card-shadow d-block d-lg-none d-xl-none">
          <p>The choice of our brand name, the design of our logo system, and our website, and all the other elements that make up our brand identity are all rooted in representing our creative concept, <strong>the midpoint between business & creativity</strong>.</p>
          <p>We adopted <strong>Polyfen</strong> as a short, simple, memorable, efficient brand name that also carries whimsical tone as an arbitrary, abstract word with no original meaning.</p>
          <img src="imgs/case-studies/developing-our-own-brand/brand-strategy/moodboard.jpg" title="Moodboard" alt="Moodboard" class="moodboard card-shadow d-none d-lg-block d-xl-block">
        </div>
      </div>

      <div class="row">
        <div class="horizontal-case-study-separator"></div>
      </div>

      <div class="row" style="margin-bottom:20px;">
        <div id="logo-grid" class="d-none d-lg-flex d-xl-flex col card-shadow">
        </div>

        <div class="d-none d-lg-flex d-xl-flex col-xl-1 col-lg-1">
          <div class="vertical-case-study-separator"></div>
        </div>

        <div class="col">
          <div id="overview">
            <h2>3. Visual Identity</h2>
            <p>All of the elements that constitute our visual identity aim to be as distinctive and playful as possible while remaining clean, simple, and utilitarian as possible.</p>
            <img src="imgs/case-studies/developing-our-own-brand/visual-identity/ideogram-grid.gif" style="margin-bottom: 2.5rem;" class="card-shadow d-lg-none d-xl-none" alt="Ideogram Logo Grid">
            <p>Our <strong>logo system</strong> is the centrepiece of our visual identity. It represents the conjunction of two worlds, the world of business and the creative realm. The analytical hemisphere of the brain, and the emotional hemisphere.</p>
            <div id="logo-slider-mobile" class="carousel slide card-shadow d-flex d-lg-none d-xl-none">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="imgs/case-studies/developing-our-own-brand/visual-identity/ideogram-meaning.jpg" alt="Polyfen Ideogram Logo Meaning">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/visual-identity/ideogram-variations.jpg" alt="Polyfen Ideogram Logo Variations">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/visual-identity/emblem-grid.jpg" alt="Polyfen Emblem Logo Grid">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/visual-identity/ideogram-embossed.jpg" alt="Polyfen Ideogram Logo Embossed">
                </div>
              </div>
            </div>
            <div id="logo-slider-desktop" class="carousel slide carousel-fade card-shadow d-none d-lg-flex d-xl-flex" data-ride="carousel" data-interval="3500">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="imgs/case-studies/developing-our-own-brand/visual-identity/ideogram-meaning.jpg" alt="Polyfen Ideogram Logo Meaning">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/visual-identity/ideogram-variations.jpg" alt="Polyfen Ideogram Logo Variations">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/visual-identity/emblem-grid.jpg" alt="Polyfen Emblem Logo Grid">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/visual-identity/ideogram-embossed.jpg" alt="Polyfen Ideogram Logo Embossed">
                </div>
              </div>
            </div>
            <div class="card-navigation carousel-indicators">
              <div class="navigation-bullet active-navigation-bullet" id="item1" data-target="#logo-slider-desktop" data-slide-to="0"></div>
              <div class="navigation-bullet inactive-navigation-bullet" id="item2" data-target="#logo-slider-desktop" data-slide-to="1"></div>
              <div class="navigation-bullet inactive-navigation-bullet" id="item3" data-target="#logo-slider-desktop" data-slide-to="2"></div>
              <div class="navigation-bullet inactive-navigation-bullet" id="item4" data-target="#logo-slider-desktop" data-slide-to="3"></div>
            </div>
        </div>
      </div>
      </div>

      <div class="row">
        <div class="horizontal-case-study-separator"></div>
      </div>

      <div class="row">
        <div class="col" id="typeface-selection">
          <div id="wordmark" class="card-shadow">
            <img src="imgs/case-studies/developing-our-own-brand/visual-identity/WORDMARK_PLY_RGB_White.svg" width="100%" height="auto" alt="Polyfen Wordmark Logo">
          </div>
          <p>Our <strong>typographic selection</strong> features <a href="https://www.myfonts.com/fonts/kastelov/intelo/" target="_blank">Intelo Alt</a> set on headings and our logo's wordmark, a clean and geometric typeface with a distinctively playful character, most noticeable in the roundness of the letter “e”; paired with <a href="https://www.myfonts.com/fonts/garagefonts/freight-text-pro/" target="_blank">Freight Text Pro</a>,  a clean and readable typeface optimal for body text.</p>
        </div>


        <div class="col-xl-1 col-lg-1">
          <div class="vertical-case-study-separator"></div>
        </div>

        <div class="col-12 d-flex d-lg-none d-xl-none">
          <div class="horizontal-case-study-separator"></div>
        </div>

        <div class="col" id="colour-scheme">
          <div id="colour-swatches">
            <div class="swatch" id="indigo">
              <small>Indigo</small>
            </div>
            <div class="swatch" id="cream">
              <small>Cream</small>
            </div>
            <div class="swatch" id="slate">
              <small>Slate</small>
            </div>
          </div>
          <p>The brand's <strong>colour palette</strong> is characterised by a distinctive, eye-catching accent colour, a vibrant hue between blue and purple that we call <strong>Polyfen Indigo</strong>.</p>
        </div>
      </div>

      <div class="row">
        <div class="horizontal-case-study-separator"></div>
      </div>

      <div class="row">
        <div class="col">
          <div id="pearl-13" class="pearl rotate d-block d-lg-none d-xl-none">
          </div>
          <p id="visual-language-intro">Our <strong>visual language</strong> complements the other elements of our visual identity with a system of <span style="font-variant-numeric: lining-nums;-moz-font-feature-settings: "lnum";-webkit-font-feature-settings: "lnum";font-feature-settings: "lnum";">3D</span> modelled opalescent objects that we call <strong>Pearls</strong>. These can be featured in the background of our brand touchpoints as a trademark element that identifies our brand.</p>
        </div>
        <div class="col-xl-1">
        </div>
        <div class="col">
        </div>
      </div>

      <div class="row d-none d-lg-block d-xl-block" id="pearls-sample">
        <div id="pearl-13" class="pearl rotate-slower">
        </div>
        <div id="pearl-14" class="pearl rotate">
        </div>
        <div id="pearl-15" class="pearl rotate-slower">
        </div>
        <div id="pearl-16" class="pearl rotate-slower">
        </div>
      </div>

      <div class="row">
        <div class="col-12 d-flex d-lg-none d-xl-none">
          <div class="horizontal-case-study-separator"></div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <img src="imgs/case-studies/developing-our-own-brand/visual-identity/folder-illustration.svg" alt="Creative Team Illustration">
        </div>
        <div class="col-xl-1 col-lg-1">
        </div>
        <div class="col" id="visual-language-outro">
          <p>Our visual language also counts with a specific <strong>illustration style</strong> characterised by simple, geometric shapes set in the brand colours with soft gradients that complement the opalescence of the Pearls.</p>
        </div>
      </div>

      <div class="row">
        <div class="horizontal-case-study-separator"></div>
      </div>

      <div id="brand-guidelines">
        <div class="row">
          <div class="col">
            <h2>4. Brand Guidelines</h2>
            <div class="browser card-shadow d-block d-lg-none d-xl-none">
              <div class="browser-circle">
              </div>
              <div class="browser-circle">
              </div>
              <div class="browser-circle">
              </div>
              <div style="clear:both;"></div>
              <img src="imgs/case-studies/developing-our-own-brand/brand-guidelines/brand-guidelines.gif" alt="Polyfen Brand Guidelines">
            </div>
            <p>To ensure the consistent use of all the parameters that we have set to identify our brand, we developed a web page with all the corresponding guidelines and assets necessary for our organisation.</p>
            <p>Our brand guidelines can be easily updated as our identity grows and evolves, and they are conveniently accessible at <a href="http://polyfen.com/brand" target="_blank">polyfen.com/brand</a>.</p>
          </div>
          <div class="col-xl-1 col-lg-1">
          </div>
          <div class="col d-none d-lg-block d-xl-block">
            <div class="browser card-shadow" id="naming-web">
              <div class="browser-circle">
              </div>
              <div class="browser-circle">
              </div>
              <div class="browser-circle">
              </div>
              <div style="clear:both;"></div>
              <img src="imgs/case-studies/developing-our-own-brand/brand-guidelines/brand-guidelines.gif" alt="Polyfen Brand Guidelines">
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="horizontal-case-study-separator"></div>
      </div>

      <div id="brand-touchpoints">
        <div class="row">
          <div class="col d-none d-lg-flex d-xl-flex" id="folder-illustration">
            <img src="imgs/case-studies/developing-our-own-brand/brand-touchpoints/proposal-cover.jpg" alt="Polyfen Proposal Cover" class="card-shadow">
          </div>
          <div class="col-xl-1 col-lg-1">
          </div>
          <div class="col" style="z-index:3;">
            <h2>5. Brand Touchpoints</h2>
            <div id="brand-touchpoints-slider" class="carousel slide card-shadow d-flex d-lg-none d-xl-none">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="imgs/case-studies/developing-our-own-brand/brand-touchpoints/business-cards.jpg" alt="Polyfen Business Cards Design">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/brand-touchpoints/letterhead-grid.jpg" alt="Polyfen Letterhead Design Grid">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/brand-touchpoints/proposal-cover.jpg" alt="Polyfen Proposal Cover">
                </div>
              </div>
            </div>
            <div class="card-navigation d-block d-lg-none d-xl-none">
              <div class="navigation-bullet active-navigation-bullet"></div>
              <div class="navigation-bullet inactive-navigation-bullet"></div>
              <div class="navigation-bullet inactive-navigation-bullet"></div>
            </div>
            <p>We designed a system of all the branded applications needed for our business activities; Including email signatures, social media profiles, business cards, letterheads, invoices, and presentation slides.</p>
            <img src="imgs/case-studies/developing-our-own-brand/brand-touchpoints/business-cards-transparent.png" alt="Polyfen Business Cards Design" style="margin-left:-35px;margin-top:35px;" class="d-none d-lg-block d-xl-block">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="horizontal-case-study-separator"></div>
      </div>

      <div id="web-development">
        <div class="row">
          <div class="col">
            <h2>6. Web Development</h2>
            <div id="web-development-slider" class="carousel slide card-shadow d-flex d-lg-none d-xl-none">
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="imgs/case-studies/developing-our-own-brand/web-development/web-cover.gif" alt="Polyfen Web Cover Animation">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/web-development/web-mobile.jpg" alt="Polyfen Mobile Web Design">
                </div>
                <div class="item">
                  <img src="imgs/case-studies/developing-our-own-brand/web-development/service-cards.gif" alt="Polyfen UI Cards Transition">
                </div>
              </div>
            </div>
            <div class="card-navigation d-block d-lg-none d-xl-none">
              <div class="navigation-bullet active-navigation-bullet"></div>
              <div class="navigation-bullet inactive-navigation-bullet"></div>
              <div class="navigation-bullet inactive-navigation-bullet"></div>
            </div>
            <p>The centrepiece of our online presence, <a href="http://polyfen.com">polyfen.com</a>, features relevant and practical information set in a clean and readable layout with prominent visual elements and interactive animations which offer an engaging and memorable user experience.</p>
            <img src="imgs/case-studies/developing-our-own-brand/web-development/web-mobile.jpg" class="card-shadow d-none d-lg-block d-xl-block" style="margin-top:60px;" alt="Polyfen Mobile Web Design">
            <video width="100%" height="auto" class="card-shadow d-none d-lg-block d-xl-block" style="margin-top:40px;border-radius:8px;" autoplay loop>
              <source src="imgs/case-studies/developing-our-own-brand/web-development/service-cards.mp4" type="video/mp4">
              <source src="imgs/case-studies/developing-our-own-brand/web-development/service-cards.ogv" type="video/ogg">
            Your browser does not support the video tag.
            </video>
          </div>
          <div class="col d-none d-lg-block d-xl-block" id="web-dev-browser">
            <div class="browser card-shadow">
              <div class="browser-circle">
              </div>
              <div class="browser-circle">
              </div>
              <div class="browser-circle">
              </div>
              <div style="clear:both;"></div>
              <img src="imgs/case-studies/developing-our-own-brand/web-development/web-design.jpg" alt="Polyfen Homepage Web Design">
            </div>
          </div>
        </div>
      </div>

      <div id="share" class="col-xl-12">
        <div class="share-separator"></div>
        <h4>Share</h4>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpolyfen.com%2Fcase-study.php&amp;src=sdkpreparse" data-href="http://polyfen.com/case-study" data-image="http://polyfen.com/dev/web-5/imgs/meta/case-study-thumbnail.png" data-title="Developing our own brand" data-desc="A case study that exhibits our brand's core concept, the midpoint between business and creativity." id="facebook-share" class="button tertiary-button" target="_blank">Facebook</a>

        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" data-size="large" data-url="http://polyfen.com/case-study" data-related="wearepolyfen" data-show-count="false" id="twitter-share" class="button tertiary-button" target="_blank">Twitter</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        <!--<div class="fb-share-button" data-href="https://polyfen.com/case-study.php" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fpolyfen.com%2Fcase-study.php&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>-->

        <!--<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-url="http://polyfen.com/case-study" data-related="wearepolyfen" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
      </div>

      </div>
    </section>

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/call-to-action.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

  </body>
</html>
