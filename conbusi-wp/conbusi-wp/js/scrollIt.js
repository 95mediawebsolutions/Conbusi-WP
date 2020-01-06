/**
 * ScrollIt
 * ScrollIt.js(scroll•it•dot•js) makes it easy to make long, vertically scrolling pages.
 *
 * Latest version: https://github.com/cmpolis/scrollIt.js
 *
 * License <https://github.com/cmpolis/scrollIt.js/blob/master/LICENSE.txt>
 */
(function(jQuery) {
    'use strict';

    var pluginName = 'ScrollIt',
        pluginVersion = '1.0.3';

    /*
     * OPTIONS
     */
    var defaults = {
        upKey: 38,
        downKey: 40,
        easing: 'linear',
        scrollTime: 600,
        activeClass: 'active',
        onPageChange: null,
        topOffset : 0
    };

    jQuery.scrollIt = function(options) {

        /*
         * DECLARATIONS
         */
        var settings = jQuery.extend(defaults, options),
            active = 0,
            lastIndex = jQuery('[data-scroll-index]:last').attr('data-scroll-index');

        /*
         * METHODS
         */

        /**
         * navigate
         *
         * sets up navigation animation
         */
        var navigate = function(ndx) {
            if(ndx < 0 || ndx > lastIndex) return;

            var targetTop = $('[data-scroll-index=' + ndx + ']').offset().top + settings.topOffset + 1;
            jQuery('html,body').animate({
                scrollTop: targetTop,
                easing: settings.easing
            }, settings.scrollTime);
        };

        /**
         * doScroll
         *
         * runs navigation() when criteria are met
         */
        var doScroll = function (e) {
            var target = $(e.target).closest("[data-scroll-nav]").attr('data-scroll-nav') ||
            jQuery(e.target).closest("[data-scroll-goto]").attr('data-scroll-goto');
            navigate(parseInt(target));
        };

        /**
         * keyNavigation
         *
         * sets up keyboard navigation behavior
         */
        var keyNavigation = function (e) {
            var key = e.which;
            if(jQuery('html,body').is(':animated') && (key == settings.upKey || key == settings.downKey)) {
                return false;
            }
            if(key == settings.upKey && active > 0) {
                navigate(parseInt(active) - 1);
                return false;
            } else if(key == settings.downKey && active < lastIndex) {
                navigate(parseInt(active) + 1);
                return false;
            }
            return true;
        };

        /**
         * updateActive
         *
         * sets the currently active item
         */
        var updateActive = function(ndx) {
            if(settings.onPageChange && ndx && (active != ndx)) settings.onPageChange(ndx);

            active = ndx;
            jQuery('[data-scroll-nav]').removeClass(settings.activeClass);
            jQuery('[data-scroll-nav=' + ndx + ']').addClass(settings.activeClass);
        };

        /**
         * watchActive
         *
         * watches currently active item and updates accordingly
         */
        var watchActive = function() {
            var winTop = jQuery(window).scrollTop();

            var visible = jQuery('[data-scroll-index]').filter(function(ndx, div) {
                return winTop >= jQuery(div).offset().top + settings.topOffset &&
                winTop < jQuery(div).offset().top + (settings.topOffset) + jQuery(div).outerHeight()
            });
            var newActive = visible.first().attr('data-scroll-index');
            updateActive(newActive);
        };

        /*
         * runs methods
         */
        jQuery(window).on('scroll',watchActive).scroll();

        jQuery(window).on('keydown', keyNavigation);

        jQuery('body').on('click','[data-scroll-nav], [data-scroll-goto]', function(e){
            e.preventDefault();
            doScroll(e);
        });

    };
}(jQuery));
