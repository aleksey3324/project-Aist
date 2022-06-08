let countChecked = 0;

$('body').on('click', '.modal-aist', function (e) {
  $('.checkmark').prev().prop('checked', false);
  $('.name').val('');
  $('.phone').val('');
  $('#number-of-children').val(1);
  $('.error-checked').hide();
  $('.contact-error').hide();

  countChecked = 0;
})

$('body').on('click', '.modal-aist-two', function (e) {
  if($('#number-of-children').val() <= 0 || $('#number-of-children').val() == '') {
    $('#number-of-children').closest('.add-catalog-val-count').next().show();
  }
  else {
    $('#modal-aist').hide();
    $(this).closest('#modal-aist').next().show();
    $(this).closest('#modal-aist').next().removeClass('out');
    $('#number-of-children').closest('.add-catalog-val-count').next().hide();
  }

})

$('body').on('click', '.modal-aist-tree', function (e) {

  $('.checkmark').prev().each(function (index) {
    if ($(this).is(':checked'))
      countChecked++;
  })

  if (countChecked != 0) {
    $('#modal-aist-two').hide();
    console.log(countChecked);
    $(this).closest('#modal-aist-two').next().show();
    $(this).closest('#modal-aist-two').next().removeClass('out');
    $(this).closest('#modal-aist-two').find('.error-checked').hide();
  }
  else {
    $(this).closest('#modal-aist-two').find('.error-checked').show();
  }

  countChecked = 0;

})

$('body').on('click', '.modal-done-soon', function (e) {

  $('.name').closest('.contact__inp').next().hide();
  $('.phone').closest('.contact__inp').next().hide();

  $(this).closest('#modal-aist-tree').find('.phone').closest('.contact__inp').next().hide();

  let numberOfChildren = $(this).closest('.modal-reg').find('#number-of-children').val();
  let arrChekedGroup = [];

  $('.block-checked').find('.block-checked__text').each(function (index) {
    if ($(this).next().is(':checked'))
      arrChekedGroup.push($(this).text());
  })

  let strCheckedGroup = arrChekedGroup.join();
  let name = $('#name').val();
  let phone = $('#phone').val();

  $.ajax({
    url: '/assets/php/ajax/baby-form.php',
    type: 'POST',
    cahe: false,
    data: {
      'numberOfChildren': numberOfChildren,
      'strCheckedGroup': strCheckedGroup,
      'name': name,
      'phone': phone
    },
    dataType: 'html',
    success: (data) => {
      if (data === 'Ошибка имени') {
        $('.name').closest('.contact__inp').next().show();
      }
      else if (data == 'Ошибка телефона') {
        $('.phone').closest('.contact__inp').next().show();
      }
      else {
        $('.checkmark').prev().prop('checked', false);
        $('.name').val('');
        $('.phone').val('');
        $(this).closest('#modal-aist-tree').hide();
        $(this).closest('#modal-aist-tree').next().show();
        $(this).closest('#modal-aist-tree').next().removeClass('out');
        let close = $(this).closest('#modal-aist-tree').next().find('.close');
        setTimeout(function (e) {
          close.trigger('click');
        }, 1500);
      }
    }
  });
  countChecked = 0;
})



$('body').on('click', '.modal-aist-tree-back', function (e) {
  $('#modal-aist-two').addClass('out');
  $('#modal-aist-two').hide();
  $('#modal-aist').show();
  $('#modal-aist').removeClass('out');
  $('.error-checked').hide();
})

$('body').on('click', '.modal-done-soon-back', function (e) {
  $('#modal-aist-tree').addClass('out');
  $('#modal-aist-tree').hide();
  $('#modal-aist-two').show();
  $('#modal-aist-two').removeClass('out');
  $('.contact-error').hide();
})


$('body').on('click', '.increment', function (e) {

  let val = $('#number-of-children').val();

  if (val < 100) {
    val++;
    $('#number-of-children').val(val);
  }

})

$('body').on('click', '.decrement', function (e) {
  let val = $('#number-of-children').val();

  if (val > 0 && ((val - 1) != 0)) {
    val--;
    $('#number-of-children').val(val);
  }
})

$('body').on('input', '#number-of-children', function (e) {
  if ($(this).val().length > 2) {
    $(this).val($(this).val().slice(0, 2));
  }
})

$('body').on('click', '.send-contact', function(e) {
  let name = $('.contact-name').val();
  let email = $('.email').val();
  let comment = $('.contact-comment').val();

  $.ajax({
    url: '/assets/php/ajax/contact.php',
    type: 'POST',
    cahe: false,
    data: {
      'name': name,
      'email': email,
      'comment': comment
    },
    dataType: 'html',
    success: (data) => {
      $('.error-checked').hide();
      if (data === 'Ошибка имени') {
        $('.contact-name').closest('.contact__inp').next().show();
      }
      else if (data == 'Ошибка почты') {
        $('.email').closest('.contact__inp').next().show();
      }
      else if(data == 'Ошибка коммента') {
        $('.contact-comment').closest('.contact__inp').next().show();
      }
      else {
        $('.contact-name').val('');
        $('.email').val('');
        $('.contact-comment').val('');
      }
    }
  });

})