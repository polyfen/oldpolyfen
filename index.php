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
          <div id="pearl-04" class="pearl pearl-04-INACTIVE rotate">
          </div>
          <div id="pearl-05" class="pearl pearl-05-INACTIVE rotate">
          </div>
          <div id="pearl-06" class="pearl pearl-06-INACTIVE rotate-slower">
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
              <div id="polyfen-cover" class="project-cover polyfen-cover-INACTIVE"></div>
              <div id="polyfen-thumbnail" class="project-thumbnail polyfen-thumbnail-INACTIVE d-none d-sm-none d-md-none d-lg-none d-xl-block">
                <img src="imgs/case-studies/developing-our-own-brand/polyfen-ideogram-grid.gif" height="100%" width="auto" style="border-radius:8px;">
              </div>
              <div class="project-description">
                <h3>Developing our own brand</h3>
                <p><strong>Polyfen</strong> stands for one core concept, the midpoint between business and design. <span class="d-none d-sm-none d-md-inline d-lg-inline d-xl-inline">A clean and professional look with a creative flair.</span></p>
                <a class="secondary-button">View project ›</a>
              </div>
            </section>

      </section>

      <div style="clear:both;">
      </div>

      <section id="services">
            <h2>Our services</h2>

            <div id="service-cards-wrapper">
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
            <p class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Our services are a solution for emerging businesses who need guidance in translating their business into a creative brand identity.</p>
      </section>

    </div>

    <section id="call-to-action">

      <div id="cta-content">
        <h2>Give your business the brand it deserves</h2>
        <a class="button primary-button" onclick="document.getElementById('contact-form').className='col c-block';document.getElementById('cta-content').className='col d-none';document.getElementById('name-input').focus(); return false;">Contact us</a>
      </div>

      <div class="d-none" id="contact-form">
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

      <div class="curve">
      </div>

      <div class="background">
        <div id="pearl-10" class="pearl rotate">
        </div>
        <div id="pearl-09" class="pearl rotate">
        </div>
        <div id="pearl-08" class="pearl rotate-slower">
        </div>
        <div id="pearl-07" class="pearl rotate">
        </div>
      </div>

    </section>

    <!-- INCLUDE FOOTER.PHP start -->
      <?php include 'sections/footer.php';?>
    <!-- INCLUDE FOOTER.PHP end -->

  </body>
</html>
