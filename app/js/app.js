//modal
$('.modal-toggle').on('click', function(e) {
    e.preventDefault();
    $('.modal').toggleClass('is-visible');
});

//menu responsive
$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('header__active');
        $('body').toggleClass('lock');
    });
});

//menu fixed
window.onscroll = () => {
    const menu = document.querySelector('.header');
    const Y = window.scrollY;

    if (Y > 300) {
        menu.classList.add('menu-fixed');
    } else if (Y < 100) {
        menu.classList.remove('menu-fixed');
    }
}

//animation text
window.addEventListener('scroll', reveal);

function reveal() {
    let reveals = document.querySelectorAll('.reveal');

    for (let i = 0; i < reveals.length; i++) {

        let windowheight = window.innerHeight;
        let revealtop = reveals[i].getBoundingClientRect().top;
        let revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add('active');
        } else {
            reveals[i].classList.remove('active');
        }
    }
}

//slider
$(function() {
    $('.slider__items').slick({
        centerPadding: '60px',
        centerMode: true,
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToScroll: 1,
        prevArrow: false,
        nextArrow: false,
        dots: true,
        responsive: [{
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 460,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: false,
                }
            }
        ]
    });
});

//Increment on scroll into Viewport
$(function() {
    var fx = function fx() {
        $(".why-choose-us__column-right--numeric").each(function(i, el) {
            var data = parseInt(this.dataset.n, 10);
            var props = {
                "from": {
                    "count": 0
                },
                "to": {
                    "count": data
                }
            };
            $(props.from).animate(props.to, {
                duration: 4000 * 1,
                step: function(now, fx) {
                    $(el).text(Math.ceil(now));
                },
                complete: function() {
                    if (el.dataset.sym !== undefined) {
                        el.textContent = el.textContent.concat(el.dataset.sym)
                    }
                }
            });
        });
    };

    var reset = function reset() {
        //console.log($(this).scrollTop())
        if ($(this).scrollTop() > 90) {
            $(this).off("scroll");
            fx()
        }
    };

    $(window).on("scroll", reset);
});

//Smooth scroll
$(document).ready(function() {
    $(".header__menu").on("click", "a", function(event) {
        event.preventDefault();

        var id = $(this).attr('href'),

            top = $(id).offset().top - 300;

        $('body,html').animate({ scrollTop: top }, 1000);
    });
});

//year footer
let date = new Date().getFullYear();

document.getElementById("year").innerHTML = date;