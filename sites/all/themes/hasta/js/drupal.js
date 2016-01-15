(function() {
  
  var $ = jQuery;


  Drupal.behaviors.gmap = {
    attach: function (context, settings) {
      $('.map', context).each(function() {
        var type = $(this).data('type'),
        address = $(this).data('address'),
        zoom = $(this).data('zoom');
        $(this).gMap({
          maptype: type,
          address: address,
          zoom: zoom,
        });          
      });
    }
  };

  Drupal.behaviors.href_click = {
    attach: function (context, settings) {
      var slider = new MasterSlider();
      // adds Arrows navigation control to the slider.
      slider.control('arrows');
      slider.control('bullets');
      
      slider.setup('masterslider' , {
         width:1600,    // slider standard width
         height:650,   // slider standard height
         space:0,
         speed:45,
         layout:'fullwidth',
         loop:true,
         preload:0,
         autoplay:true,
         view:"parallaxMask"
      });
    }
  };

  Drupal.behaviors.product_clicks = {
    attach: function (context, settings) {
    $('.product_preview_left .previews a', context).on("click",function(){
      var largeImage = $(this).attr('data-full');
      $('.selected').removeClass();
      $(this).addClass('selected');
      $('.full img').hide();
      $('.full img').attr('src', largeImage);
      $('.full img').fadeIn();
    }); // closing the listening on a click
    $('.full img', context).on("click",function(){
      var modalImage = $(this).attr('src');
      $.fancybox.open(modalImage);
    });
    }
  };

  Drupal.behaviors.countdown = {
    attach: function (context, settings) {
      $('.countdown').each(function() {
        $(this).countdown($(this).data('time')).on('update.countdown', function(event) {
          var $this = $(this).html(event.strftime(''
           + '<p><span>%-w</span> <b>week%!w</b></p> '
           + '<p><span>%-d</span> <b>day%!d</b></p> '
           + '<p><span>%H</span> <b>hr </b></p>'
           + '<p><span>%M</span> <b>min</b></p> '
           + '<p><span>%S</span> <b>sec</b></p>'));
        });
      });
    }
  };

  $(document).ready(function(){    
    full_height();
    parent_height();
    vertical_align();
    new WOW().init();
  });

  window.onresize = function(event) {
    full_height();
    parent_height();
    vertical_align();
  }

  function full_height() {
    $('.full-height').css({'height': $(window).height()});
  }

  function parent_height() {
    $('.parent-height').each(function() {
      $(this).css({'height': $(this).parent().height()});
    });
  }

  function vertical_align() {
    $('.vertical-align').each(function() {
      var padding = ($(this).parent().height() - $(this).height()) / 2 ;
      $(this).css({'padding-top': padding});  
    });
    
  }
    
}());


(function($, window, document, undefined) {
    'use strict';

    $('#grid-container.slider-portfolio').each(function() {
      var column = $(this).data('columns');
      $(this).cubeportfolio({
        layoutMode: 'slider',
        drag: true,
        auto: false,
        autoTimeout: 5000,
        autoPauseOnHover: true,
        showNavigation: true,
        showPagination: false,
        rewindNav: false,
        scrollByPage: false,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 1100,
            cols: column
        }, {
            width: 800,
            cols: column
        }, {
            width: 500,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        gapHorizontal: 0,
        gapVertical: 25,
        caption: 'overlayBottomReveal',
        displayType: 'lazyLoading',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageAnimation: 'fade',
        singlePageCallback: function(url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
            var indexElement = $(element).parents('.cbp-item').index(),
                item = singlePage.eq(indexElement);

            this.updateSinglePage(item.html());
        },

        // single page inline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'above',
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePage Inline content use the following method: this.updateSinglePageInline(yourContent)
        }
      });
    });


    var gridContainer = $('#grid-container.default-grid'),
      filtersContainer = $('#filters-container'),
      wrap, filtersCallback;


    $('#grid-container.default-grid').each(function() {
      var column = $(this).data('columns');
      $(this).cubeportfolio({
        layoutMode: 'grid',
        rewindNav: true,
        scrollByPage: false,
        defaultFilter: '*',
        animationType: 'flipOutDelay',
        gapHorizontal: 15,
        gapVertical: 15,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 1100,
            cols: column,
        }, {
            width: 800,
            cols: column,
        }, {
            width: 500,
            cols: 2
        }, {
            width: 320,
            cols: 1
        }],
        caption: 'overlayBottomReveal',
        displayType: 'lazyLoading',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageCallback: function(url, element) {
            // to update singlePage content use the following method: this.updateSinglePage(yourContent)
            var t = this;

            $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html',
                    timeout: 5000
                })
                .done(function(result) {
                    t.updateSinglePage(result);
                })
                .fail(function() {
                    t.updateSinglePage("Error! Please refresh the page!");
                });
        },

        // single page inline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'above',
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePage Inline content use the following method: this.updateSinglePageInline(yourContent)
        }
      });
    });

    $('#grid-container.cbp-l-grid-masonry-projects').each(function() {
      var column = $(this).data('columns');
      $(this).cubeportfolio({
          filters: '#filters-container',
          layoutMode: 'grid',
          defaultFilter: '*',
          animationType: 'slideDelay',
          gapHorizontal: 20,
          gapVertical: 20,
          gridAdjustment: 'responsive',
          mediaQueries: [{
              width: 1100,
              cols: column
          }, {
              width: 800,
              cols: column
          }, {
              width: 500,
              cols: 2
          }, {
              width: 320,
              cols: 1
          }],
          caption: 'overlayBottomAlong',
          displayType: 'bottomToTop',
          displayTypeSpeed: 100,

          // lightbox
          lightboxDelegate: '.cbp-lightbox',
          lightboxGallery: true,
          lightboxTitleSrc: 'data-title',
          lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
      });
    });

    $('#grid-container.simple-grid').each(function() {
      var column = $(this).data('columns');
      $(this).cubeportfolio({
        filters: '#filters-container',
          loadMore: '#loadMore-container',
          loadMoreAction: 'auto',
          layoutMode: 'grid',
          defaultFilter: '*',
          animationType: 'fadeOutTop',
          gapHorizontal: 0,
          gapVertical: 0,
          gridAdjustment: 'responsive',
          mediaQueries: [{
              width: 1600,
              cols: column
          }, {
              width: 1200,
              cols: column
          }, {
              width: 800,
              cols: column
          }, {
              width: 500,
              cols: 2
          }, {
              width: 320,
              cols: 1
          }],
          caption: 'zoom',
          displayType: 'lazyLoading',
          displayTypeSpeed: 100,

          // lightbox
          lightboxDelegate: '.cbp-lightbox',
          lightboxGallery: true,
          lightboxTitleSrc: 'data-title',
          lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',
      });
    });

    /*********************************
        init cubeportfolio
     *********************************/


    /*********************************
        add listener for filters
     *********************************/
    if (filtersContainer.hasClass('cbp-l-filters-dropdown')) {
        wrap = filtersContainer.find('.cbp-l-filters-dropdownWrap');

        wrap.on({
            'mouseover.cbp': function() {
                wrap.addClass('cbp-l-filters-dropdownWrap-open');
            },
            'mouseleave.cbp': function() {
                wrap.removeClass('cbp-l-filters-dropdownWrap-open');
            }
        });

        filtersCallback = function(me) {
            wrap.find('.cbp-filter-item').removeClass('cbp-filter-item-active');
            wrap.find('.cbp-l-filters-dropdownHeader').text(me.text());
            me.addClass('cbp-filter-item-active');
            wrap.trigger('mouseleave.cbp');
        };
    } else {
        filtersCallback = function(me) {
            me.addClass('cbp-filter-item-active').siblings().removeClass('cbp-filter-item-active');
        };
    }

    filtersContainer.on('click.cbp', '.cbp-filter-item', function() {
        var me = $(this);

        if (me.hasClass('cbp-filter-item-active')) {
            return;
        }

        // get cubeportfolio data and check if is still animating (reposition) the items.
        if (!$.data(gridContainer[0], 'cubeportfolio').isAnimating) {
            filtersCallback.call(null, me);
        }

        // filter the items
        gridContainer.cubeportfolio('filter', me.data('filter'), function() {});
    });


    /*********************************
        activate counter for filters
     *********************************/
    gridContainer.cubeportfolio('showCounter', filtersContainer.find('.cbp-filter-item'), function() {
        // read from url and change filter active
        var match = /#cbpf=(.*?)([#|?&]|$)/gi.exec(location.href),
            item;
        if (match !== null) {
            item = filtersContainer.find('.cbp-filter-item').filter('[data-filter="' + match[1] + '"]');
            if (item.length) {
                filtersCallback.call(null, item);
            }
        }
    });

})(jQuery, window, document);
