/**
 * Show gif animation for hero section
 *
 * @param alt
 */
var showAnimation = function (alt) {
  if ($(document).width() >= 768) {
    var element = $('.' + alt);
    if (!element.hasClass('active')) {
      element.addClass('active');
    }
  }
};

/**
 * Hide gif animation for hero section
 *
 * @param alt
 */
var hideAnimation = function (alt) {
  var element = $('.' + alt);
  if (element.hasClass('active')) {
    element.removeClass('active');
  }
};

/**
 * Project Landing page blue button/hero shadow trigger
 */
$(".week-2-scroller").hover(function () {
  $(".week.week-1").toggleClass("active");
});
$(".week-3-scroller").hover(function () {
  $(".week.week-2").toggleClass("active");
});
$(".week-6-scroller").hover(function () {
  $(".week.week-3").toggleClass("active");
});
$(".week-5-scroller").hover(function () {
  $(".week.week-4").toggleClass("active");
});
$(".week-4-scroller").hover(function () {
  $(".week.week-5").toggleClass("active");
});
$(".week-1-scroller").hover(function () {
  $(".week.week-6").toggleClass("active");
});

/**
 * Area click to scroll events for project landing
 */
$('area[href^="#week-1-scroller"]').click(function() {
  $('.week-1-scroller').click();
});
$('area[href^="#week-2-scroller"]').click(function() {
  $('.week-2-scroller').click();
});
$('area[href^="#week-3-scroller"]').click(function() {
  $('.week-3-scroller').click();
});
$('area[href^="#week-4-scroller"]').click(function() {
  $('.week-4-scroller').click();
});
$('area[href^="#week-5-scroller"]').click(function() {
  $('.week-5-scroller').click();
});
$('area[href^="#week-6-scroller"]').click(function() {
  $('.week-6-scroller').click();
});

/**
 * Listen when document is ready
 */
$(document).ready(function () {

  var userSignUp = false;

  /**
   * Make links scroll to appropriate section
   */
  $("a.anchors-to-section").click(function () {
    var elementClick = $(this).attr("href");
    var destination = $(elementClick).offset().top;

    if (navigator.userAgent.indexOf('Safari')) {
      $('body').animate({scrollTop: destination}, 1100);
    } else {
      $('html').animate({scrollTop: destination}, 1100);
    }

    return false;

  });

  $(".mobile-dropdown li a, .navbar-second li a").click(function () {
    var elementClick = $(this).attr("href");
    var destination = $(elementClick).offset().top;

    if (navigator.userAgent.indexOf('Safari')) {
      $('body').animate({scrollTop: destination}, 1100);
    } else {
      $('html').animate({scrollTop: destination}, 1100);
    }

    return false;

  });

  /**
   * Hero element
   *
   * @type {*|jQuery|HTMLElement}
   */
  var hero_section = $('.archive-project .hero');

  /**
   * Sign up click event handler
   */
  // $(document).on('click', '.sign-up', function (e) {
  //   e.preventDefault();

  //   $('.start-screen').hide();
  //   $('.arrow-background').hide();
  //   $('.post-camp-message').hide();
  //   $('.sign-up-screen').show();
  // });

  /**
   * Sign in click event handler
   */
  // $(document).on('click', '.sign-in', function (e) {
  //   e.preventDefault();

  //   $('.start-screen').hide();
  //   $('.arrow-background').hide();
  //   $('.thank-you-screen').show();

  //   userSignUp = true; // User already have account
  //   $.cookie('user_sign_up', true);

  //   $('.week-modal-wrapper').hide();
  // });

  /**
   * Want counts form submit event handler
   */
  $(document).on('submit', '.whatcounts-signup', function (e) {
    e.preventDefault();
    $.post("http://whatcounts.com/bin/listctrl", $('.whatcounts-signup').serialize());
    $('.sign-up-screen').hide();
    $('.thank-you-screen').show();
    
    userSignUp = true; // User signed up with whatcounts
    $.cookie('user_sign_up', true);

  });

  /**
   * Start now click event handler
   */
  // $(document).on('click', '.start-now', function (e) {
  //   e.preventDefault();

  //   hero_section.removeClass('show-content');
  //   $('.thank-you-screen').hide();

  //   userSignUp = true; // User signed up with whatcounts
  //   $.cookie('user_sign_up', true);

  //   if ($(document).width() < 769) {
  //     hero_section.addClass('show-content');
  //     $('.week-modal-wrapper').show();
  //   }
  // });

  /**
   * Show needed week modal upon map area click event
   */
  $(document).on('click', '.animated-areas area', function (e) {
    e.preventDefault();

    var week = $(this).attr('alt');

    $('.week-modal-wrapper').hide(); // Hide all modals in case we open modal twice
    $('.week-modal-wrapper.week-' + week).show();
    hero_section.addClass('show-content');
  });

  /**
   * Close modal click event handler
   */
  $(document).on('click', '.week-modal-wrapper .close-modal', function (e) {
    e.preventDefault();

    $(this).closest('.week-modal-wrapper').hide();
    hero_section.removeClass('show-content');
  });

  /**
   * Close modal click event handler on overlay
   */
  $(document).on('click', '.hero.show-content', function(e) {

    if ($(e.target).hasClass('show-content') && $(document).width() > 769) {
      var week_wrappers = $('.week-modal-wrapper');
      if ( week_wrappers.is(':visible')) {
        week_wrappers.hide();
        hero_section.removeClass('show-content');
      }
    }
  });

  /**
   * Hero paragraph toggle on mobile handler
   * .show-content will work only on mobile
   */
  $(document).on('click', '.show-content .week-modal-wrapper', function (e) {
    if ($(document).width() < 769) {
      e.preventDefault();

      if ($(this).hasClass('active')) {
        if ($(this).find('.start-week').length > 0) {
          window.location = $(this).find('.start-week').attr('href');
        }
        return false;
      }

      $('.show-content .week-modal-wrapper.active').removeClass('active').find('.hero-paragraph').slideToggle();

      $(this).find('.hero-paragraph').slideToggle();
      $(this).addClass('active');
    }
  });

  /**
   * Mobile dropdown menu handler
   */
  $(document).on('click', '.mobile-dropdown > a', function (e) {
    e.preventDefault();

    $(this).toggleClass('active');

    $(this).next().slideToggle();
  });

  /**
   * Check of user is already signed up and show interactive hero
   */
  // if ($.cookie('user_sign_up') == 'true') {
  //   $('.sign-in').click();
  // }

  /**
   * Initialize fancybox for videos
   */
  $("body:not(.single-camp_day) .fancybox").on("click", function (e) {
    e.preventDefault();

    $.fancybox({
      href: this.href,
      type: $(this).data("fancybox-type")
    }); // fancybox
    return false
  }); // on

  /**
   * Check if we're on a page that has camps list
   *
   * @type {*|jQuery|HTMLElement}
   */
  var camp_list = $('.camp-search .map-list');
  if (camp_list.length > 0) {

    /**
     * Declare variables
     */
    var camps_json = JSON.parse(camp_list.attr('data-addresses'));
    var countries_continents_json = JSON.parse(camp_list.attr('data-countries-continents'));
    var search_input = $('.camp-list-search');
    var filter_button = $('.camp-list-filter button');
    var filter_button_continent = $('.camp-list-filter-continents button');
    var filter_button_caret = filter_button.find('.caret').prop('outerHTML');
    var selected_country = '';
    var selected_continent = '';
    var inputted_search_text = '';
    var filtered_json = camps_json;
    var filtered_by_text_json = '';
    var filtered_content = '';
    var countries_available = '';
    var countries_content = '';
    var searching = false;

    /**
     * Helper function: delay
     */
    var delay = (function(){
      var timer = 0;
      return function(callback, ms){
        clearTimeout (timer);
        timer = setTimeout(callback, ms);
      };
    })();

    /**
     * Helper function: filter by provided values
     */
    var make_filtering = function() {

      /**
       * Filter by selected country
       */
      if (selected_country != '') {
        filtered_json = $.grep(camps_json, function (n, i) {
          return n.Country === selected_country;
        });
      } else {
        filtered_json = camps_json;
      }

      /**
       * Filter by selected continent
       */
      if (selected_continent != '') {
        filtered_json = $.grep(filtered_json, function (n, i) {
          return n.Continent === selected_continent;
        });
      }

      /**
       * Filter json by text input if it exists
       */
      if (inputted_search_text != '') {
        filtered_by_text_json = filter_by_input(inputted_search_text);
      } else {
        filtered_by_text_json = filtered_json;
      }
    };

    /**
     * Helper function: Re-render table with filtered content
     */
    var render_table = function() {
      /**
       * Populate filtered content into html
       */
      filtered_content = '';
      $.each(filtered_by_text_json, function(key, camp){
        filtered_content += '<tr>' +
        '<td>' + camp.Country + '</td>' +
        '<td>' + camp.State + '</td>' +
        '<td>' + camp['Postal Code'] + '</td>' +
        '<td>' + camp.City + '</td>' +
        '<td><a href="' + camp.Website + '">' + camp.Company + '</a></td>' +
        '<td>' + camp.Accepting + '</td>' +
        '</tr>';
      });

      /**
       * Put prepared html into tbody tag
       */
      camp_list.find('tbody').html(filtered_content);
    };

    /**
     * Helper function: filter prepared json with inputted text
     */
    var filter_by_input = function(inputted_text) {

      /**
       * Filter already prepared json (if filtered by countries) with inputted text
       */
      return $.grep(filtered_json, function (n, i) {
        var value_to_compare = inputted_text.toLowerCase();

        var country = n.Country.toLowerCase();
        var state = n.State.toLowerCase();
        var zipcode = n['Postal Code'].toLowerCase();
        var city = n.City.toLowerCase();
        var company = n.Company.toLowerCase();
        return (country.indexOf(value_to_compare) > -1) || (state.indexOf(value_to_compare) > -1) || (zipcode.indexOf(value_to_compare) > -1) || (city.indexOf(value_to_compare) > -1) || (company.indexOf(value_to_compare) > -1);
      });
    };

    /**
     * Country filter handler
     */
    $(document).on('click', '.camp-list-filter .dropdown-menu a', function (e) {
      e.preventDefault();

      selected_country = $(this).text();

      /**
       * Check if we want to show all countries
       */
      if (selected_country == 'Show all') {
        selected_country = '';
        filter_button.html('Country ' + filter_button_caret);
      } else {
        filter_button.html(selected_country + ' ' + filter_button_caret);
      }

      make_filtering();

      render_table();
    });

    /**
     * Continent filter handler
     */
    $(document).on('click', '.camp-list-filter-continents .dropdown-menu a', function (e) {
      e.preventDefault();

      selected_continent = $(this).text();

      /**
       * Clear up selected country
       *
       * @type {string}
       */
      selected_country = '';
      filter_button.html('Country ' + filter_button_caret);

      /**
       * Check if we want to show all continents
       */
      if (selected_continent == 'Show all') {
        selected_continent = '';
        filter_button_continent.html('Continent ' + filter_button_caret);
      } else {
        filter_button_continent.html(selected_continent + ' ' + filter_button_caret);
      }

      /**
       * Filter countries by continent if needed and build countries dropdown
       */
      countries_content = '<li><a href="#">Show all</a></li>';
      if (selected_continent != '') {
        countries_available = $.grep(Object.keys(countries_continents_json), function (n, i) {
          return countries_continents_json[n].Continent === selected_continent;
        });

        $.each(countries_available, function(key, value){
          countries_content += '<li><a href="#">' + countries_continents_json[value].Country + '</a></li>';
        });
      } else {
        countries_available = countries_continents_json;

        $.each(countries_available, function(key, value){
          countries_content += '<li><a href="#">' + value.Country + '</a></li>';
        });
      }

      /**
       * Fill in countries dropdown
       */
      $('.camp-list-filter .dropdown-menu').html(countries_content);

      make_filtering();

      render_table();
    });

    /**
     * Input search text handler
     */
    search_input.bind("keyup change", function(e) {

      /**
       * Check if we're already searching
       */
      if (searching) {
        return false;
      }

      /**
       * Declare that we're searching
       *
       * @type {boolean}
       */
      searching = true;

      /**
       * Create reference for binded element
       *
       * @type {*|jQuery|HTMLElement}
       */
      var me = $(this);

      /**
       * Put search on a delay when user finishes inputting and make search
       */
      delay(function(){
        inputted_search_text = me.val();
        filtered_by_text_json = filter_by_input(inputted_search_text);

        searching = false;

        render_table();
      }, 1000 );
    });

  }

  /**
   * Scroll up to sign up form or Show message You are already Signed Up!
   */
  // $(document).on('click', '.sign-in-trigger', function (e) {
  //   // e.preventDefault();

  //   if (!userSignUp) {
  //     // scroll up and show form
  //     var elementClick = $(this).attr("href");
  //     var destination = $(elementClick).offset().top;

  //     if (navigator.userAgent.indexOf('Safari')) {
  //       $('body').animate({scrollTop: destination}, 1100);
  //     } else {
  //       $('html').animate({scrollTop: destination}, 1100);
  //     }

  //     $('.sign-up').click();

  //     return false;

  //   } else {

  //     var me = $(this);

  //     me.popover('toggle');
  //     setTimeout(function () {
  //       me.popover('hide');
  //     }, 6000);
  //   }
  // });

  // MOBILE HAMBURGER BAR ANIMATION
  $(".navbar-toggle").on("click", function () {
    $(this).toggleClass("active-bar");
  });


  /**
   * Initialize the header navigation tooltips for descriptive text
   */
  $('#menu-header-main-menu a').tooltip();


  /**
   * Smooth scroll for internal links
   */
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

});