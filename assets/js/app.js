/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)

import '../css/bootstrap.css';
import '../css/bootstrap-responsive.css';
import '../css/fontawesome.css';
import '../css/ionicons.css';
import '../css/stroke-gap.css';
import '../css/owl.carousel.css';
import '../css/owl.theme.default.css';
import '../css/owl.theme.green.css';
import '../css/slick.css';
import '../css/slick-theme.css';

import '../scss/app.scss';

import './jquery.mousewheel.min';
import './owl.carousel';

$(window).ready(function(){
    /*---sticky menu---*/
    $(window).on('scroll',function() {
        let scroll = $(window).scrollTop();
        if (scroll < 255) {
            $(".sticky-header").removeClass("sticky");
            $(".sticky-logo").removeClass("sticky");
        }else{
            $(".sticky-header").addClass("sticky");
            $(".sticky-logo").addClass("sticky");
        }
    });

    $('table.tarifs a[data-toggle="modal"]').on('click', function(){
        let modal = $($(this).data('target'));
        modal.find('h3 span.final-time').html($(this).data('hours'));
        modal.find('h3 span.final-price').html($(this).data('price'));
    });

    $('.modal').on('shown.bs.modal', function (e) {
            $('.product_navactive').resize();
        });
    $('.modal').on('hidden.bs.modal', function(){
        if ($('.modal-backdrop').length && $('.modal-backdrop').first().is(':visible')){
            $('.modal-backdrop').first().click();
        }
    });

    $('[data-target="#modal-bus"]').on('click', function(){
        let bus = $(this).parents('div.single_product');
        let modal = $('#modal-bus');

        modal.find('.bus_name').html(bus.find('h3.bus_name').html());
        for (let i = 1; i < 5; ++i) {
            if (!!bus.find('.image_stock .thumbs img').eq(i - 1).attr('src').length && !!bus.find('.image_stock .pictures img').eq(i - 1)) {
                modal.find('#tab' + i + 'a img').attr('src', bus.find('.image_stock .thumbs img').eq(i - 1).attr('src')).css('display', 'block');
                modal.find('#tab' + i + ' img').attr('src', bus.find('.image_stock .pictures img').eq(i - 1).attr('src')).css('display', 'block');
            } else {
                modal.find('#tab' + i + 'a img').css('display', 'none');
                modal.find('#tab' + i + ' img').css('display', 'none');
            }
        }
        setTimeout(function(){
            modal.find('.loading').css('visibility', 'hidden');
            modal.find('.modal_tab').css('visibility', 'visible');
        }, 500);
    });

    $('.product_navactive').owlCarousel({
        loop: true,
        autoplay: false,
        autoplayTimeout: 8000,
        items: 3,
        dots:false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            250:{
                items:2,
            },
            480:{
                items:3,
            },
            768:{
                items:4,
            },

        }
    });

    $('.product_navactive .nav-link').on('click', function(e){
        e.preventDefault();

        let $href = $(this).attr('href');

        $('.product_navactive .nav-link').removeClass('active');
        $(this).addClass('active');

        $('.product-details-large .tab-pane').removeClass('active show');
        $('.product-details-large '+ $href ).addClass('active show');

    });

    /*---blog active activation---*/
    $('.blog_thumb_active').owlCarousel({
        autoplay: true,
        loop: true,
        nav: true,
        autoplayTimeout: 8000,
        items: 1,
        dots: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    });

    /*---blog column3 activation---*/
    $('.blog_column3').owlCarousel({
        autoplay: true,
        loop: true,
        nav: true,
        autoplayTimeout: 8000,
        items: 3,
        dots: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 3,
            },
        }
    });
    $('.product_row1').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 5,
        arrows:true,
        prevArrow:'<button class="prev_arrow"><i class="fa fa-angle-left"></i></button>',
        nextArrow:'<button class="next_arrow"><i class="fa fa-angle-right"></i></button>',
        responsive:[
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },

        ]
    });
});