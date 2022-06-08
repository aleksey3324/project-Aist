$('body').on('click', '.modal-rev', function (e) {
  $('.contact-error').hide();
})

$('body').on('click', '.send-reg', function (e) {
  let avtor = $('.avtor').val().trim();
  let comment = $('.comment').val();
  $('.contact-error').hide();

  $.ajax({
    url: '/assets/php/ajax/addComment.php',
    type: 'POST',
    cahe: false,
    data: {
      'avtor': avtor,
      'comment': comment,
    },
    dataType: 'html',
    success: (data) => {
      if (data === 'Ошибка автора') {
        $('.avtor').closest('.contact__inp').next().show();
      }
      else if (data == 'Ошибка коммента') {
        $('.comment').closest('.contact__inp').next().show();
      }
      else {

        let comment_add = `<div class='swiper-slide'>
        <div class='reviews__info'>
            <p>
              ${comment}
            </p>
            <span>${avtor}</span>
        </div>
        </div>`;

        $('.swiper-slide').removeClass('swiper-slide-prev');
        $('.swiper-slide').removeClass('swiper-slide-active');
        $('.swiper-slide').removeClass('swiper-slide-next');
        $('.swiper-slide').removeAttr('role');
        $('.swiper-slide').removeAttr('aria-label');
        $('.swiper-slide').removeAttr('style');

        $('.swiper-pagination').remove();

        let newSliderContent = $('.swiper-wrapper').html();

        let newRevSlider = `
        <div class="swiper reviews__slider">
          <div class="swiper-wrapper">
            ${comment_add}
            ${newSliderContent}
          </div>
          <div class="swiper-pagination"></div>
        </div>
        `;

        $('.reviews__slider').remove();

        $('.reviews__btn').before(newRevSlider);

        var swiperreviews = new Swiper(".reviews__slider", {
          slidesPerView: 1,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          }
        });

        $('#modal').hide();
        $(this).closest('#modal').next().show();
        $(this).closest('#modal').next().removeClass('out');
        let close = $('#modal-done').find('.close');
        setTimeout(function (e) {
          close.trigger('click');
        }, 1500);
        $('.avtor').val('');
        $('.comment').val('');
        $('.contact-error').hide();
      }
    }
  });
})