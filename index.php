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
        <div id="curve">
        </div>
        <div id="background">
          <div id="pearl-04" class="pearl-04-INACTIVE rotate-slower">
          </div>
          <div id="pearl-05"  class="pearl-05-INACTIVE rotate">
          </div>
          <div id="pearl-06" class="pearl-06-INACTIVE rotate-slower">
          </div>
          <div id="pearl-03" class="pearl-03-INACTIVE rotate">
          </div>
          <div id="pearl-02" class="pearl-02-INACTIVE rotate">
          </div>
          <div id="pearl-01" class="pearl-01-INACTIVE rotate-slower">
          </div>
        </div>
    </section>

    <div id="content-wrapper">

      <section class="container-fluid" id="case-studies">
        <div class="row">
          <div class="col">
            <h2>Case Studies</h2>

            <section class="case-project">
              <div id="polyfen-cover" class="project-cover polyfen-cover-INACTIVE"></div>
              <div class="project-thumbnail"></div>
              <div class="project-description">
                <h3>Developing our own brand</h3>
                <p>Lorem ipsum dolor sit amet, lorem ipsum
  dolor sit amet. Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                <a class="secondary-button">View project ›</a>
              </div>
            </section>

          </div>
        </div>
      </section>

      <section class="container-fluid" id="services">
        <div class="row">
          <div class="col">
            <h2>Our services</h2>
          </div>
        </div>
      </section>

      <section class="container-fluid" id="about">
        <div class="row">
          <div class="col">
            <h2>We mean business</h2>
            <p>We are a small team of people distributed around the world combining our talents in design, marketing, and tech under the flag name of <strong>Polyfen</strong>.</p>
            <p>Our services are a solution for emerging businesses who need guidance in translating their business into a creative brand identity.</p>
          </div>
          <div class="col">
            <img src="imgs/illustration.svg" style="float:right;">
          </div>
        </div>
      </section>

    </div>

    <section class="container-fluid" id="call-to-action">
      <div class="row">

        <div class="col" id="cta-content">
          <h2>Give your business the brand it deserves</h2>
          <a class="button primary-button" onclick="document.getElementById('contact-form').className='col c-block';document.getElementById('cta-content').className='col d-none';document.getElementById('name-input').focus(); return false;">Contact us</a>
        </div>

        <div class="col d-none" id="contact-form">
          <h2>Contact us</h2>
          <form id="ajax-contact" method="post" action="libs/contact-form/mailer.php">
            <input type="text" name="name" placeholder="Your name" id="name-input" required>
            <input type="email" name="email" id="email" placeholder="Your email" required>
            <textarea name="message" id="message" placeholder="Your message..." required></textarea>
            <div id="captcha-wrapper">
            </div>
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
