;(function($) {
    "use strict";
    
    var nav_offset_top = $('header').height(); 
    /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

	//* Navbar Fixed  
    function navbarFixed(){
        if ( $('.main_menu_area, .search_area').length ){ 
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();   
                if (scroll >= nav_offset_top ) {
                    $(".main_menu_area, .search_area").addClass("navbar_fixed");
                } else {
                    $(".main_menu_area, .search_area").removeClass("navbar_fixed");
                }
            });
        };
    };
    navbarFixed();
    
    
    /*----------------------------------------------------*/
    /*  Main Slider js
    /*----------------------------------------------------*/
    function main_slider(){
        if ($('#main_slider').css('display') != 'none' &&  $('#main_slider').length ){
            $("#mobile_slider").remove();
            $("#main_slider").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                responsiveLevels: [1920, 1024, 480],
                delay:5000,
                disableProgressBar:"on",
                gridwidth: [1920,480],
                gridheight: [1080,720],
                visibilityLevels:[1920, 480],
                spinner: 'spinner4',
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:820,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 5,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 5,
                            v_offset: 0
                        }
                    }
                },

                lazyType:"smart",
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    
    function mobile_slider(){
        if ($('#mobile_slider').css('display') != 'none' && $('#mobile_slider').length ){
            $("#main_slider").remove();
            $("#mobile_slider").revolution({
                sliderType:"standard",
                sliderLayout:"auto",
                responsiveLevels: [1920, 1024, 480],
                delay:5000,
                disableProgressBar:"on",
                gridwidth: [1920,480],
                gridheight: [1080,720],
                visibilityLevels:[1920, 480],
                spinner: 'spinner4',
                navigation: {
                    onHoverStop: 'off',
                    touch:{
                        touchenabled:"on"
                    },
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:820,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 5,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 5,
                            v_offset: 0
                        }
                    }
                },

                lazyType:"smart",
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            })
        }
    }
    main_slider();
    mobile_slider();
    /*----------------------------------------------------*/
    /* Offcanvas Menu js
    /*----------------------------------------------------*/
    $('.icon_search, .ti-close').on('click',function(){
        if( $(".search_area").hasClass('open') ){
            $(".search_area").removeClass('open')
        }
        else{
            $(".search_area").addClass('open')
        }
        return false
    });
 
    /*----------------------------------------------------*/
    /*  Google map js
    /*----------------------------------------------------*/
    
    if ( $('#mapBox').length ){
        var $lat = $('#mapBox').data('lat');
        var $lon = $('#mapBox').data('lon');
        var $zoom = $('#mapBox').data('zoom');
        var $marker = $('#mapBox').data('marker');
        var $info = $('#mapBox').data('info');
        var $markerLat = $('#mapBox').data('mlat');
        var $markerLon = $('#mapBox').data('mlon');
        var map = new GMaps({
        el: '#mapBox',
        lat: $lat,
        lng: $lon,
        scrollwheel: false,
        scaleControl: true,
        streetViewControl: false,
        panControl: true,
        disableDoubleClickZoom: true,
        mapTypeControl: true,
        zoom: $zoom,
        styles: [
            {
              "featureType": "poi.business",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            },
            {
              "featureType": "poi.park",
              "elementType": "labels.text",
              "stylers": [
                {
                  "visibility": "off"
                }
              ]
            }
          ]
            // ,styles: [
            //     {
            //         "featureType": "water",
            //         "elementType": "geometry",
            //         "stylers": [
            //             {
            //                 "color": "#e9e9e9"
            //             },
            //             {
            //                 "lightness": 17
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "landscape",
            //         "elementType": "geometry",
            //         "stylers": [
            //             {
            //                 "color": "#f5f5f5"
            //             },
            //             {
            //                 "lightness": 20
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "road.highway",
            //         "elementType": "geometry.fill",
            //         "stylers": [
            //             {
            //                 "color": "#ffffff"
            //             },
            //             {
            //                 "lightness": 17
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "road.highway",
            //         "elementType": "geometry.stroke",
            //         "stylers": [
            //             {
            //                 "color": "#ffffff"
            //             },
            //             {
            //                 "lightness": 29
            //             },
            //             {
            //                 "weight": 0.2
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "road.arterial",
            //         "elementType": "geometry",
            //         "stylers": [
            //             {
            //                 "color": "#ffffff"
            //             },
            //             {
            //                 "lightness": 18
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "road.local",
            //         "elementType": "geometry",
            //         "stylers": [
            //             {
            //                 "color": "#ffffff"
            //             },
            //             {
            //                 "lightness": 16
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "poi",
            //         "elementType": "geometry",
            //         "stylers": [
            //             {
            //                 "color": "#f5f5f5"
            //             },
            //             {
            //                 "lightness": 21
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "poi.park",
            //         "elementType": "geometry",
            //         "stylers": [
            //             {
            //                 "color": "#dedede"
            //             },
            //             {
            //                 "lightness": 21
            //             }
            //         ]
            //     },
            //     {
            //         "elementType": "labels.text.stroke",
            //         "stylers": [
            //             {
            //                 "visibility": "on"
            //             },
            //             {
            //                 "color": "#ffffff"
            //             },
            //             {
            //                 "lightness": 16
            //             }
            //         ]
            //     },
            //     {
            //         "elementType": "labels.text.fill",
            //         "stylers": [
            //             {
            //                 "saturation": 36
            //             },
            //             {
            //                 "color": "#333333"
            //             },
            //             {
            //                 "lightness": 40
            //             }
            //         ]
            //     },
            //     {
            //         "elementType": "labels.icon",
            //         "stylers": [
            //             {
            //                 "visibility": "off"
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "transit",
            //         "elementType": "geometry",
            //         "stylers": [
            //             {
            //                 "color": "#f2f2f2"
            //             },
            //             {
            //                 "lightness": 19
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "administrative",
            //         "elementType": "geometry.fill",
            //         "stylers": [
            //             {
            //                 "color": "#fefefe"
            //             },
            //             {
            //                 "lightness": 20
            //             }
            //         ]
            //     },
            //     {
            //         "featureType": "administrative",
            //         "elementType": "geometry.stroke",
            //         "stylers": [
            //             {
            //                 "color": "#fefefe"
            //             },
            //             {
            //                 "lightness": 17
            //             },
            //             {
            //                 "weight": 1.2
            //             }
            //         ]
            //     }
            // ]
        });

        map.addMarker({
            lat: $markerLat, 
            lng: $markerLon,  
            infoWindow: {
              content: $info
            }
        })
    }
    
    
})(jQuery)

