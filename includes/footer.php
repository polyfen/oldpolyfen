<footer>
      <ul>
        <li><a href="http://polyfen.com/twitter" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
        <li><a href="http://polyfen.com/instagram" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
        <li><a href="http://polyfen.com/linkedin" target="_blank" title="Linkedin" id="linkedin-icon"><i class="fab fa-linkedin-in"></i></a></li>
        <li><a href="http://polyfen.com/github" target="_blank" title="Github" id="linkedin-icon"><i class="fab fa-github"></i></a></li>
      </ul>

      <section class="times">
        <div data-timezone="US/Central">
          <img src="imgs/flags/us.svg" class="country-flag">
          <small class="caption">Austin</small>
          <output class="caption">00:00</output>
        </div>

        <div data-timezone="America/Argentina/Buenos_Aires">
          <img src="imgs/flags/ar.svg" class="country-flag">
          <small class="caption">Mar del Plata</small>
          <output class="caption">00:00</output>
        </div>
        <div data-timezone="Europe/Belgrade">
        <img src="imgs/flags/hr.svg" class="country-flag">
          <small class="caption">Zagreb</small>
          <output class="caption">00:00</output>
        </div>
      </section>

      <div id="tpg">
        <a href="https://thepolygroup.co?utm_source=polyfen&utm_medium=referral" target="_blank">
          <img src="imgs/the-poly-group-low.svg" id="tpg-logo-low" class="tpg-logo" onmouseover="document.getElementById(\'tpg-logo-low\').className=\'d-none\';document.getElementById(\'tpg-logo\').className=\'tpg-logo\';">
          <img src="imgs/the-poly-group.svg" id="tpg-logo" class="d-none" onmouseout="document.getElementById(\'tpg-logo\').className=\'d-none\';document.getElementById(\'tpg-logo-low\').className=\'tpg-logo\';">
        </a>
      </div>
      
      <div class="footer_2line">
        <a href="privacy.php" target="_blank"><small>Privacy Policy</small></a>
        <span>&vert;</span>
        <a href="http://brand.polyfen.com" target="_blank"><small>Brand Guidelines</small></a>
      </div>

    <!-- scripts location call luxon-->
    <script src="https://moment.github.io/luxon/global/luxon.min.js"></script>
    <!-- scripts location time end-->

    <script>
      const menu = document.querySelector('.hamburger')
      const close = document.querySelector ('.close')
      const nav = document.querySelector ('.desktop')

      menu.addEventListener('click', () => {
      nav.classList.add('open-nav')
      close.classList.add('open-nav')
      })
      close.addEventListener('click', () => {
      nav.classList.remove('open-nav')
      close.classList.remove('open-nav')
      })
</script>
    </footer>