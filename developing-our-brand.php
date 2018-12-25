<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Polyfen | Developing our brand</title>


  <!-- INCLUDE HEAD.PHP start -->
    <?php include 'sections/head.php';?>
  <!-- INCLUDE HEAD.PHP end -->

  <!-- META Page-Specific -->
  <meta property="og:title" content="Polyfen | Developing our brand"/>
  <meta property="og:url" content="http://polyfen.com/developing-our-brand.php"/>
  <meta name="keywords" content="Brand Identity Design, Brand ID, Branding, Brand, Graphic, Design, Logo, Case Study" />
  <meta name="description" property="og:description" content="Polyfen is a
  creative agency specializing in brand identity design. Our small and efficient team of experts from around the world is run by four partners with backgrounds in business, design, tech, and marketing." />
  <meta property="og:image" content="[TBD]"/>
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
  </head>

  <body id="developing-our-brand" class="case-study">

    <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <section>
      <h1>Developing our own brand</h1>
    </section>

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/call-to-action.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

  </body>
</html>
