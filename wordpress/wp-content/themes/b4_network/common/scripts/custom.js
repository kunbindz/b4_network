let wHeight = screen.height,
    wWidth = screen.width;
var firstSectionPadding
$('#section-video').css('padding-bottom', 'calc(' + wHeight / wWidth + ' * 100%)');
if ($('#section-video').length > 0) {
    firstSectionPadding = $('#section-video').css('padding-bottom').replace('px', '');
} else {
    firstSectionPadding = 0;
}

$(document).ready(function () {

    let counters = $(".count input"),
        targets = $(".count h2 span"),
        countersQuantity = counters.length,
        counter = [];
    for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseFloat(counters[i].value);
    }

    let count = function (start, value, id, timeout) {
        let localStart = start;

        setInterval(function () {
            localStart++;
            if (localStart > value) {
                localStart = value;
            }
            targets[id].innerHTML = localStart;
        }, timeout);
    }

    for (j = 0; j < countersQuantity; j++) {
        let timeout;
        if (counter[j] < 10) {
            timeout = 200;
        } else if (counter[j] < 200) {
            timeout = 40
        } else if (counter[j] >= 1000) {
            timeout = 0.5
        }
        count(0, counter[j], j, timeout);
    }
});

$(document).ready(function () {
    if ($('#section-our-project').length > 0) {
        var swiper = new Swiper('#section-our-project .swiper-container', {
            pagination: {
                el: '.swiper-pagination2',
                clickable: true,
            },
        });
        let text_length = '';
        if (swiper.slides.length < 10) {
            text_length = '0' + swiper.pagination.bullets.length;
        } else {
            text_length = swiper.pagination.bullets.length;
        }
        $('#section-our-project .swiper-pagination').html('<span class="swiper-pagination-current">01</span> /<span class="swiper-pagination-total">' + text_length + '</span>');
        var current = '';
        swiper.on('slideChange', function () {
            current = (swiper.activeIndex < 10) ? '0' + parseInt(swiper.activeIndex + 1) : swiper.activeIndex;
            $('.swiper-pagination-current').html(current);
        });
    }
});

$(document).ready(function () {
    if ($('#section-news').length > 0) {
        var swiper = new Swiper('#section-news .swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination2',
                clickable: true,
            },
            breakpoints: {
                375: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                414: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3.4,
                    spaceBetween: 50,
                },
                1366: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                }
            }
        });

        let text_length = '';
        if (swiper.slides.length < 10) {
            text_length = '0' + swiper.pagination.bullets.length;
        } else {
            text_length = swiper.pagination.bullets.length;
        }
        $('#section-news .swiper-pagination').html('<span class="swiper-pagination-current">01</span> /<span class="swiper-pagination-total">' + text_length + '</span>');
        var current = '';
        swiper.on('slideChange', function () {
            current = (swiper.activeIndex < 10) ? '0' + parseInt(swiper.activeIndex + 1) : swiper.activeIndex;
            $('#section-news .swiper-pagination-current').html(current);
        });
    }
});

$(document).ready(function () {
    if ($('#section-our-clients').length > 0) {
        var swiperClients = new Swiper('#section-our-clients .swiper-container', {
            pagination: {
                el: '.swiper-pagination-client',
                clickable: true,
            },
        });
    }
});

$('.js-sidebar-height').css('height', $('html').height());

let sectionsPosition = [];
let sectionsText = [];
let sectionsIndex = [];
let sectionsIdTag = [];
let sectionsHeight = [];
$('section').each(function (index) {
    sectionsPosition.push($(this).position().top + $(this).outerHeight());
    sectionsText.push($(this).data('title'));
    sectionsIndex.push($(this).data('section'));
    sectionsIdTag.push($(this).attr('id'));
    sectionsHeight.push($(this).outerHeight());
});
$(window).on('scroll', function () {
    var currentPosition = $(document).scrollTop();
    let slideRate = (currentPosition + wHeight) / $(document).height();
    $('.slide_bar').css('height', 'calc( 45vh * ' + slideRate + ')');
    if (currentPosition < sectionsPosition[0]) {
        $('.navigation-bar .text-rotated a').html(sectionsText[0]);
        $('.navigation-bar .text-rotated a').data('current-section', sectionsIndex[0]);
    } else if (currentPosition >= ($(document).height() - wHeight)) {
        $('.navigation-bar .text-rotated a').html(sectionsText[sectionsPosition.length - 1]);
        $('.navigation-bar .text-rotated a').data('current-section', sectionsIndex[sectionsPosition.length - 1]);
    } else {
        for (a = 0; a < sectionsPosition.length; a++) {
            if ((sectionsPosition[a] - wHeight / 2) < currentPosition && currentPosition < (sectionsPosition[a + 1] - wHeight / 2)) {
                $('.navigation-bar .text-rotated a').html(sectionsText[a + 1]);
                $('.navigation-bar .text-rotated a').data('current-section', sectionsIndex[a + 1]);
            }
        }
    }
});
$(document).on('click', '.js-navigation-next', function () {
    let currentSection = $('.navigation-bar .text-rotated a').data('current-section');
    let key = sectionsIndex.indexOf(currentSection);
    if (key < sectionsIndex.length - 1) {
        let nextSectionKey = key + 1;
        $('html, body').animate({
            scrollTop: $('#' + sectionsIdTag[nextSectionKey]).offset().top - 100
        }, 0);
    }
});

$(document).on('click', '.js-navigation-prev', function () {
    let currentSection = $('.navigation-bar .text-rotated a').data('current-section');
    let key = sectionsIndex.indexOf(currentSection);
    if (key > 0) {
        let nextSectionKey = key - 1;
        $('html, body').animate({
            scrollTop: $('#' + sectionsIdTag[nextSectionKey]).offset().top - 100
        }, 0);
    }

});

$(document).on('click', '.btn-toggle-sidebar', function () {
    if (wWidth > 1024) {
        $(".side_menu_wrap").animate({width: 'toggle'}, 300);
    } else {
        $('.side_menu_wrap').slideToggle();
    }
    $('.navigation-sidemenu').show();
    $('.navigation-bar').hide();
    $('.navigation-mobile .btn-close-sidebar').show();
    $('.navigation-mobile .btn-toggle-sidebar').hide();
    $('.social_lists_footer').addClass('sticky');
});

$(document).on('click', '.js-close-sidemenu', function () {
    if (wWidth > 1024) {
        $(".side_menu_wrap").animate({width: 'toggle'}, 300);
    } else {
        $('.side_menu_wrap').slideToggle();
    }
    $('.navigation-sidemenu').hide();
    $('.navigation-bar').show();
    $('.navigation-mobile .btn-close-sidebar').hide()
    $('.navigation-mobile .btn-toggle-sidebar').show()
    $('.social_lists_footer').removeClass('sticky');
});