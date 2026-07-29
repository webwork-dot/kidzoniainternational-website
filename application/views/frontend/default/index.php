<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $page_title; ?></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="title" content="<?php echo $page_title; ?>" />
    <meta name="description" content="<?php echo $meta_description; ?>" />
    <meta name="keywords" content="<?php echo $meta_keyword; ?>" />
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $page_title; ?>" />
    <meta property="og:description" content="<?php echo $meta_description; ?>" />
    <meta property="og:url" content="https://www.kidzoniainternational.in/" />
    <meta property="og:site_name" content="Kidzonia International" />
    <meta property="article:publisher" content="https://www.facebook.com/KidzoniaPreschoolHyderabad?mibextid=ZbWKwL" />
    <meta property="article:modified_time" content="2023-11-23T10:20:40+00:00" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@Kidzoniapre_Hyd" />


    <!-- Preload critical resources for faster rendering -->
    <link rel="preload" as="image" href="<?= base_url(); ?>uploads/2023/07/kidzonia_logo.png" fetchpriority="high">
    <?php if ($page_name == 'home' && !empty($pop_up['file'])) {?>
        <link rel="preload" as="image" href="<?= base_url() . $pop_up['file']; ?>?tr=w-600,h-600" fetchpriority="high">
    <?php } ?>
    <?php if ($page_name == 'home' && !empty($about_us['image'])) {?>
        <link rel="preload" as="image" href="<?= base_url() . $about_us['image']; ?>" fetchpriority="high">
    <?php } ?>
    
    <!-- Async CSS Loader - Must be defined first -->
    <script>
        /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
        (function(w){"use strict";var loadCSS=function(href,before,media){var doc=w.document;var ss=doc.createElement("link");var ref;if(before){ref=before}else{var refs=(doc.body||doc.getElementsByTagName("head")[0]).childNodes;ref=refs[refs.length-1]}var sheets=doc.styleSheets;ss.rel="stylesheet";ss.href=href;ss.media="only x";function ready(cb){if(doc.body){return cb()}setTimeout(function(){ready(cb)})}ready(function(){ref.parentNode.insertBefore(ss,before?ref:ref.nextSibling)});var onloadcssdefined=function(cb){var resolvedHref=ss.href;var i=sheets.length;while(i--){if(sheets[i].href===resolvedHref){return cb()}}setTimeout(function(){onloadcssdefined(cb)})};ss.onloadcssdefined=onloadcssdefined;onloadcssdefined(function(){if(ss.media!=="all"){ss.media=media||"all"}});return ss};if(typeof exports!=="undefined"){exports.loadCSS=loadCSS}else{w.loadCSS=loadCSS}}(typeof global!=="undefined"?global:this));
    </script>
    
    <!-- Load CRITICAL CSS synchronously for proper rendering -->
    <link href="<?= base_url(); ?>assets/css/bootstrap5-3-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/style.minaec2.css" rel="stylesheet">
    <link rel='stylesheet' id='boldthemes-framework-css' href='<?= base_url(); ?>assets/themes/bambino/framework/css/styleaec2.css' type='text/css' media='all' />
    <link href='<?= base_url(); ?>assets/themes/bambino/styleaec2.css' rel='stylesheet' type='text/css' />
    <link rel='stylesheet' href='<?= base_url(); ?>assets/css/custom.css' type='text/css' />
    <!-- Page Builder CSS is critical for layout -->
    <link rel='stylesheet' href='<?= base_url(); ?>assets/plugins/bold-page-builder/css/front_end/content_elements.crushae9e.css' type='text/css' media='all' />
    <!-- Preload critical resources -->
    <link rel="preload" href="https://code.jquery.com/jquery-3.7.1.min.js" as="script">
    <link rel="dns-prefetch" href="https://code.jquery.com">

    <!-- Preload Google Fonts with optimized loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Load NON-CRITICAL CSS asynchronously -->
    <script>
        loadCSS("<?= base_url(); ?>assets/css/old_style.css");
        loadCSS("<?= base_url(); ?>assets/css/sweetalert2.min.css");
        loadCSS("<?= base_url(); ?>assets/bootstrap-icons/bootstrap-icons.css");
        loadCSS("<?= base_url(); ?>assets/plugins/whatsapp-for-wordpress/assets/dist/css/styleaec2.css");
        loadCSS("<?= base_url(); ?>assets/plugins/bold-page-builder/slick/slickae9e.css");
        loadCSS("<?= base_url(); ?>assets/plugins/popup-builder/public/css/theme3a05.css");
        // Load Google Fonts asynchronously
        loadCSS("https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800%2C900italic%7CPaytone+One%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300%2C400%2C500%2C600%2C700%2C800%2C900%7CPoppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300%2C400%2C500%2C600%2C700%2C800%2C900italic&display=swap");
        loadCSS("https://cdn.jsdelivr.net/npm/intl-tel-input@25.14.0/build/css/intlTelInput.css");
    </script>

    <!-- Noscript fallback for non-JS users (only non-critical CSS) -->
    <noscript>
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/old_style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/css/sweetalert2.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/whatsapp-for-wordpress/assets/dist/css/styleaec2.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/bold-page-builder/slick/slickae9e.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/popup-builder/public/css/theme3a05.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.14.0/build/css/intlTelInput.css">
    </noscript>

    <link rel='stylesheet' id='bambino-print-css' href='<?= base_url(); ?>assets/themes/bambino/printaec2.css' type='text/css' media='print' />
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic%7CPaytone+One%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300%2C400%2C500%2C600%2C700%2C800%2C900%7CPoppins%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%2C100italic%2C200italic%2C300italic%2C400italic%2C500italic%2C600italic%2C700italic%2C800italic%2C900italic&display=swap" onload="this.onload=null;this.rel='stylesheet'">
    <!-- Preload OwlCarousel CSS for better performance -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer"></noscript>
    
    <!-- intl-tel-input CSS loaded asynchronously via loadCSS() above -->
    <style>

.iti input.iti__tel-input, .iti input.iti__tel-input[type=text], .iti input.iti__tel-input[type=tel]{
    padding-left: 75px !important;
}
     
        .iti--separate-dial-code {
            width: 100% !important;
        }
        .iti--separate-dial-code .iti__selected-dial-code {
            padding-right: 8px !important;
            margin-right: 4px !important;
            min-width: 50px !important;
        }
        .iti--separate-dial-code input {
            padding-left: 80px !important;
            width: 100% !important;
            box-sizing: border-box !important;
        }
        .iti--separate-dial-code .iti__flag-container {
            left: 0 !important;
            position: absolute !important;
            width: 0 !important;
            overflow: hidden !important;
        }
        .iti--separate-dial-code .iti__selected-flag {
            padding-left: 8px !important;
            padding-right: 8px !important;
            width: auto !important;
            cursor: pointer !important;
        }
        /* Ensure input text doesn't overlap with dial code */
        .iti input {
            padding-left: 80px !important;
            width: 100% !important;
            box-sizing: border-box !important;
        }
        .iti--separate-dial-code input {
            padding-left: 80px !important;
            width: 100% !important;
        }
        /* Fix for form controls */
        .form-control.iti__tel-input,
        .signup-form-control.iti__tel-input {
            padding-left: 80px !important;
            width: 100% !important;
            box-sizing: border-box !important;
        }
        /* Ensure placeholder doesn't overlap */
        .iti input::placeholder {
            padding-left: 0 !important;
        }
        /* Fix for specific input types */
        input[type="tel"].form-control,
        input[type="tel"].signup-form-control {
            padding-left: 80px !important;
        }
        /* Container fixes */
        .form-group .iti,
        .h-enquiry .iti {
            width: 100% !important;
        }
        /* Prevent text overflow */
        .iti--separate-dial-code input {
            text-indent: 0 !important;
        }
        /* Hide flag images completely - only show country code */
        .iti__flag {
            display: none !important;
            visibility: hidden !important;
            width: 0 !important;
            height: 0 !important;
            opacity: 0 !important;
        }
        .iti__flag-box {
            display: none !important;
            visibility: hidden !important;
            width: 0 !important;
            height: 0 !important;
        }
        /* Keep selected flag area clickable for dropdown (contains dial code) */
        .iti__selected-flag {
            display: flex !important;
            align-items: center !important;
            cursor: pointer !important;
        }
        /* Hide flag container but keep dial code visible and clickable */
        .iti__flag-container {
            width: 0 !important;
            min-width: 0 !important;
            overflow: hidden !important;
        }

    </style>
    
    <!-- Load jQuery synchronously - Required by many scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
    <!-- jQuery migrate must load immediately after jQuery -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery/jquery-migrate.min5589.js" id="jquery-migrate-js"></script>
    <!-- intl-tel-input JS (defer to reduce main-thread blocking) -->
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.14.0/build/js/intlTelInput.min.js" defer></script>
    <!-- Defer non-critical scripts to improve initial page load -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js" defer></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/bold-page-builder/slick/slick.minae9e.js" id="bt_bb_slick-js" defer></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/bold-page-builder/content_elements_misc/js/jquery.magnific-popup.minae9e.js" id="bt_bb_magnific-js" defer></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/bold-page-builder/content_elements_misc/js/content_elementsae9e.js" id="bt_bb-js" defer></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/popup-builder/public/js/Popup3a05.js" id="Popup.js-js" defer></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/popup-builder/public/js/PopupConfig3a05.js" id="PopupConfig.js-js" defer></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/popup-builder/public/js/PopupBuilder3a05.js" id="PopupBuilder.js-js" defer></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/offset_overlay.js" defer></script>
    <script>
    let recaptchaLoaded = false;
    function loadRecaptcha() {
        if (recaptchaLoaded) return;
        recaptchaLoaded = true;
        let s = document.createElement('script');
        s.src = 'https://www.google.com/recaptcha/api.js?render=SITE_KEY';
        s.async = true;
        document.body.appendChild(s);
    }
    document.addEventListener('focusin', function(e) {
        if (e.target.closest('form')) loadRecaptcha();
    });
    </script>

    <link rel="icon" href="<?= base_url(); ?>uploads/2023/07/cropped-Favicon-32x32.png?tr=w-30" sizes="32x32" />
    <link rel="icon" href="<?= base_url(); ?>uploads/2023/07/cropped-Favicon-192x192.png?tr=w-30" sizes="192x192" />
    <link rel="apple-touch-icon" href="<?= base_url(); ?>uploads/2023/07/cropped-Favicon-180x180.png?tr=w-30" />

    <meta name="msapplication-TileImage" content="<?= base_url(); ?>uploads/2023/07/cropped-Favicon-270x270.png?tr=w-30" />

    <script>
        window.bt_bb_preview = false
    </script>
    <script>
        window.bt_bb_custom_elements = false;
    </script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/old_script.js" defer></script>
    <?php if (!empty($seo) && $seo != '') { ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Preschool",
                "name": "<?php echo $seo['seo_name']; ?>",
                "url": "<?php echo $seo['seo_url']; ?>",
                "logo": "https://www.kidzoniainternational.in/uploads/2023/07/kidzonia_logo.png",
                <?php if ($page_name == "explore_centers_branches") { ?> "address": {
                        "@type": "PostalAddress",
                        "streetAddress": "<?php echo $seo['seo_street_address']; ?>",
                        "addressLocality": "<?php echo $seo['seo_address_locality']; ?>",
                        "addressRegion": "<?php echo $seo['seo_address_region']; ?>",
                        "postalCode": "<?php echo $seo['seo_postal_code']; ?>"
                    },
                <?php } ?>

                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "<?php echo $seo['seo_telephone']; ?>",
                    <?php if ($page_name == "explore_centers_branches") { ?> "email": "<?php echo $seo['seo_email']; ?>",
                    <?php } ?> "contactType": "customer service",
                    "areaServed": "IN",
                    "availableLanguage": "en"
                },
                "sameAs": [
                    "<?php echo $seo['seo_same_as1']; ?>",
                    "<?php echo $seo['seo_same_as2']; ?>",
                    "<?php echo $seo['seo_same_as3']; ?>",
                    "<?php echo $seo['seo_same_as4']; ?>"
                ]
            }
        </script>
    <?php } ?>






    <!-- Critical inline styles - Keep inline to avoid extra HTTP request -->
    <style>
        @media(max-width:500px) {
            .custom-top-10-preschool {
                display: flex !important;
                flex-wrap: nowrap !important;
                flex-direction: column !important
            }
        }
        .swal2-container { z-index: 9999999999999 }
        .custom-box-event {
            width: 100%;
            object-fit: contain;
            margin: 0 auto;
            display: block;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 1px 2px 9px rgb(0 0 0 / 35%)
        }
        .owl-nav.disabled { display: flex !important }
        .owl-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 100%;
            display: flex;
            padding-right: 0 !important;
            padding-left: 0 !important;
            justify-content: space-between;
            margin: 0;
            z-index: -9999999
        }
        .owl-next, .owl-prev {
            background: #fff;
            color: #000;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 8px 12px
        }
        .owl-next .bi, .owl-prev .bi {
            font-size: 20px;
            font-weight: 900;
            color: #fff;
            background: #8064ab;
            border-radius: 50%;
            padding: 4px 8px;
            transition: text-shadow .3s, background .3s
        }
        .owl-next .bi:hover, .owl-prev .bi:hover {
            font-weight: none;
            background: #654e89;
            text-shadow: 2px 2px 2px rgb(0 0 0 / 70%)
        }
        .owl-prev { position: relative; right: 25px; order: 1 }
        .owl-next { position: relative; left: 25px; order: 2 }
        .owl-stage-outer {
            padding-right: 0 !important;
            padding-left: 0 !important
        }
        a { text-decoration: none }
        .custom-footer-address {
            font-family: Poppins, Arial, Helvetica, sans-serif;
            font-weight: 400;
            line-height: 1.8em
        }
    </style>

    <!-- Resource Hints for better performance -->
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://connect.facebook.net">
    <link rel="preconnect" href="https://www.clarity.ms">

    <!-- Defer Google Analytics - Load after page is fully loaded (delayed to reduce main-thread work) -->
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'G-LYFWX4XD9W');
                gtag('config', 'AW-11142192307');
                var script = document.createElement('script');
                script.async = true;
                script.src = 'https://www.googletagmanager.com/gtag/js?id=G-LYFWX4XD9W';
                document.head.appendChild(script);
            }, 2000);
        });
    </script>

    <!-- Load non-critical scripts after page is fully loaded -->
    <script>
        window.addEventListener('load', function() {
            // Facebook Pixel (delayed load - after page load)
            setTimeout(function() {
                ! function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '261283366061993');
                fbq('track', 'PageView');
            }, 2000);

            // Microsoft Clarity (delayed load - after page load)
            setTimeout(function() {
                (function(c, l, a, r, i, t, y) {
                    c[a] = c[a] || function() {
                        (c[a].q = c[a].q || []).push(arguments)
                    };
                    t = l.createElement(r);
                    t.async = 1;
                    t.src = "https://www.clarity.ms/tag/" + i;
                    y = l.getElementsByTagName(r)[0];
                    y.parentNode.insertBefore(t, y);
                })(window, document, "clarity", "script", "omkteux44j");
            }, 3000);
        });
    </script>

    <!-- Noscript fallbacks -->
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=261283366061993&ev=PageView&noscript=1">
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59Q8HSB4" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    <?php if ($page_name == 'home') { ?>
        <meta name="google-site-verification" content="gUQoAAtqDbnRrftZjryaFRiknDRTqqFv6lYqNO8oPzY" />
    <?php } ?>

    <!-- Meta Pixel Code - Defer to after page load -->
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                ! function(f, b, e, v, n, t, s) {
                    if (f.fbq) return;
                    n = f.fbq = function() {
                        n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq) f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '1069823691669633');
                fbq('track', 'PageView');
            }, 2500);
        });
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=1069823691669633&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Google Tag Manager - Defer to after page load (delayed to reduce main-thread work) -->
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                (function(w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(),
                        event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-59Q8HSB4');
            }, 4000);
        });
    </script>

    <!-- Google tag (gtag.js) - Defer to after page load (delayed to reduce main-thread work) -->
    <script>
        window.addEventListener('load', function() {
            setTimeout(function() {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'G-2PSLM4LFX3');
                var script = document.createElement('script');
                script.async = true;
                script.src = 'https://www.googletagmanager.com/gtag/js?id=G-2PSLM4LFX3';
                document.head.appendChild(script);
            }, 3500);
        });
    </script>

    <?php if ($page_name == 'thank_you') { ?>
        <!-- Event snippet for KIPS - Conversion conversion page -->
        <script>
            gtag('event', 'conversion', {
                'send_to': 'AW-11142192307/so7NCKnSsM8aELO5gcEp'
            });
        </script>
    <?php } ?>

</head>


<body class="home page-template-default page page-id-1764 bt_bb_plugin_active bt_bb_fe_preview_toggle btHeadingWeight_default btSupertitleWeight_default btSubtitleWeight_default btMenuWeight_default btCurrentPage_dot btButtonWeight_default btMenuFontSize15 btHasAltLogo btMenuLeftEnabled btStickyEnabled btHideHeadline btLightSkin btBelowMenu btNoDashInSidebar noBodyPreloader btDropButtons btTransparentLightHeader btNoSidebar" style="--accent-color: #8064ab;--alternate-color: #fdcd51;--third-color: #6fb9bd;--fourth-color: #ed711e;">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59Q8HSB4"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

   <style>
    .logo-loader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .loader-logo {
        width: 180px;
        animation: breathe 2s ease-in-out infinite;
    }

    @keyframes breathe {
        0%, 100% {
            opacity: .9;
            transform: scale(.98);
        }
        50% {
            opacity: 1;
            transform: scale(1.02);
        }
    }

    .loader-dots {
        display: flex;
        margin-top: 30px;
    }

    .loader-dots:after {
        content: "• • •";
        letter-spacing: 8px;
        color: #ccc;
        font-size: 24px;
    }

    body.loading {
        overflow: hidden;
    }
</style>

<!--<div class="logo-loader">-->
<!--    <img src="<?php echo base_url() ?>uploads/2023/07/kidzonia_logo.png" alt="Kidzonia International" class="loader-logo">-->
<!--    <div class="loader-dots"></div>-->
<!--</div>-->

<script>
    window.addEventListener('load', function() {
        document.body.classList.remove('loading');
        document.querySelector('.logo-loader').style.opacity = 0;
        setTimeout(() => document.querySelector('.logo-loader').remove(), 500);
    });
</script>


    <div class="btPageWrap <?php echo 'page-' . $page_name; ?>" id="top">
        <?php
        include 'header.php';
        if ($page_name != 'home' || $page_name != 'whizkids') {
            include 'breadcrumbs.php';
        }
        include $page_name . '.php';
        include 'footer.php';
        include 'modal.php';
        ?>
    </div>

    <!-- Load Bootstrap and OwlCarousel with defer for better performance -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap5-3-2.bundle.min.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

    <!-- Moved inline scripts to external file - Load with defer -->
    <script>
        // Consolidated inline scripts to avoid extra HTTP requests
        var baseUrl = '<?php echo base_url(); ?>';
        
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

                // Get form - use the form that triggered the submit
                var form = this;
                
                // Extract country code before form submission
                extractCountryCode(form);

                // FormData object 
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
                        if (res.status == '200' || res.status == 200) {
                                $(".loader").fadeOut("slow");
                                $('.btn_verify').html('Redirecting...');
                                if (res.url) window.location.href = res.url;
                        } else {

                            $.each(res.errors, function(key, value) {
                                $('[name="' + key + '"]').addClass('is-invalid'); //select parent twice to select div form-group class and add has-error class
                                $('[name="' + key + '"]').next().html(value); //select span help-block class set text error string
                                if (value == "") {
                                    $('[name="' + key + '"]').removeClass('is-invalid');
                                    $('[name="' + key + '"]').addClass('is-valid');
                                }
                            });
                            Swal.fire({
                                title: "Error!",
                                text: res.message,
                                icon: "error",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                },
                                buttonsStyling: !1
                            })
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
                
                // Get form - use the form that triggered the submit
                var form = this;
                
                // Extract country code before form submission
                extractCountryCode(form);
                
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
                                    customClass: { confirmButton: "btn btn-primary" },
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
                                    customClass: { confirmButton: "btn btn-primary" },
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
                
                // Get form - use the form that triggered the submit
                var form = this;
                
                // Extract country code before form submission
                extractCountryCode(form);
                
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
                                    customClass: { confirmButton: "btn btn-primary" },
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
                                    customClass: { confirmButton: "btn btn-primary" },
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
                
                // Get form - use the form that triggered the submit
                var form = this;
                
                // Extract country code before form submission
                extractCountryCode(form);
                
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
                                    customClass: { confirmButton: "btn btn-primary" },
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
                items: 3, loop: true, margin: 10, nav: true, autoplay: true, autoplayTimeout: 3000,
                navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                dots: true, responsive: { 0: { items: 1 }, 600: { items: 2 }, 1000: { items: 3 } }
            });
            $(".owl-carousel-blogs").owlCarousel({
                items: 3, loop: true, margin: 10, nav: true, autoplay: true, autoplayTimeout: 3000,
                navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                dots: true, responsive: { 0: { items: 1 }, 600: { items: 2 }, 1000: { items: 3 } }
            });
            $(".owl-carousel-summer").owlCarousel({
                items: 1, loop: true, margin: 10, nav: true, autoplay: true, autoplayTimeout: 3000,
                navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                dots: true, responsive: { 0: { items: 1 }, 600: { items: 1 }, 1000: { items: 1 } }
            });
            if ($(".owl-carousel-awards").length > 0) {
                $(".owl-carousel-awards").owlCarousel({
                    items: 4, loop: true, margin: 10, nav: true, autoplay: true, autoplayTimeout: 3000,
                    navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                    dots: true, responsive: { 0: { items: 1 }, 600: { items: 2 }, 1000: { items: 4 } }
                });
            }
            if ($(".owl-carousel-parent-testimonial").length > 0) {
                $(".owl-carousel-parent-testimonial").owlCarousel({
                    items: 1, merge: true, loop: true, margin: 10, video: true, lazyLoad: true, center: true,
                    navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                    responsive: { 480: { items: 2 }, 600: { items: 3 } }
                });
            }
            if ($(".owl-carousel-gallery").length > 0) {
                $(".owl-carousel-gallery").owlCarousel({
                    items: 1, merge: true, loop: true, margin: 10, lazyLoad: true, center: true, autoplay: true, autoplayTimeout: 3000,
                    navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                    responsive: { 480: { items: 2 }, 600: { items: 3 } }
                });
            }
            if ($(".owl-carousel-our-team").length > 0) {
                $(".owl-carousel-our-team").owlCarousel({
                    items: 3, loop: true, margin: 10, nav: true,
                    navText: ["<i class='bi bi-chevron-left'></i>", "<i class='bi bi-chevron-right'></i>"],
                    dots: true, responsive: { 0: { items: 1 }, 600: { items: 2 }, 1000: { items: 3 } }
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

        // Function to initialize intl-tel-input on all phone/mobile input fields
        function initializeIntlTelInput() {
            // Wait a bit for DOM to be ready if called immediately
            setTimeout(function() {
                // Find all phone and mobile input fields
                var phoneInputs = document.querySelectorAll('input[type="tel"][name="phone"], input[type="tel"][name="mobile"]');
                
                phoneInputs.forEach(function(input) {
                    // Skip if already initialized or if intlTelInput is not available
                    if (input.classList.contains('iti-initialized') || !window.intlTelInput) {
                        return;
                    }
                    
                    // Skip if input is not in the DOM
                    if (!input.parentNode) {
                        return;
                    }
                    
                    // Remove old attributes that conflict with intl-tel-input
                    input.removeAttribute('minlength');
                    input.removeAttribute('maxlength');
                    input.removeAttribute('oninput');
                    input.removeAttribute('onfocus');
                    
                    try {
                        // Initialize intl-tel-input with India (+91) as default
                        var iti = window.intlTelInput(input, {
                            initialCountry: "in",
                            separateDialCode: true,
                            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.14.0/build/js/utils.js",
                            nationalMode: false,
                            formatOnDisplay: true,
                            autoPlaceholder: "polite"
                        });
                        
                        // Mark as initialized
                        input.classList.add('iti-initialized');
                        
                        // Store the instance for later use
                        input.itiInstance = iti;
                    } catch (e) {
                        console.error('Error initializing intl-tel-input:', e);
                    }
                });
            }, 100);
        }

        // Global function to extract and add country code to form
        function extractCountryCode(form) {
            // Try to find phone input
            var phoneInput = form.querySelector('input[type="tel"][name="phone"], input[name="phone"]');
            if (phoneInput) {
                var itiInstance = phoneInput.itiInstance || window.intlTelInput.getInstance(phoneInput);
                if (itiInstance) {
                    var countryData = itiInstance.getSelectedCountryData();
                    if (countryData && countryData.dialCode) {
                        var countryCode = '+' + countryData.dialCode;
                        console.log('Extracted country code:', countryCode);
                        
                        // Remove existing field if any
                        var existingField = form.querySelector('input[name="phone_country_code"]');
                        if (existingField) {
                            existingField.remove();
                        }
                        // Create hidden input with country code
                        var hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = 'phone_country_code';
                        hiddenInput.value = countryCode;
                        form.appendChild(hiddenInput);
                        console.log('Added hidden field with country code:', countryCode);
                        return true;
                    }
                }
            }
            
            // Try to find mobile input
            var mobileInput = form.querySelector('input[type="tel"][name="mobile"], input[name="mobile"]');
            if (mobileInput) {
                var itiInstance = mobileInput.itiInstance || window.intlTelInput.getInstance(mobileInput);
                if (itiInstance) {
                    var countryData = itiInstance.getSelectedCountryData();
                    if (countryData && countryData.dialCode) {
                        var countryCode = '+' + countryData.dialCode;
                        console.log('Extracted mobile country code:', countryCode);
                        
                        // Remove existing field if any
                        var existingField = form.querySelector('input[name="mobile_country_code"]');
                        if (existingField) {
                            existingField.remove();
                        }
                        // Create hidden input with country code
                        var hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = 'mobile_country_code';
                        hiddenInput.value = countryCode;
                        form.appendChild(hiddenInput);
                        console.log('Added hidden field with mobile country code:', countryCode);
                        return true;
                    }
                }
            }
            
            // Default +91 for unified forms when intlTelInput not present
            var phoneInputForDefault = form.querySelector('input[name="phone"]');
            if (phoneInputForDefault && !form.querySelector('input[name="phone_country_code"]')) {
                var hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'phone_country_code';
                hiddenInput.value = '+91';
                form.appendChild(hiddenInput);
            }
            return false;
        }

        // Initialize on page load for forms that are already in the DOM
        jQuery(document).ready(function($) {
            initializeIntlTelInput();
        });

        // Re-initialize when Bootstrap modals are shown (for dynamically loaded content)
        jQuery('.modal').on('shown.bs.modal', function () {
            console.log('Modal shown, re-initializing intl-tel-input...');
            initializeIntlTelInput();
        });

        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script>
</body>

</html>