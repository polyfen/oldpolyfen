var slickHere;

$(document).ready(function(){
    slickHere = $('.owl-carousel').slick({

    centerPadding: '90px',
    dots: true,
    infinite: false,
    nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style=""><p><i class="fa fa-angle-right" aria-hidden="true"></i></p></button>',
    prevArrow: '<button class="slick-prev slick-arrow" aria-label="Previous" type="button" style=""><p><i class="fa fa-angle-left" aria-hidden="true"></i></p></button>',
    centerMode: true,
    slidesToShow: 3,
    initialSlide: 1,

    responsive: [
      {
        breakpoint: 991,
        settings: {
          arrows: true,
          centerPadding: '30px',
          slidesToShow: 1,
          centerMode: true,
          infinite: true,
          initialSlide: 0,

        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '0',
          slidesToShow: 1,
          centerMode: true,
          infinite: true,
          initialSlide: 0,
        }
      },
      {
        breakpoint: 1600,
        settings: {

          centerPadding: '30px',

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

      $(this).addClass('slick-fade-click');
    });

    $(document).on('mouseleave','.slick-center .service-item',function(){

      $('.service-item').removeClass('slick-fade-click');
    });

    slickHere.on("beforeChange", function (){

      $('.service-item').removeClass('slick-fade-click');
    });

    slickHere.on("afterChange", function(event, slick, currentSlide, nextSlide){

      if(currentSlide<2){

        $('.slick-prev').addClass('hide');
      } else {
        $('.slick-prev').removeClass('hide');

      }

      if(currentSlide>3){

        $('.slick-next').addClass('hide');

      } else {
        $('.slick-next').removeClass('hide');

      }

      //Media solution for draggable

      if($(document).innerWidth()>975){
        if(currentSlide==0){
          setTimeout(function(){
            $('.slick-next').click();
          },20);

        }

        if(currentSlide==5){
          setTimeout(function(){
            $('.slick-prev').click();
          },20);

        }
      }




     });

  });




  $(document).on('click','.slick-dots button',function(){
    $('.service-card').addClass('backlash');
    setTimeout(function(){
      $('.service-card').removeClass('backlash');
    },200);
  });

  function navSlider(){

  }

  $(window).resize(function(){
    navSlider();
  });

  $(document).ready(function(){
    $('.slick-prev').addClass('hide');
    navSlider();
  });

