<?php

    function head(){
        echo '<!-- META General -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta property="og:type" content="website"/>
        <meta name="author"  content="The Poly Group"/>
      
        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#7537f8">
        <meta name="msapplication-TileColor" content="#7537f8">
        <meta name="theme-color" content="#7537f8">
      
        <!-- CSS General -->
        <link rel="stylesheet" href="https://polynucleus.com/styles.css" type="text/css">
        <link rel="stylesheet" href="app/css/styles.css" type="text/css">
      
        <!-- FONTS -->
        <!--
        /**
        * @license
        * MyFonts Webfont Build ID 568563
        *
        * The fonts listed in this notice are subject to the End User License
        * Agreement(s) entered into by the website owner. All other parties are
        * explicitly restricted from using the Licensed Webfonts(s).
        *
        * You may obtain a valid license from one of MyFonts official sites.
        * http://www.fonts.com
        * http://www.myfonts.com
        * http://www.linotype.com
        *
        */
        -->
        <link rel="stylesheet" type="text/css" href="libs/fonts/Biotif.css">
        <link rel="stylesheet" href="https://use.typekit.net/aba8ecz.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      
        <!-- GTM -->
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({\'gtm.start\':
        new Date().getTime(),event:\'gtm.js\'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!=\'dataLayer\'?\'&l=\'+l:\'\';j.async=true;j.src=
        \'https://www.googletagmanager.com/gtm.js?id=\'+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,\'script\',\'dataLayer\',\'GTM-P25JFWC\');</script>
        <!-- End Google Tag Manager -->
      
        <!-- Pinterest -->
        <meta name="p:domain_verify" content="defdac0db8bc98b64145d03def30a79f"/>
      
        <!-- jQuery -->
        <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>
      
        <!-- Navbar Scroll Script -->
        <script>
          $(function() {
            var header = $(".header");
            $(window).scroll(function() {    
                var scroll = $(window).scrollTop();
            
                if (scroll >= 60) {
                    header.removeClass(\'position-absolute\').addClass("position-fixed");
                } else {
                    header.removeClass("position-fixed").addClass(\'position-absolute\');
                }
            });
        });
        </script>
      
        <!-- Scroll to Anchor link -->
        <script>
        $(document).on(\'click\', \'a[href^="#"]\', function (event) {
          event.preventDefault();
      
          $(\'html, body\').animate({
              scrollTop: $($.attr(this, \'href\')).offset().top
          }, 500);
        });
        </script>
        <link rel="preload" as="image" href="imgs/thumbs-up-solid-white.svg" />'
;
    }

    function hello_bar(){
        echo '<div class="hello-bar">
        <small>✨✨✨ Schedule a free call to get branding advice for your business</small>
        <a href="strategy-call.php"><button>Learn more</button></a>
    </div>';
    }

    function page_header(){
        echo '<header class="header position-absolute">
        <a href="/"><img src="imgs/polyfen-logo.svg" id="logo" alt="Polyfen"></a>
        <nav>        
          <a href="/" class="uppercase">Home</a>
          <a href="services.php" class="uppercase">Services</a>
          <a href="about.php" class="uppercase">About</a>
          <a href="contact.php" class="uppercase">Contact</a>
        </nav>
      </header>';
    }

    function call_to_action(){
        echo '<hr>
        
        <section id="contact">
        <div id="cta-content" class="hidden container">
          <h2 class="heading-1 align-center">Give your business<br>the brand it deserves<br>
          <a href="mailto:hi@polyfen.com">hi@polyfen.com</a></h2>
          <small class="uppercase">or<br></small>
            <a href="strategy-call.php">
              <button class="secondary-button" id="schedule-a-call">schedule a call</button>
            </a>
        </div>
      
      </section>';
    }

    function footer(){
        echo '<footer>
            <ul>
                <li><a href="http://polyfen.com/twitter" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="http://polyfen.com/instagram" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="http://polyfen.com/linkedin" target="_blank" title="Linkedin" id="linkedin-icon"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="http://polyfen.com/github" target="_blank" title="Github" id="linkedin-icon"><i class="fab fa-github"></i></a></li>
            </ul>
            <a href="privacy.php" target="_blank"><small>Privacy Policy</small></a>
            <div id="tpg">
              <a href="https://thepolygroup.co?utm_source=polyfen&utm_medium=referral" target="_blank">
                <img src="imgs/the-poly-group-low.svg" id="tpg-logo-low" class="tpg-logo" onmouseover="document.getElementById(\'tpg-logo-low\').className=\'d-none\';document.getElementById(\'tpg-logo\').className=\'tpg-logo\';">
                <img src="imgs/the-poly-group.svg" id="tpg-logo" class="d-none" onmouseout="document.getElementById(\'tpg-logo\').className=\'d-none\';document.getElementById(\'tpg-logo-low\').className=\'tpg-logo\';">
              </a>
            </div>
        </footer>';
    }

?>