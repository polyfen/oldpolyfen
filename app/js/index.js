$(document).ready(function(){
    var slickHere = $('.owl-carousel').slick({
  
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
          slidesToShow: 1,
          centerMode: true,
          infinite: true,
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

    $(document).on('mousedown','.slick-center .service-item',function(){
      console.log('aaa');
      $(this).addClass('slick-fade-click');
    });

    $(document).on('mouseleave','.slick-center .service-item',function(){

      $('.service-item').removeClass('slick-fade-click');
    });

    slickHere.on("beforeChange", function (){
      console.log('b');
      $('.service-item').removeClass('slick-fade-click');
  })
  });




  $(document).on('click','.slick-dots button',function(){
    $('.service-card').addClass('backlash');
    setTimeout(function(){
      $('.service-card').removeClass('backlash');
    },200);
  });