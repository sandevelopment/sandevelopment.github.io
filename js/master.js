$(document).ready(function(){
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $('.nav-top').css('background-color','#fff');
      $('.nav-top').css('border-bottom','1.5px solid #ddd');

      $('.nav-top ul li a').css('color','#12a0d4');
      $('.nav-top ul').css('float', 'right');

      $('.nav-top img').css('opacity', '1');
      $('.nav-top img').css('display', 'block');



      // LANG
      $('.choose-lang').css('z-index', '1001');
      $('.choose-lang').css('position', 'fixed');
    }else {
      $('.nav-top').css('background-color','transparent');
      $('.nav-top ul li a').css('color','#fff');
      $('.nav-top ul').css('float', 'none');
      $('.nav-top').css('border-bottom','none');

      $('.nav-top img').css('opacity', '0');

      $('.nav-top img').css('display', 'none');



    }
  });

  $('.submit-all').click(function() {
    swal({
      title: "Thank You!",
      text: "Your message already send",
      icon: "success",
      button: "Close!",
    });
  });

  // MODAL
    // $('#open-modal').click(function() {
    //   $("#myModal").show();
    //   $('body').css('overflow-y','hidden');
    //   // ANIMATION
    //   $('.modal-content').addClass('animated fadeInUp');
    // });



  // TILT
  $('.js-tilt').tilt({
    maxTilt: 5,
    glare: true,
    maxGlare: .2,
    transition:true,
  });
  $('.js-tilt-team').tilt({
    maxTilt: 2,
    glare: false,
    transition:true,
  });


  wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    }
  );
  wow.init();

  // Center all the things!
  var rellax = new Rellax('.rellax', {
    center: true
  });

  //  LOADER

  // OPEN MODAL
  var modal = document.getElementById('myModal');
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        $('body').css('overflow-y','scroll');
    }
  }
  $('.btn-close-modal').click(function() {
    // ANIMATION
    $(".modal").hide();
    $('body').css('overflow-y','scroll');
  });

  $('.show-modal').click(function() {
    var tid = $(this).data('option-trigger');
    var $current = $('.modal[data-option="' + tid + '"]').show();
    $('.option-car-type').not($current).hide();

    $('body').css('overflow-y','hidden');

    $('.modal-content').addClass('animated fadeInUp');
  });

  $('#web').click(function(){
    $('#mobile').toggle(500);
    $('#desktop').toggle(500);
    $('#design').toggle(500);
    $('#web').show(500);
    $('#penjelasan').toggle(500);
  });
  $('#mobile').click(function(){
    $('#web').toggle(500);
    $('#desktop').toggle(500);
    $('#design').toggle(500);
    $('#mobile').show(500);
    $('#penjelasan').toggle(500);
  });
  $('#desktop').click(function(){
    $('#mobile').toggle(500);
    $('#web').toggle(500);
    $('#design').toggle(500);
    $('#desktop').show(500);
    $('#penjelasan').toggle(500);
  });
  $('#design').click(function(){
    $('#mobile').toggle(500);
    $('#desktop').toggle(500);
    $('#web').toggle(500);
    $('#design').show(500);
    $('#penjelasan').toggle(500);
  });

  $('#menu-bars-click').click(function(){
    $('.side-nav').fadeToggle(500);
  });

  $('#pilihan-portofolio').click(function() {
    $(this).addClass('active-tabs');
    $('#pilihan-work').removeClass('active-tabs');
    $('#tabs-portofolio').show();
    $('#tabs-work').hide();
  });

  $('#pilihan-work').click(function() {
    $(this).addClass('active-tabs');
    $('#pilihan-portofolio').removeClass('active-tabs');
    $('#tabs-work').show();
    $('#tabs-portofolio').hide();
  });



  // SKILL
  $(".skills").addClass("active")
  $(".skills .skill .skill-bar span").each(function() {
     $(this).animate({
        "width": $(this).parent().attr("data-bar") + "%"
     }, 1000);
     $(this).append('<b>' + $(this).parent().attr("data-bar") + '%</b>');
  });
  setTimeout(function() {
     $(".skills .skill .skill-bar span b").animate({"opacity":"1"},1000);
  }, 2000);

  // CLICK DEVELEPER
  $('#click-jung').click(function() {
    $('.all-team').hide();
    $('#jung').slideDown();
    $("#jung").addClass('animated zoomIn');
  });
  $('#click-adit').click(function() {
    $('.all-team').hide();
    $('#adit').slideDown();
    $("#adit").addClass('animated zoomIn');
  });
  $('#click-gusman').click(function() {
    $('.all-team').hide();
    $('#gusman').slideDown();
    $("#gusman").addClass('animated zoomIn');
  });

  $('.btn-back').click(function() {
    $('.all-team').slideDown();
    $('.team-detail').slideUp();
  });

  // CONTACT INPUT TYPE

  $('input, textarea').on('focus', function() {
    $(this).parent().find('label').addClass('label-active');
    $(this).css('background-color','#f2f2f2');
    $(this).css('color', '#12a0d4');
  });
  $('input, textarea').on('focusout', function() {
    if (!this.value) {
      $(this).css('background-color','transparent');
      $(this).parent().find('label').removeClass('label-active');
    }
  });

  //

  // SMOTH SCROLL
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
      $('.navbar-mobile').fadeOut();
    }
  });

  // LL
  $(document).keyup(function(e) {
    if (e.keyCode === 27){
      $(".modal").hide();
      $('body').css('overflow-y','scroll');
    }
  });

});
