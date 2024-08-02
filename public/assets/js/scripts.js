// swiper
var messagesswiper = new Swiper(".messagesswiper", {
autoplay: true,
slidesPerView: 3,
spaceBetween: 30,
breakpoints: {
  576: {
    slidesPerView: 3,
  },
  768: {
    slidesPerView: 4,
  },
  992: {
    slidesPerView: 4,
  },
  1200: {
    slidesPerView: 4,
  }
},
});

//

$(function() {

    $(".progress").each(function() {

      var value = $(this).attr('data-value');
      var left = $(this).find('.progress-left .progress-bar');
      var right = $(this).find('.progress-right .progress-bar');

      if (value > 0) {
        if (value <= 50) {
          right.css('transform', 'rotate(' + percentageToDegrees(value) + 'deg)')
        } else {
          right.css('transform', 'rotate(180deg)')
          left.css('transform', 'rotate(' + percentageToDegrees(value - 50) + 'deg)')
        }
      }

    })

    function percentageToDegrees(percentage) {

      return percentage / 100 * 360

    }

  });
