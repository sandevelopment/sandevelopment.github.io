$(document).ready(function(){
  $('.open-mm').click(function(){
    $('.menu-mobile').fadeIn(500);
  });
  $('.close-mm').click(function(){
    $('.menu-mobile').fadeOut(500);
  });

  $(document).ready(function() {
    $('#table').DataTable();
  });

  $('input, textarea').on('focusin', function() {
    $(this).parent().find('label').addClass('label-active');
    $(this).css('background-color', '#12a0d4');
  });
  $('input, textarea').on('focusout', function() {
    if (!this.value) {
      $(this).parent().find('label').removeClass('label-active');
      $(this).css('background-color', '#f2f2f2');
    }
  });

  $('#open-form').click(function() {
    $('#isi-form').slideDown();
    $('#info-data').slideUp();
    $('#open-form').hide();
    $('#close-form').show();
  });

  $('#close-form').click(function() {
    $('#isi-form').slideUp();
    $('#info-data').slideDown();
    $('#open-form').show();
    $('#close-form').hide();
  });
});
