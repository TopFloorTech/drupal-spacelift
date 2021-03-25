import $ from 'jquery';
import AOS from 'aos';
import lozad from 'lozad';

Drupal.behaviors.FeaturedCaseStudiesComponent = {
  attach: (context) => {
    'use strict';

    const medium = 640;
    const large = 1024;

    $('.FeaturedCaseStudies-slider', context)
      .on('init', function (event, slick) {
        // console.log("initialized");
        AOS.init();
        const observer = lozad(); // lazy loads elements with default selector as ".lozad"
        observer.observe();
      })
      .slick({
        arrows: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: large,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: medium,
            settings: {
              slidesToShow: 1,
            }
          }
        ]
      });
  },
};
