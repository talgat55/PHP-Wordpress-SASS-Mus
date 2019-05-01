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



    jQuery('.lightgallery .carousel').lightGallery({
        thumbnail:true
    });
    /*
    * Input telephone mask
    */

    jQuery('.one-but-phone, #billing_phone, #tel').inputmask({"mask": "+7 (999) 999-9999"});

    // Accordion();
    /*
    *  Match height
    */
    jQuery('.block-event-text-block,  .block-event-walp , .match-height, .news-img-block ').matchHeight();
    jQuery(' .block-event-text-block h3').matchHeight();
    jQuery('.block-event-img').matchHeight();

// end redy function
//----------------------------------
// Map
//------------------------------------
     if(jQuery('.page-template-page-about #map').length){
         ymaps.ready(function () {
             var myMap = new ymaps.Map('map', {
                     center: [54.992441, 73.367044],
                     zoom: 15,
                     controls: []
                 }, {
                     // searchControlProvider: 'yandex#search'
                 }),

                 // Создаём макет содержимого.
                 /*  MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                       '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                   ),*/

                 myPlacemark = new ymaps.Placemark([54.992441, 73.367044], {
                     id: '1'
                 }, {

                     // Опции.
                     // Необходимо указать данный тип макета.
                     iconLayout: 'default#image',
                     // Своё изображение иконки метки.
                     //
                     iconImageHref: 'http://xn--55-6kcpecta3ahjucld1b2m.xn--p1ai/wp-content/themes/asmart/assets/images/marker.png',
                     // // Размеры метки.
                     iconImageSize: [27, 37],
                     // // Смещение левого верхнего угла иконки относительно
                     // // её "ножки" (точки привязки).
                     iconImageOffset: [-14, -37]
                 });


             myMap.geoObjects

                 .add(myPlacemark);

             myMap.behaviors.disable('scrollZoom');
             myMap.behaviors.disable('multiTouch');
             if(jQuery(window).width() < 769){
                 myMap.behaviors.disable('drag');
             }



         });

    } else if (jQuery('#map').length) {

         ymaps.ready(function () {
             var myMap = new ymaps.Map('map', {
                     center: [54.992441, 73.367044],
                     zoom: 15,
                     controls: ['zoomControl']
                 }, {
                     // searchControlProvider: 'yandex#search'
                 }),

                 // Создаём макет содержимого.
                 /*  MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                       '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                   ),*/

                 myPlacemark = new ymaps.Placemark([54.992441, 73.367044], {
                     id: '1'
                 }, {

                     // Опции.
                     // Необходимо указать данный тип макета.
                     iconLayout: 'default#image',
                     // Своё изображение иконки метки.
                     //
                     iconImageHref: 'http://xn--55-6kcpecta3ahjucld1b2m.xn--p1ai/wp-content/themes/asmart/assets/images/marker.png',
                     // // Размеры метки.
                     iconImageSize: [27, 37],
                     // // Смещение левого верхнего угла иконки относительно
                     // // её "ножки" (точки привязки).
                     iconImageOffset: [-14, -37]
                 });


             myMap.geoObjects

                 .add(myPlacemark);

             myMap.behaviors.disable('scrollZoom');
             myMap.behaviors.disable('multiTouch');

         if(jQuery(window).width() < 769){
             myMap.behaviors.disable('drag');
         }


         });
     }


    HoverEffectsMedia();
    ExposureCarousel();
    LasyLoad();

    //
    //  Modal
    //


    jQuery('.modal-overlay, .img-close-modal').click(function () {

        jQuery('.custom-modal ,  .custom-modal2, .modal-overlay').removeClass('show-modal');

        return false;
    });



    jQuery('.link-to-call.slider').click(function () {
        if(jQuery(this).hasClass('link-registration')){
            jQuery('.custom-modal2, .modal-overlay').addClass('show-modal');

        }else{
            jQuery('.custom-modal, .modal-overlay').addClass('show-modal');

        }

        return false;


    });




});

//
//  Hover event for  media block in home page
//
function HoverEffectsMedia() {
    jQuery(".media-block-bg-walp-content").hover(
        function () {
            var $index = jQuery(this).index();
            if ($index == '1') {
                jQuery(".media-block-bg").eq($index).addClass('media-zindex');
                jQuery(".media-block-bg-walp-content").eq($index).addClass('media-zindex');
            }

        }, function () {
            jQuery(this).removeClass('media-zindex');
            jQuery(".media-block-bg").removeClass('media-zindex');

        }
    );
    jQuery(".media-block-bg.second").hover(
        function () {
            jQuery(this).addClass('media-zindex');
            var $index = jQuery(this).index();

            jQuery('.section-media-block').find('.media-block-bg-walp-content').eq($index).addClass('media-zindex');


        }, function () {
            jQuery('.media-block-bg-walp-content').removeClass('media-zindex');
            jQuery(".media-block-bg").removeClass('media-zindex');

        }
    );


}


//----------------------------------
//   Lasyload
//---------------------------------------

function LasyLoad() {
    "use strict";

    var LasyClass =  '.lazy';

    if(jQuery(LasyClass).length){
        jQuery(LasyClass).lazy();
    }


}

//----------------------------------
//   Carousel Expouse
//---------------------------------------


function ExposureCarousel() {
    var CarouselClass = '.carousel-exposure';
    if(jQuery(CarouselClass).length){
        jQuery(CarouselClass).slick({
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: false

         //   autoplay: true,
        });
        jQuery('.custom-pagination  .prev').click(function(e) {
            e.preventDefault();
            jQuery(this).parent().parent().parent().find('.carousel-exposure').slick('slickPrev');
        });
        jQuery('.custom-pagination  .next').click(function(e) {
            e.preventDefault();
            jQuery(this).parent().parent().parent().find('.carousel-exposure').slick('slickNext');
        });
        jQuery(CarouselClass).on("afterChange", function (event, slick, currentSlide) {
            jQuery(this).parent().find('.custom-pagination .paginaiton span').html(' ').html(currentSlide + 1);

        });
    }

}