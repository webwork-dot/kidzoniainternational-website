// Moved inline scripts to external file for better performance
// jQuery should be loaded before this script (no defer on jQuery)
(function() {
    // Wait for DOM and jQuery
    function initScripts() {
        if (typeof jQuery === 'undefined' || typeof document === 'undefined') {
            setTimeout(initScripts, 50);
            return;
        }
        var $ = jQuery;
        var baseUrl = window.baseUrl || '';

function isNumberKey(evt, element) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57) && !(charCode == 46))
        return false;
    else {
        var len = $(element).val().length;
        var index = $(element).val().indexOf('.');
        if (index > 0 && charCode == 46) {
            return false;
        }
        if (index > 0) {
            var CharAfterdot = (len + 1) - index;
            if (CharAfterdot > 100) {
                return false;
            }
        }
    }
    return true;
}

// Wait for jQuery to load
(function() {
    function initScripts() {
        if (typeof jQuery === 'undefined') {
            setTimeout(initScripts, 50);
            return;
        }
        var $ = jQuery;

        jQuery(document).ready(function($) {
            function checkForm(form) {
                form.btn_verify.disabled = true;
                $('.btn_verify').attr("disabled", true);
                $('.btn_verify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
                return true;
            }

            $('.add-ajax-redirect-image-form').submit(function(e) {
                e.preventDefault();
                $(".loader").show();
                $('.btn_verify').attr("disabled", true)
                $('.btn_verify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
                var url = $(this).attr('action');
                var form = $('.add-ajax-redirect-image-form')[0];
                var data = new FormData(form);

                $.ajax({
                    type: 'POST',
                    url: url,
                    async: true,
                    dataType: 'json',
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.status == '200') {
                            $(".loader").fadeOut("slow");
                            if (typeof Swal !== 'undefined') {
                                Swal.fire({
                                    title: "Success!",
                                    text: res.message,
                                    icon: "success",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    },
                                    buttonsStyling: !1
                                }).then(() => {
                                    window.location.href = res.url;
                                });
                            } else {
                                window.location.href = res.url;
                            }
                        } else {
                            $.each(res.errors, function(key, value) {
                                $('[name="' + key + '"]').addClass('is-invalid');
                                $('[name="' + key + '"]').next().html(value);
                                if (value == "") {
                                    $('[name="' + key + '"]').removeClass('is-invalid');
                                    $('[name="' + key + '"]').addClass('is-valid');
                                }
                            });
                            if (typeof Swal !== 'undefined') {
                                Swal.fire({
                                    title: "Error!",
                                    text: res.message,
                                    icon: "error",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    },
                                    buttonsStyling: !1
                                });
                            }
                            $('.btn_verify').html('Submit');
                            $('.btn_verify').attr("disabled", false);
                            $(".loader").fadeOut("slow");
                        }
                    }
                });
                return false;
            });

            $('.add-ajax-admission-form').submit(function(e) {
                e.preventDefault();
                $(".loader").show();
                $('.btn_verify').attr("disabled", true)
                $('.btn_verify').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span class="ms-25 align-middle">Loading...</span>');
                var url = $(this).attr('action');
                var form = $('.add-ajax-admission-form')[0];
                var data = new FormData(form);

                $.ajax({
                    type: 'POST',
                    url: url,
                    async: true,
                    dataType: 'json',
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.status == '200') {
                            $(".loader").fadeOut("slow");
                            $('.btn_verify').attr("disabled", false);
                            $('.btn_verify').html('Submit');
                            if (typeof showAjaxEnquiryModal !== 'undefined') {
                                showAjaxEnquiryModal(baseUrl + 'modal/popup_front/modal_admission_otp/' + res.id, 'Enter OTP!');
                            }
                        } else {
                            $.each(res.errors, function(key, value) {
                                $('[name="' + key + '"]').addClass('is-invalid');
                                $('[name="' + key + '"]').next().html(value);
                                if (value == "") {
                                    $('[name="' + key + '"]').removeClass('is-invalid');
                                    $('[name="' + key + '"]').addClass('is-valid');
                                }
                            });
                            if (typeof Swal !== 'undefined') {
                                Swal.fire({
                                    title: "Error!",
                                    text: res.message,
                                    icon: "error",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    },
                                    buttonsStyling: !1
                                });
                            }
                            $('.btn_verify').html('Submit');
                            $('.btn_verify').attr("disabled", false);
                            $(".loader").fadeOut("slow");
                        }
                    }
                });
                return false;
            });

            $('.add-ajax-redirect-form').submit(function(e) {
                e.preventDefault();
                $(".loader").show();
                $('.btn_verify').attr("disabled", true)
                $('.btn_verify').html('Loading...');
                var url = $(this).attr('action');
                var form = $('.add-ajax-redirect-form')[0];
                var data = new FormData(form);

                $.ajax({
                    type: 'POST',
                    url: url,
                    async: true,
                    dataType: 'json',
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.status == '200') {
                            $(".loader").fadeOut("slow");
                            if (typeof Swal !== 'undefined') {
                                Swal.fire({
                                    text: res.message,
                                    icon: "success",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    },
                                    buttonsStyling: !1
                                }).then(() => {
                                    window.location.href = res.url;
                                });
                            } else {
                                window.location.href = res.url;
                            }
                        } else {
                            if (typeof Swal !== 'undefined') {
                                Swal.fire({
                                    title: "Error!",
                                    text: res.message,
                                    icon: "error",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    },
                                    buttonsStyling: !1
                                });
                            }
                            $('.btn_verify').html('Submit');
                            $('.btn_verify').attr("disabled", false);
                            $(".loader").fadeOut("slow");
                        }
                    }
                });
                return false;
            });

            function downloadFile(filePath) {
                var link = document.createElement('a');
                link.href = filePath;
                link.download = 'downloaded_file.pdf';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }

            $('.add-ajax-brochure-form').submit(function(e) {
                e.preventDefault();
                $(".loader").show();
                $('.btn_verify').attr("disabled", true)
                $('.btn_verify').html('Loading...');
                var url = $(this).attr('action');
                var form = $('.add-ajax-brochure-form')[0];
                var data = new FormData(form);

                $.ajax({
                    type: 'POST',
                    url: url,
                    async: true,
                    dataType: 'json',
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function(res) {
                        if (res.status == '200') {
                            downloadFile(baseUrl + 'assets/Kidzonia-Brochure.pdf');
                            $(".loader").fadeOut("slow");
                            if (typeof Swal !== 'undefined') {
                                Swal.fire({
                                    text: res.message,
                                    icon: "success",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    },
                                    buttonsStyling: !1
                                }).then(() => {
                                    window.location.href = res.url;
                                });
                            } else {
                                window.location.href = res.url;
                            }
                        } else {
                            if (typeof Swal !== 'undefined') {
                                Swal.fire({
                                    title: "Error!",
                                    text: res.message,
                                    icon: "error",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    },
                                    buttonsStyling: !1
                                });
                            }
                            $('.btn_verify').html('Submit');
                            $('.btn_verify').attr("disabled", false);
                            $(".loader").fadeOut("slow");
                        }
                    }
                });
                return false;
            });
        });

        jQuery(document).ready(function() {
            function AddReadMore() {
                document.querySelectorAll(".add-read-more").forEach(function(element) {
                    if (element.querySelector(".first-section")) return;

                    var allstr = element.textContent;
                    var carLmt = 100;
                    var readMoreTxt = " ...read more";
                    var readLessTxt = " read less";

                    if (allstr.length > carLmt) {
                        var firstSet = allstr.substring(0, carLmt);
                        var secdHalf = allstr.substring(carLmt, allstr.length);
                        var strtoadd = firstSet + "<span class='second-section' >" + secdHalf + "</span><span class='read-more'  title='Click to Show More'>" + readMoreTxt + "</span><span class='read-less' title='Click to Show Less'>" + readLessTxt + "</span>";
                        element.innerHTML = strtoadd;
                    }
                });

                document.addEventListener("click", function(event) {
                    if (event.target.classList.contains("read-more") || event.target.classList.contains("read-less")) {
                        var addReadMore = event.target.closest(".add-read-more");
                        if (addReadMore) {
                            addReadMore.classList.toggle("show-less-content");
                            addReadMore.classList.toggle("show-more-content");
                        }
                    }
                });
            }
            AddReadMore();
        });

        jQuery(document).ready(function($) {
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
        });

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
    // Start initialization
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initScripts);
    } else {
        initScripts();
    }
})();

