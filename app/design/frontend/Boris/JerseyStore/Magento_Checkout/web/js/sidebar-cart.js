define([
    'jquery',
    'Magento_Customer/js/customer-data'
], function ($, customerData) {
    'use strict';

    return function (config, element) {
        var $root = $(element),
            $dialog = $root.find('[data-role="dropdownDialog"]'),
            $overlay = $root.find('[data-role="minicart-overlay"]'),
            $panel = $root.find('[data-role="minicart-panel"]'),
            activeClasses = 'pointer-events-auto',
            closedPanelClass = 'translate-x-full',
            openedPanelClass = 'translate-x-0',
            openedOverlayClass = 'opacity-100',
            closedOverlayClass = 'opacity-0',
            scrollLockedClass = 'overflow-hidden',
            lockedScrollTop = 0;

        function refreshCartItems() {
            $root.trigger('contentLoading');
            customerData.invalidate(['cart']);
            customerData.reload(['cart'], true).always(function () {
                $root.trigger('contentUpdated');
            });
        }

        function lockPageScroll() {
            lockedScrollTop = window.pageYOffset || document.documentElement.scrollTop || 0;

            $('html').addClass(scrollLockedClass);
            $('body')
                .addClass(scrollLockedClass)
                .css({
                    position: 'fixed',
                    top: -lockedScrollTop + 'px',
                    left: 0,
                    right: 0,
                    width: '100%'
                });
        }

        function unlockPageScroll() {
            $('html').removeClass(scrollLockedClass);
            $('body')
                .removeClass(scrollLockedClass)
                .css({
                    position: '',
                    top: '',
                    left: '',
                    right: '',
                    width: ''
                });

            window.scrollTo(0, lockedScrollTop);
        }

        function openCart() {
            refreshCartItems();
            $dialog.removeClass('hidden pointer-events-none').addClass(activeClasses);
            window.requestAnimationFrame(function () {
                $overlay.removeClass(closedOverlayClass).addClass(openedOverlayClass);
                $panel.removeClass(closedPanelClass).addClass(openedPanelClass);
                lockPageScroll();
            });
        }

        function closeCart() {
            $overlay.removeClass(openedOverlayClass).addClass(closedOverlayClass);
            $panel.removeClass(openedPanelClass).addClass(closedPanelClass);
            $dialog.removeClass(activeClasses).addClass('pointer-events-none');
            unlockPageScroll();
        }

        $root.on('dropdowndialogopen', openCart);
        $root.on('dropdowndialogclose', closeCart);

        $overlay.on('click', function () {
            $dialog.dropdownDialog('close');
        });
    };
});
