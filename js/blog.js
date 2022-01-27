const menu = document.querySelector(".burger");
menu.addEventListener("click", morph);

function morph() {
    menu.classList.toggle("open");
    $('.nav').toggleClass('navActive', 1000);
}

// $('.loadPopup').fancybox();

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
var aNav = document.querySelectorAll(".navMobile a");
for (var i = 0; i < aNav.length; i++) {
    aNav[i].addEventListener("click", morph);

}
