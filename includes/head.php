<!-- META General -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta property="og:type" content="website"/>
<meta name="author"  content="The Polyfen Group LLC"/>

<!-- FAVICON -->
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#7537f8">
<meta name="msapplication-TileColor" content="#7537f8">
<meta name="theme-color" content="#7537f8">

<!-- CSS General -->
<link rel="stylesheet" href="https://polykit.xyz/polynucleus/polynucleus.css" type="text/css">
<link href="app/css/opalescent.css" rel="stylesheet" type="text/css">
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
<script src="https://kit.fontawesome.com/d00980734d.js" crossorigin="anonymous"></script>
<!-- GTM -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P25JFWC');</script>
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
        var nav = $(".nav");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            
            if ($(window).width() > 768) { // Verifica el ancho de la ventana
                if (scroll >= 60) {
                    nav.removeClass('position-absolute').addClass("position-fixed");
                } else {
                    nav.removeClass("position-fixed").addClass('position-absolute');
                }
            } 
        });
    });

    $(function() {
        var hamburger = $(".hamburger");

        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if ( scroll >= 60) {
                hamburger.css('top', '18px');
            } else {
                hamburger.css('top', '168px');
        }
    });
    });

</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    let currentPage = window.location.pathname;
    let navLinks = document.querySelectorAll('header nav a');
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('current-page');
        }
    })
});
</script>

<!-- Navbar Scroll Script end -->

<!-- Scroll to Anchor link (esto se puede resolver con css/scroll-behavior:smooth) -->
<script>
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});
</script>

<!-- Images preload -->
<link rel="preload" as="image" href="imgs/thumbs-up-solid-white.svg" />
<link rel="preload" as="image" href="imgs/icons/envelope-white.svg" />
<link rel="preload" as="image" href="imgs/icons/phone-call-white.svg" />
<link rel="preload" as="image" href="imgs/icons/paper-plane-white.svg" />

<!-- Global javascript -->
<script defer src="app/js/timezone.js"></script>
<script defer src="app/js/subtle.js"></script>
<script defer src="app/js/accordion.js"></script>
<script defer src="app/js/modal-position.js"></script>
<script defer src="app/js/scrollfooter.js"></script>