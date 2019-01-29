$(document).ready(function(){
    $('.owl-carousel').slick({
  
    centerPadding: '100',
    dots: true,
    infinite: false,
    centerMode: false,
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3,
          centerMode: true,
          infinite: true,
        }
      },
      {
        breakpoint: 800,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 600,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  });