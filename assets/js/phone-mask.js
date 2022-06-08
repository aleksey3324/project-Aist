$(document).ready(function () {
  let phoneInputs = $('.phone');

  let getInputNumbersValue = function (input) {
    return input.val().replace(/\D/g, '');
  }

  let onPhoneInput = function (e) {
    let input = $(this),
      inputNumbersValue = getInputNumbersValue(input);
      formatedInputValue = '',
      selectionStart = this.selectionStart;

    if (!inputNumbersValue) {
      return input.val('');
    }

    if(input.val().length != selectionStart) {
      if(e.originalEvent.data && /\D/g.test(e.originalEvent.data)) {
        input.val(inputNumbersValue);
      }
      return;
    }

    if (inputNumbersValue.length == 1)
      inputNumbersValue = '971' + inputNumbersValue;
    
    let firstSymbols = '+971';

    formatedInputValue = firstSymbols + ' ';

    if (inputNumbersValue.length > 3) {
      formatedInputValue += '(' + inputNumbersValue.substring(3, 5);
    }

    if (inputNumbersValue.length >= 6) {
      formatedInputValue += ') ' + inputNumbersValue.substring(5, 8);
    }

    if (inputNumbersValue.length >= 9) {
      formatedInputValue += '-' + inputNumbersValue.substring(8, 12);
    }

    input.val(formatedInputValue);
  }

  let onPhonePaste = function(e) {
    let pasted = e.originalEvent.clipboardData || window.originalEvent.clipboarData,
      input = $(this),
      inputNumbersValue = getInputNumbersValue(input);
    
    if (pasted) {
      let pastedText = pasted.getData('Text');

      if (!(/\D/g.test(pastedText)) == false) {
        input.val(inputNumbersValue);
      }
    }
  }

  phoneInputs.each(function (index) {
    let input = $(this);

    input.on('input', onPhoneInput);
    input.on('paste', onPhonePaste);
  })
});