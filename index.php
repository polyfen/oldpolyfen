<!DOCTYPE html>
<html lang="en">

<!-- INCLUDE HEAD.PHP start -->
  <?php include 'sections/head.php';?>
<!-- INCLUDE HEAD.PHP end -->

  <body id="home">

    <!-- INCLUDE HEADER.PHP start -->
      <?php include 'sections/header.php';?>
    <!-- INCLUDE HEADER.PHP end -->

    <section id="cover">
        <h1>A creative agency devoted to brand identity design.</h1>
        <div id="pattern">
        </div>
    </section>

    <section class="container-fluid" id="about">
      <div class="row">
        <div class="col">
          <h2>We mean business</h2>
          <p>Our small and efficient team of experts from around the world is run by four partners with backgrounds in business, design, tech, and marketing.</p>
        </div>
      </div>
    </section>

    <section class="container-fluid" id="call-to-action">
      <div class="row">

        <div class="col" id="cta-content">
          <h2>Give your business the brand it deserves</h2>
          <p>Our services are a solution for emerging businesses who need guidance in translating their business into a creative brand identity.</p>
          <a class="button primary-button" onclick="document.getElementById('contact-form').className='col c-block';document.getElementById('cta-content').className='col d-none';">Contact us</a>
        </div>

        <div class="col d-none" id="contact-form">
          <form id="ajax-contact" method="post" action="libs/contact-form/mailer.php">
            <input type="text" name="name" placeholder="Your name" required>
            <input type="email" name="email" id="email" placeholder="Your email" required>
            <textarea name="message" id="message" placeholder="Your message..." required></textarea>
            <button type="submit" id="send">Send</button>
            <button id="form-loader" class="d-none">
              <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
              <span class="sr-only">Loading...</span>
            </button>
          </form>
          <button id="go-back" onclick="document.getElementById('cta-content').className='col c-block';document.getElementById('contact-form').className='col d-none';">
            <i class="fa fa-chevron-left"></i> Back
          </button>
        </div>

      </div>
    </section>

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

  </body>
</html>
