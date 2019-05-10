// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function () {
    "use strict";


    //
    //  fixed footer on bottom
    //
    var hh = jQuery('header').height(); // берем высоту шапки и суем в переменную hh
    var fh = jQuery('footer').height(); // то же самое с подвалом
    var wh = jQuery(window).height(); // высота всего окна
    var сh = wh - hh - fh; // считаем оптимальную высоту для блока с контентом
    jQuery('.site-content').css('min-height', сh); // применяем посчитанную высоту


    // jQuery('.lightgallery .carousel').lightGallery({
    //     thumbnail:true
    // });
    /*
    * Input telephone mask
    */

    // jQuery('.one-but-phone, #billing_phone, #tel').inputmask({"mask": "+7 (999) 999-9999"});


    exposureCarousel();
    lasyLoad();
    modal();
    carouselParthers();
    map();


    // end redy function
});
//
//  Modal
//
function modal() {
    "use strict";

    jQuery('.modal-overlay, .img-close-modal').click(function () {

        jQuery('.custom-modal ,  .custom-modal2, .modal-overlay').removeClass('show-modal');

        return false;
    });
    jQuery('.link-to-call.slider').click(function () {
        if (jQuery(this).hasClass('link-registration')) {
            jQuery('.custom-modal2, .modal-overlay').addClass('show-modal');

        } else {
            jQuery('.custom-modal, .modal-overlay').addClass('show-modal');

        }

        return false;


    });

}


//----------------------------------
//   Lasyload
//---------------------------------------

function lasyLoad() {
    "use strict";
    var lasyClass = '.lazy';
    if (jQuery(lasyClass).length) {
        jQuery(lasyClass).lazy();
    }

}

//----------------------------------
//   Carousel Expouse
//---------------------------------------


function exposureCarousel() {
    "use strict";
    var carouselClass = '.carousel-exposure';
    if (jQuery(carouselClass).length) {
        jQuery(carouselClass).slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false

            //   autoplay: true,
        });
        jQuery('.custom-pagination  .prev').click(function (e) {
            e.preventDefault();
            jQuery(this).parent().parent().parent().find('.carousel-exposure').slick('slickPrev');
        });
        jQuery('.custom-pagination  .next').click(function (e) {
            e.preventDefault();
            jQuery(this).parent().parent().parent().find('.carousel-exposure').slick('slickNext');
        });
        jQuery(carouselClass).on("afterChange", function (event, slick, currentSlide) {
            var currentSlideCount = parseInt(currentSlide + 1);

            if (currentSlideCount != '1' && currentSlideCount != slick.slideCount) {

                jQuery(this).parent().find('.custom-pagination .prev, .custom-pagination .next').removeClass('disable');
            } else if (slick.slideCount == currentSlideCount) {

                jQuery(this).parent().find('.custom-pagination .next').addClass('disable');

            } else {
                jQuery(this).parent().find('.custom-pagination .prev').addClass('disable');
            }

            jQuery(this).parent().find('.custom-pagination .paginaiton span').html(' ').html(currentSlide + 1);

        });
    }

}

//----------------------------------
//   Carousel Partners
//---------------------------------------
function carouselParthers() {
    "use strict";
    var carouselClass = jQuery('.list-partners');
    if (carouselClass.length) {
        carouselClass.slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            nextArrow: jQuery('.partner-arrow .next'),
            prevArrow: jQuery('.partner-arrow .prev'),
            dots: true

            //   autoplay: true,
        });

    }

}


//----------------------------------
// Map
//------------------------------------
function map() {
    "use strict";
    let $map = jQuery('#map');


    if ($map.length) {


        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 15,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(54.983693, 73.368633), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                    "featureType": "all",
                    "elementType": "geometry",
                    "stylers": [{"gamma": "0.82"}]
                }, {
                    "featureType": "all",
                    "elementType": "geometry.fill",
                    "stylers": [{"gamma": "1.21"}]
                }, {
                    "featureType": "all",
                    "elementType": "labels",
                    "stylers": [{"lightness": "-60"}]
                }, {
                    "featureType": "all",
                    "elementType": "labels.text",
                    "stylers": [{"gamma": "5.37"}]
                }, {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#557a46"}, {"lightness": "-39"}]
                }, {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
                }, {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
                }, {
                    "featureType": "landscape.natural",
                    "elementType": "geometry.fill",
                    "stylers": [{"saturation": "0"}]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
                }, {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{"color": "#dedede"}, {"lightness": 21}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
                }, {
                    "featureType": "water",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#42738d"}, {"gamma": "5.37"}]
                }]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(54.983693, 73.368633),
                map: map,
                title: 'Музей'
            });
        }

        google.maps.event.addDomListener(window, 'load', init);

    }
}