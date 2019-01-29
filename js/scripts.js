$(document).ready(function(){
	var nav = responsiveNav(".main-nav");

    $('#clock').countdown('2018/06/08').on('update.countdown', function(event) {
      var $this = $(this).html(event.strftime(''
             + '<li><span class="months">%-w</span> <span>weeks</span></li>'
             + '<li><span class="days">%-d</span> <span>days</span></li>'
             + '<li><span class="hours">%-H</span> <span>hours</span></li>'
             + '<li><span class="Minutes">%-M</span> <span>minutes</span></li>'
       ));
    });

    $(document).ready(function() {
    $('.popup-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
        }
      }
    });
  });

  $('a[href$="register"]').magnificPopup({
    type: 'inline',
    preloader: false
  });
});