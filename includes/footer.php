<footer>
    <ul aria-label="Our social networks" class="social no-bullets">
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

    <section  class="times" aria-label="Information about our different time zones">
        <section aria-label="San Francisco time" data-timezone="US/Pacific">
            <img src="/imgs/flags/us.svg" class="country-flag" alt="">
            <small class="mini">San Francisco</small>
            <output class="mini">00:00</output>
        </section>

        <section aria-label="Mar del Plata time" data-timezone="America/Argentina/Buenos_Aires">
            <img src="/imgs/flags/ar.svg" class="country-flag" alt="">
            <small class="mini">Mar del Plata</small>
            <output class="mini">00:00</output>
        </section>
        <section aria-label="Zagreb time" data-timezone="Europe/Belgrade">
            <img src="/imgs/flags/hr.svg" class="country-flag" alt="">
            <small class="mini">Zagreb</small>
            <output class="mini">00:00</output>
        </section>
    </section>

    <div id="tpg" class="tpg-logo-container">
        <a href="https://thepolyfengroup.com?utm_source=polyfen&utm_medium=referral" target="_blank">
        <figure>
            <img src="/imgs/the-polyfen-group-low.svg" id="tpg-logo-low" class="tpg-logo" alt=""
                onmouseover="document.getElementById('tpg-logo-low').classList.add('d-none'); document.getElementById('tpg-logo').classList.remove('d-none')">
            <img src="/imgs/the-polyfen-group.svg" id="tpg-logo" class="tpg-logo d-none" alt=""
                onmouseout="document.getElementById('tpg-logo').classList.add('d-none'); document.getElementById('tpg-logo-low').classList.remove('d-none')">
        </figure>
        </a>
    </div>

    <nav class="footer-navbar-mobile">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/work">Work</a>
        <a href="/contact">Contact</a>
    </nav>


    <nav class="sub-brands-footer">
        <a href="https://thepolyfengroup.com/business/" target="_blank" class="mini">Business Plan</a>
        <span>&vert;</span>
        <a href="https://thepolyfengroup.com/wiki/" target="_blank" class="mini">Team Wiki</a>
        <span>&vert;</span>
        <a href="https://thepolyfengroup.com/brand/" target="_blank" class="mini">Brand Guidelines</a>
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