<footer>
    <nav aria-label="Our social network" class="social-network">
        <ul>
            <li>
                <a href="http://polyfen.com/twitter" target="_blank" title="Twitter">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>
            </li>
            <li>
                <a href="http://polyfen.com/instagram" target="_blank" title="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="http://polyfen.com/linkedin" target="_blank" title="Linkedin">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
            <li>
                <a href="http://polyfen.com/github" target="_blank" title="Github">
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
    </nav>

    <section class="times" aria-label="Information about our different time zones">
        <section data-timezone="US/Pacific">
            <img src="imgs/flags/us.svg" class="country-flag" alt="">
            <small class="caption">San Francisco</small>
            <output class="caption">00:00</output>
        </section>

        <section data-timezone="America/Argentina/Buenos_Aires">
            <img src="imgs/flags/ar.svg" class="country-flag" alt="">
            <small class="caption">Mar del Plata</small>
            <output class="caption">00:00</output>
        </section>
        <section data-timezone="Europe/Belgrade">
            <img src="imgs/flags/hr.svg" class="country-flag" alt="">
            <small class="caption">Zagreb</small>
            <output class="caption">00:00</output>
        </section>
    </section>


    <a href="https://thepolyfengroup.com?utm_source=polyfen&utm_medium=referral" target="_blank">
        <figure>
            <img src="imgs/the-polyfen-group-low.svg" id="tpg-logo-low" class="tpg-logo" alt="">
            <img src="imgs/the-polyfen-group.svg" id="tpg-logo" class="d-none" alt="">
        </figure>
    </a>


    <nav class="footer-navbar-mobile">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>


    <nav class="footer_2line">
        <a href="https://thepolyfengroup.com/wiki/" target="_blank"><small>Team Wiki</small></a>
        <span>&vert;</span>
        <a href="https://thepolyfengroup.com/business/" target="_blank"><small>Business Plan</small></a>
        <span>&vert;</span>
        <a href="https://thepolyfengroup.com/brand/" target="_blank"><small>Brand Guidelines</small></a>
        <span>&vert;</span>
        <a href="https://thepolyfengroup.com/privacy/" target="_blank"><small>Privacy Policy</small></a>
    </nav>

    <!-- scripts location call luxon-->
    <script src="https://moment.github.io/luxon/global/luxon.min.js"></script>
    <!-- scripts location time end-->

    <script>
    const menu = document.querySelector('.hamburger')
    const close = document.querySelector('.close')
    const nav = document.querySelector('.desktop')

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