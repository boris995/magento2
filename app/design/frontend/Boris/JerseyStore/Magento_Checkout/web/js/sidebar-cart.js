define([
    'jquery'
], function ($) {
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
            closedOverlayClass = 'opacity-0';

        function openCart() {
            $dialog.removeClass('hidden pointer-events-none').addClass(activeClasses);
            window.requestAnimationFrame(function () {
                $overlay.removeClass(closedOverlayClass).addClass(openedOverlayClass);
                $panel.removeClass(closedPanelClass).addClass(openedPanelClass);
                $('body').addClass('overflow-hidden');
            });
        }

        function closeCart() {
            $overlay.removeClass(openedOverlayClass).addClass(closedOverlayClass);
            $panel.removeClass(openedPanelClass).addClass(closedPanelClass);
            $dialog.removeClass(activeClasses).addClass('pointer-events-none');
            $('body').removeClass('overflow-hidden');
        }

        $root.on('dropdowndialogopen', openCart);
        $root.on('dropdowndialogclose', closeCart);

        $overlay.on('click', function () {
            $dialog.dropdownDialog('close');
        });
    };
});
