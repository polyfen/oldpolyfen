let estadoAnterior = null;
console.log("scrollfooter.js loaded");

function ajustarPaddingFooter() {
    const cookiesModal = document.getElementById("cookies-modal");
    const footer = document.querySelector('footer');

    if (cookiesModal) {
        const estadoActual = window.getComputedStyle(cookiesModal).display;

        if (estadoActual !== estadoAnterior) {
            footer.style.paddingBottom = estadoActual !== "none" ? "150px" : "0";
            estadoAnterior = estadoActual;
        }
    }
}
if (window.innerWidth <= 700) {
    const interval = setInterval(ajustarPaddingFooter, 100);

    document.getElementById("cookies-modal").addEventListener('transitionend', function () {
        document.dispatchEvent(new Event('modalCambio'));
    });

    document.addEventListener('modalCambio', ajustarPaddingFooter);

    window.addEventListener('load', function () {
        /* clearInterval(interval); */
        ajustarPaddingFooter(); // Ajustamos el padding cuando se carga la página
    });
}

