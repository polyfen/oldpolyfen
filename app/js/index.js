$(document).ready(function(){
    $('.owl-carousel').slick({
  
    centerPadding: '100',
    dots: true,
    infinite: false,
    nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><p><i class="fa fa-angle-right" aria-hidden="true"></i></p></button>',
    prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><p><i class="fa fa-angle-left" aria-hidden="true"></i></p></button>',
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

  var sliderTimeout;

    $(document).on('mouseover','.slick-next',function(){
        $('.slick-track').addClass('slick-track_left');
        clearTimeout(sliderTimeout);
        console.log('removetime');
    });

   

    $(document).on('mouseleave','.slick-next',function(){
        console.log('add time');
        sliderTimeout =  setTimeout(function(){
          $('.slick-track').removeClass('slick-track_left');
          console.log('time made');
        },500)
        
    });

    $(document).on('mouseover','.slick-prev',function(){
        $('.slick-track').addClass('slick-track_right');
        clearTimeout(sliderTimeout);
    });

    $(document).on('mouseleave','.slick-prev',function(){
      sliderTimeout = setTimeout(function(){
        $('.slick-track').removeClass('slick-track_right');
      },500)
    });
  });

