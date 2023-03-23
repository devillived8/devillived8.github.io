$(document).ready(function(){
    $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        lazyLoad: 'ondemand',
        autoplay: true,
        autoplaySpeed: 2000,
    });
  });