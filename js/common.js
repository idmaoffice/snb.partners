var hi = new Vivus('hi-there', {
        start: 'manual',
    },
    function () {
        if (window.console) {
            console.log('Animation finished 1');
        }
    });
var svgFirst2 = new Vivus('svgFirst2', {
        duration: '250',
        start: 'manual',
    },
    function () {
        if (window.console) {
            console.log('Animation finished 2');
        }
    });
var itemThree_1 = new Vivus('itemThree_1', {
        start: 'manual',
    },
    function () {
        if (window.console) {
            console.log('Animation finished 2');
        }
    });
var itemThree_2 = new Vivus('itemThree_2', {
        start: 'manual',
    },
    function () {
        if (window.console) {
            console.log('Animation finished 2');
        }
    });
var itemThree_3 = new Vivus('itemThree_3', {
        start: 'manual',
    },
    function () {
        if (window.console) {
            console.log('Animation finished 2');
        }
    });
var itemThree_4 = new Vivus('itemThree_4', {
        start: 'manual',
    },
    function () {
        if (window.console) {
            console.log('Animation finished 2');
        }
    });
var itemThree_5 = new Vivus('itemThree_5', {
        start: 'manual',
    },
    function () {
        if (window.console) {
            console.log('Animation finished 2');
        }
    });
var itemThree_6 = new Vivus('itemThree_6', {
        start: 'manual',
    },
    function () {
        if (window.console) {
            console.log('Animation finished 2');
        }
    });

// var icon1 = new Vivus('icon1', {
//         start: 'manual',
//     },
//     function () {
//         if (window.console) {
//             console.log('Animation finished 2');
//         }
//     });

// var icon4 = new Vivus('icon4', {
//         start: 'manual',
//     },
//     function () {
//         if (window.console) {
//             console.log('Animation finished 2');
//         }
//     });

// function block31() {
//     window.setTimeout('icon1.play()', 2000);
// }

// function block32() {
//     window.setTimeout('icon2.play()', 3000);
// }
//
// function block33() {
//     window.setTimeout('icon3.play()', 4000);
// }

// function block34() {
//     window.setTimeout('icon4.play()', 5000);
// }


// вызов
// icon1.play();

var doFullpage = document.documentElement.clientWidth;
if (doFullpage > 768) {
    $('#fullpage').fullpage({
        sectionSelector: '.section',
        anchors: ['block1', 'block2', 'block3', 'block4'],
        menu: '#menu',
        css3: true,
        scrollingSpeed: 1000,
        controlArrows: true,
        isResponsive: true,
        scrollOverflow: true,
        afterLoad: function (index) {
            if (index === "block1") {
                svgFirst2.play();
                $("#svgFirst2").css("display", "block");
                $("#svgFirst2").fadeOut(5000);
                $("#svgFirst1").fadeIn(5000);

            } else if (index === 'block2') {
                hi.play();
                $("#hi-there").fadeOut(5000);
                $("#hi-thereWR").fadeIn(5000)
            } else if (index === 'block3') {
                // block31();
                // block32();
                // block33();
                // block34()
                itemThree_1.play()
                itemThree_2.play()
                itemThree_3.play()
                itemThree_4.play()
                itemThree_5.play()
                itemThree_6.play()
            }
        }
    });

    $('#moveDown').click(function () {
        $.fn.fullpage.moveSectionDown();
    });


    $('#moveUp').click(function () {
        $.fn.fullpage.moveSectionUp();
    });
} else {
    (function ($) {
        var selectors = [];

        var check_binded = false;
        var check_lock = false;
        var defaults = {
            interval: 250,
            force_process: false
        };
        var $window = $(window);

        var $prior_appeared = [];

        function appeared(selector) {
            return $(selector).filter(function () {
                return $(this).is(':appeared');
            });
        }

        function process() {
            check_lock = false;
            for (var index = 0, selectorsLength = selectors.length; index < selectorsLength; index++) {
                var $appeared = appeared(selectors[index]);

                $appeared.trigger('appear', [$appeared]);

                if ($prior_appeared[index]) {
                    var $disappeared = $prior_appeared[index].not($appeared);
                    $disappeared.trigger('disappear', [$disappeared]);
                }
                $prior_appeared[index] = $appeared;
            }
        }

        function add_selector(selector) {
            selectors.push(selector);
            $prior_appeared.push();
        }

        // ":appeared" custom filter
        $.expr.pseudos.appeared = $.expr.createPseudo(function (arg) {
            return function (element) {
                var $element = $(element);
                if (!$element.is(':visible')) {
                    return false;
                }

                var window_left = $window.scrollLeft();
                var window_top = $window.scrollTop();
                var offset = $element.offset();
                var left = offset.left;
                var top = offset.top;

                if (top + $element.height() >= window_top &&
                    top - ($element.data('appear-top-offset') || 0) <= window_top + $window.height() &&
                    left + $element.width() >= window_left &&
                    left - ($element.data('appear-left-offset') || 0) <= window_left + $window.width()) {
                    return true;
                } else {
                    return false;
                }
            };
        });

        $.fn.extend({
            // watching for element's appearance in browser viewport
            appear: function (selector, options) {
                $.appear(this, options);
                return this;
            }
        });

        $.extend({
            appear: function (selector, options) {
                var opts = $.extend({}, defaults, options || {});

                if (!check_binded) {
                    var on_check = function () {
                        if (check_lock) {
                            return;
                        }
                        check_lock = true;

                        setTimeout(process, opts.interval);
                    };

                    $(window).scroll(on_check).resize(on_check);
                    check_binded = true;
                }

                if (opts.force_process) {
                    setTimeout(process, opts.interval);
                }

                add_selector(selector);
            },
            // force elements's appearance check
            force_appear: function () {
                if (check_binded) {
                    process();
                    return true;
                }
                return false;
            }
        });
    })(function () {
        if (typeof module !== 'undefined') {
            // Node
            return require('jquery');
        } else {
            return jQuery;
        }
    }());
    // вызываем анимацию
    svgFirst2.play();
    $("#svgFirst2").css("display", "block");
    $("#svgFirst2").fadeOut(5000);
    $("#svgFirst1").fadeIn(5000);

    var waypoint = new Waypoint({
        element: document.getElementById('test'),
        handler: function (direction) {
            hi.play();
            $("#hi-there").fadeOut(5000);
            $("#hi-thereWR").fadeIn(5000)
        }
    });
    // itemThree_1.play();
    // // itemThree_2.play();
    // // itemThree_3.play();
    // // itemThree_4.play();
    // // itemThree_5.play();
    // // itemThree_6.play();
    var waypoint1 = new Waypoint({
        element: document.getElementById('section3'),
        handler: function (direction) {
            itemThree_1.play()
            itemThree_2.play();
            itemThree_3.play();
            itemThree_4.play();
            itemThree_5.play();
            itemThree_6.play();
        }
    });

    // var waypoint1 = new Waypoint({
    //     element: document.getElementById('icon1'),
    //     handler: function (direction) {
    //         icon1.play()
    //     }
    // });
    // var waypoint2 = new Waypoint({
    //     element: document.getElementById('icon2'),
    //     handler: function (direction) {
    //         icon2.play()
    //     }
    // });
    // var waypoint3 = new Waypoint({
    //     element: document.getElementById('icon3'),
    //     handler: function (direction) {
    //         icon3.play()
    //     }
    // });
    // var waypoint4 = new Waypoint({
    //     element: document.getElementById('icon4'),
    //     handler: function (direction) {
    //         icon4.play()
    //     }
    // });
}

var menu = document.querySelector(".burger");
menu.addEventListener("click", morph);

var aNav = document.querySelectorAll(".navMobile a");
for (var i = 0; i < aNav.length; i++) {
    aNav[i].addEventListener("click", morph);

}

function morph() {
    menu.classList.toggle("open");
    $('.navMobile').toggleClass('navActive', 1000);
}


$('.loadPopup').fancybox();

function xxx(el) {
    var name = el.getAttribute('id');
    var label = document.querySelector('label[for=' + name + ']');
    if (el.value != '') {
        label.style.top = '-20px'
        label.style.color = '#fff'
        label.style.textTransform = 'uppercase'
        label.style.fontSize = '12px'
    } else {
        label.style.top = '0'
        label.style.color = '#111'
        label.style.textTransform = 'none'
        label.style.fontSize = '16px'
    }
}

(function () {
    var floatingLabel;
    floatingLabel = (function () {
        function floatingLabel(form, options) {
            var event, i, input, j, label, len, len1, ref, ref1;
            if (options == null) {
                options = {};
            }
            if (!form) {
                return;
            }
            options.focusClass || (options.focusClass = "focus");
            options.activeClass || (options.activeClass = "active");
            options.errorClass || (options.errorClass = "error");
            form.classList.add('has-floated-label');
            ref = form.querySelectorAll('label');
            for (i = 0, len = ref.length; i < len; i++) {
                label = ref[i];
                if (!(input = document.querySelector("#" + (label.getAttribute('for'))))) {
                    return;
                }
                ref1 = ['keyup', 'input', 'change'];
                for (j = 0, len1 = ref1.length; j < len1; j++) {
                    event = ref1[j];
                    input.addEventListener(event, function () {
                        this.parentNode.classList.remove(options.errorClass);
                        return this.parentNode.classList.toggle(options.activeClass, !!this.value);
                    });
                }
                input.addEventListener('focus', function () {
                    return this.parentNode.classList.add(options.focusClass);
                });
                input.addEventListener('blur', function () {
                    return this.parentNode.classList.remove(options.focusClass);
                });
                input.parentNode.classList.toggle(options.activeClass, !!input.value);
            }
        }

        return floatingLabel;
    })();
    window.floatingLabel = new floatingLabel(document.querySelector('.form'));
}).call(this);
function sendText(el) {
    var x = $(el).data("send");
    $('#ago').val(x);
    // $('#hiddenInput').val(x);
    console.log('asdasd')
}



