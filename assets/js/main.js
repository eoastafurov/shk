$(document).ready(function(){
  $("#header").on("click",".animated_link", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
          top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 1000);
  });
});


$('.slider_script').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  dots: false,
  arrows: true,
  autoplay: true,
  autoplaySpeed: 5000,
  variableWidth: true,
  responsive: [
     {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true
        }
     },
     {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
     },
     {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
     }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
  ] 
});

$('.comments_slider').slick({
  infinite: true,
  dots: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  variableWidth: true,
});

$(function() {
  $('.burger_mask, .burger_menu').click(function(){
     $('.burger_menu').toggleClass('menu_opened');
  })
  $(document).click(function(event){
     if ($(event.target).closest('.burger_mask').length) return;
     $('.burger_menu').removeClass('menu_opened');
     event.stopPropagation();
  });
})