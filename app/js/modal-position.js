  window.onscroll = function() { scrollFunction() };

  function scrollFunction() {
    let modal = document.getElementById("cookies-modal");
    let scrollDistanceFromBottom = document.documentElement.scrollHeight - window.innerHeight - window.scrollY;

    if (scrollDistanceFromBottom <= 140) {
      modal.style.bottom = "140px";
      console.log("llegue!")
    } else {
      modal.style.bottom = "20px";
    }
  }

  console.log("modal-position.js loaded");