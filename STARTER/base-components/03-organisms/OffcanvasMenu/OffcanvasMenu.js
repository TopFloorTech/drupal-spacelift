// this is sitewide

import $ from 'jquery';

$(document).ready(function ($) {

    // I need to override some of the Foundation JS in order to combine the Offcanvas Drilldown and Accordion Menu
    // Remove the automatically applied drilldown classes to the submenus if the accordion menu class is present.
    // open.zf.drilldown is when a submenu is opened

    function OffCanvasOverrides() {
        $('.is-accordion-submenu-parent').removeClass('is-drilldown-submenu-parent is-drilldown-submenu-item');
        $('.is-accordion-submenu').removeClass('is-drilldown-submenu drilldown-submenu-cover-previous');
        $('.is-accordion-submenu .js-drilldown-back').hide();
    }

    $('#OffcanvasMenu-menu').on('open.zf.drilldown', OffCanvasOverrides);

    // Next, I need to copy the top level list item and make the heading on the second page

    $("#OffcanvasMenu-menu li.has-children > a").each(function () {
        const menuTitle = $(this).html();
        const childMenu = $(this).next("ul");
        const classes = $(this)
            .parent()
            .hasClass("current_page_item")
            ? "parent parent_current_page_item"
            : "parent OffcanvasMenu-parent";

        $(this)
            .clone()
            .prependTo(childMenu)
            .text(menuTitle)
            .wrap(`<li class="${classes}"></li>`);
        const backButton = childMenu.children('.js-drilldown-back');
        backButton.prependTo(childMenu);
    });
});

