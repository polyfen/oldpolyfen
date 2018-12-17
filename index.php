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
        <div class="curve">
        </div>
        <div class="background">
          <div id="pearl-04" class="pearl-04-INACTIVE rotate">
          </div>
          <div id="pearl-05" class="pearl-05-INACTIVE rotate">
          </div>
          <div id="pearl-06" class="pearl-06-INACTIVE rotate-slower">
          </div>
          <div id="pearl-03" class="pearl-03-INACTIVE rotate">
          </div>
          <div id="pearl-02" class="pearl-02-INACTIVE rotate-slower">
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
              <div id="polyfen-thumbnail" class="project-thumbnail polyfen-thumbnail-INACTIVE">
                <img src="imgs/case-studies/developing-our-own-brand/polyfen-ideogram-grid.gif" height="100%" width="auto" style="border-radius:8px;">
              </div>
              <div class="project-description">
                <h3>Developing our own brand</h3>
                <p><strong>Polyfen</strong> stands for one core concept, the midpoint between business and design. <br/>A clean and professional look with a distinctive and creative flair.</p>
                <a class="secondary-button" style="margin-top: 20px;">View project ›</a>
              </div>
            </section>

          </div>
        </div>
      </section>

      <section class="container-fluid" id="services">
        <div class="row">
          <div class="col">
            <h2 style="margin-top:80px;">Our services</h2>

            <div class="service-card">
              <div class="service-heading">
                <img src="imgs/services/brand-research-icon.svg">
              </div>
              <div class="service-heading-background">
              </div>
              <h4>Brand Research</h4>
              <ul>
                <li>Business analysis</li>
                <li>Competitive analysis</li>
                <li>Audience analysis</li>
                <li>Research conclusion</li>
              </ul>
            </div>

            <div class="service-card">
              <div class="service-heading">
                <img src="imgs/services/brand-strategy-icon.svg">
              </div>
              <div class="service-heading-background">
              </div>
              <h4>Brand Strategy</h4>
              <ul>
                <li>Keywords</li>
                <li>Creative concept</li>
                <li>Moodboard</li>
                <li>Voice</li>
                <li>Naming</li>
                <li>Key Messages</li>
                <li>Slogan</li>
              </ul>
            </div>

            <div class="service-card">
              <div class="service-heading">
                <img src="imgs/services/visual-identity-icon.svg">
              </div>
              <div class="service-heading-background">
              </div>
              <h4>Visual Identity</h4>
              <ul>
                <li>Visual exploration</li>
                <li>Logo system</li>
                <li>Typeface selection</li>
                <li>Colour scheme</li>
                <li>Visual language</li>
              </ul>
            </div>

            <div class="service-card">
              <div class="service-heading">
                <img src="imgs/services/brand-guidelines-icon.svg">
              </div>
              <div class="service-heading-background">
              </div>
              <h4>Brand Guidelines</h4>
              <p>
                A summary of all the strategic parameters and visual assets that make up your brand identity.
              </p>
            </div>

            <div class="service-card">
              <div class="service-heading">
                <img src="imgs/services/brand-touchpoints-icon.svg">
              </div>
              <div class="service-heading-background">
              </div>
              <h4>Brand Touchpoints</h4>
              <ul>
                <li>Email signature</li>
                <li>Social media profiles</li>
                <li>Business cards</li>
                <li>Letterhead</li>
                <li>Invoice</li>
                <li>Presentation slides</li>
              </ul>
            </div>

            <div class="service-card">
              <div class="service-heading">
                <img src="imgs/services/web-development-icon.svg">
              </div>
              <div class="service-heading-background">
              </div>
              <h4>Web Development</h4>
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
        </div>
      </section>

      <section class="container-fluid" id="about">
        <div class="row">
          <div class="col">
            <h2>The link between<br/>business &amp; creativity</h2>
            <p>We are a small team of people distributed around the world combining our talents in design, marketing, and tech under the flag name of <strong>Polyfen</strong>.</p>
            <p>Our services are a solution for emerging businesses who need guidance in translating their business into a creative brand identity.</p>
          </div>
          <div class="col">
            <img src="imgs/about/illustration.svg" style="float:right;">
          </div>
        </div>
      </section>

    </div>

    <section class="container-fluid" id="call-to-action">
      <div class="curve">
      </div>
      <div class="background">
        <div id="pearl-12" class=" rotate">
        </div>
        <div id="pearl-11" class=" rotate">
        </div>
        <div id="pearl-10" class=" rotate-slower">
        </div>
        <div id="pearl-09" class=" rotate">
        </div>
        <div id="pearl-08" class=" rotate">
        </div>
        <div id="pearl-07" class=" rotate-slower">
        </div>
      </div>


      <div class="row">

        <div class="col" id="cta-content">
          <h2>Give your business the brand it deserves</h2>
          <a class="button primary-button" onclick="document.getElementById('contact-form').className='col c-block';document.getElementById('cta-content').className='col d-none';document.getElementById('name-input').focus(); return false;">Contact us</a>
        </div>

        <div class="col d-none" id="contact-form">
          <h2>Contact us</h2>
          <form id="ajax-contact" method="post" action="app/contact-form/mailer.php">
            <input type="text" name="name" placeholder="Your name" id="name-input" required>
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
