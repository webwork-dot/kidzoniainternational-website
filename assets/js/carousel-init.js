// Carousel initialization - Loaded with defer for better performance
(function() {
    function initCarousels() {
        if (typeof jQuery === 'undefined' || typeof $.fn.owlCarousel === 'undefined') {
            setTimeout(initCarousels, 100);
            return;
        }
        var $ = jQuery;

        $(".owl-carousel-event").owlCarousel({
            items: 3,
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
            dots: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });

        $(".owl-carousel-blogs").owlCarousel({
            items: 3,
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
            dots: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });

        $(".owl-carousel-summer").owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 3000,
            navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
            dots: true,
            responsive: {
                0: { items: 1 },
                600: { items: 1 },
                1000: { items: 1 }
            }
        });

        if ($(".owl-carousel-awards").length > 0) {
            $(".owl-carousel-awards").owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                nav: true,
                autoplay: true,
                autoplayTimeout: 3000,
                navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                dots: true,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 4 }
                }
            });
        }

        if ($(".owl-carousel-parent-testimonial").length > 0) {
            $(".owl-carousel-parent-testimonial").owlCarousel({
                items: 1,
                merge: true,
                loop: true,
                margin: 10,
                video: true,
                lazyLoad: true,
                center: true,
                navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                responsive: {
                    480: { items: 2 },
                    600: { items: 3 }
                }
            });
        }

        if ($(".owl-carousel-gallery").length > 0) {
            $(".owl-carousel-gallery").owlCarousel({
                items: 1,
                merge: true,
                loop: true,
                margin: 10,
                lazyLoad: true,
                center: true,
                autoplay: true,
                autoplayTimeout: 3000,
                navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                responsive: {
                    480: { items: 2 },
                    600: { items: 3 }
                }
            });
        }

        if ($(".owl-carousel-our-team").length > 0) {
            $(".owl-carousel-our-team").owlCarousel({
                items: 3,
                loop: true,
                margin: 10,
                nav: true,
                navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                dots: true,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
        }

        function sanitizeInput(element) {
            element.value = element.value.replace(/[^\d]/g, '');
        }

        function openDialer(element) {
            var inputValue = element.value;
            if (/^\d{10}$/.test(inputValue)) {
                window.location.href = 'tel:' + inputValue;
            }
        }

        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCarousels);
    } else {
        initCarousels();
    }
})();


