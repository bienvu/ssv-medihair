/*jslint browser: true*/
/*global $, jQuery, Modernizr, enquire*/
(function (window, document, $) {
  var $html = $('html'),
    mobileOnly = "screen and (max-width:47.9375em)", // 767px.
    mobileLandscape = "(min-width:30em)", // 480px.
    tablet = "(min-width:48em)"; // 768px.
  // Contact form 7 redirect after submit.
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '5' == event.detail.contactFormId ) {
        window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you/';
    }else if('613' == event.detail.contactFormId){
        window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you-e-news/';
    }
    // else if('210' == event.detail.contactFormId) {
    //     window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you-request/';
    // }
  }, false );

  // Function here.
  // $('.box-faq__question').each(function() {
  //   $(this).on('click', function (e) {
  //     if ($(this).hasClass('is-show')) {
  //       $('.box-faq__question').removeClass('is-show');
  //       $('.box-faq__answer').slideUp();
  //       $(this).next().slideUp();
  //     } else {
  //       $('.box-faq__question').removeClass('is-show');
  //       $(this).addClass('is-show');
  //       $('.box-faq__answer').slideUp();
  //       $(this).next().slideDown();
  //     }
  //   });
  // });

  // Js code.
  $( document ).ready(function() {
    // Remove attr title.
    $('a, img').removeAttr('title');

    // Add placeholder to quiz validate form.
    $('.wpcf7-quiz').attr('placeholder', 'text-here');

    // Table responsive
    var $table = $('table');
    if ($table.length && !$table.parent().hasClass('table-responsive')) {
      $table.not($table.find('table')).wrap('<div class="table-responsive"></div>');
    }

    // Anchor scroll
    // $("a.anchor").click(function(e) {
    //   e.preventDefault();
    //   var aid = $(this).attr("href");
    //   $('html,body').animate({scrollTop: $(aid).offset().top - 20 },'slow');
    // });

    //scroll to next section
    $('.js-scroll-down').click(function() {
      var $temp = $('.header').height();
      var $next = $(this).parent().parent().next().offset().top - $temp;
      $('html, body').animate({
        scrollTop: $next
      }, 'slow');
    });

    //Toggle Menu
    $('.menu-bars').click(function (e) {
      if ($(this).hasClass('is-show')) {
        $(this).removeClass('is-show');
        $(this).parent().parent().next().slideUp();
      }else {
        $(this).addClass('is-show');
        $(this).parent().parent().next().slideDown();
      }
      //body scroll hidden
      if($('body').hasClass('no-scroll')) {
        $('body').removeClass('no-scroll');
      } else {
        $('body').addClass('no-scroll');
      }
    });

    // Toggle menu expend
    $('.header .menu-expend > a').click(function(e) {
      if($(window).width() < 1180) {
        e.preventDefault();

        if($(this).parent().hasClass('is-active')) {
          $(this).parent().removeClass('is-active');
          $(this).next().slideUp();
        }else {
          $('.menu-expend').removeClass('is-active');
          $(this).parent().addClass('is-active');
          $('.sub-menu').slideUp();
          $(this).next().slideDown();
        }
      }
    });

    //slick for banner
    $('.js-slider').slick({
      dots: true,
      autoplay: true,
      speed: 2000,
      fade: true,
      autoplaySpeed: 2000,
      prevArrow: '<span class="slick-prev slick-arrow" aria-label="Previous" type="span">Previous</span>',
      nextArrow: '<span class="slick-next slick-arrow" aria-label="Next" type="span">Next</span>',
      customPaging: function(slider, i) {
        return '<span class="dot"></span>';
      },
      responsive: [{
        breakpoint: 1024,
        settings: {
          dots: false,
          arrows: true
        }
      }]
    });

    // Paralax.
    var wdHeight = $(window).height();
    $(window).on('scroll', function () {
      var scrollTop = $(this).scrollTop(),
          heroHeight = $('.banner').outerHeight();

      imageEffect = { 'transform': 'translateY(' + -(scrollTop/6) + 'px)' };
      $('.banner__images').css(imageEffect);

      if($('.content-wrap').length) {
        var $contentOffsetTop = $('.content-wrap').offset().top;
        if(scrollTop > $contentOffsetTop) {
          $('.banner').addClass('is-active');
        } else {
          $('.banner').removeClass('is-active');
        }
      }
    });

    // FAQ
    $('.box-faq__item').click(function () {
      if($(window).width() < 768) {
        if( !$(this).hasClass('expanded')) {
          //$('.box-faq__item').not(this).find('.box-faq__answer').hide();
          $(this).find('.box-faq__answer').slideToggle();
          $(this).addClass('expanded');
          //$('.box-faq__item').not(this).removeClass('expanded');
        } else {
          //$('.box-faq__item').not(this).find('.box-faq__answer').hide();
          $(this).removeClass('expanded');
          $(this).find('.box-faq__answer').slideToggle();
        }
      }
    });

    // placeholder
    $('.wpcf7-quiz').attr('placeholder', 'What is the first letter in the word Medihair?*');

    // Read more - Read less.
    $('.js-show-more').on('click', function (e) {
      e.preventDefault();

      if(!$(this).parents('.list-member__content').hasClass('is-show')) {
        $(this).parents('.list-member__content').addClass('is-show');
        $(this).hide();
      } else {
        $(this).parents('.list-member__content').removeClass('is-show');
        $(this).parents('.list-member__content').find('.js-show-more').show();
      }
    });

  });
}(this, this.document, this.jQuery));
