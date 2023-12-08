window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  let modal = document.getElementById("cookies-modal");
  let scrollDistanceFromBottom = document.documentElement.scrollHeight - window.innerHeight - window.scrollY;

  if (window.innerWidth >= 1100) {
    if (scrollDistanceFromBottom <= 80) {
      modal.style.bottom = "140px";
    } else {
      modal.style.bottom = "20px";
    }
  } else if (window.innerWidth < 675) {
    if (scrollDistanceFromBottom <= 180) {
     let dynamicBottom = 220 - scrollDistanceFromBottom; 
      modal.style.bottom = dynamicBottom + "px";
    } else {
      modal.style.bottom = "20px";
    }
  } else if (window.innerWidth < 1100 && window.innerWidth >= 700 ) {
    modal.style.bottom = "20px";
  }
}

console.log("modal-position.js loaded");