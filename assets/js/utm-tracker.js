/**
 * UTM Parameter Tracker
 * Captures UTM parameters from URL and stores them in session/localStorage
 * Also captures referer information and detects source platforms
 */

(function() {
    'use strict';

    // UTM parameter names to capture
    const UTM_PARAMS = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content', 'utm_id'];
    
    // Cookie/localStorage key prefix
    const STORAGE_PREFIX = 'utm_';
    const COOKIE_EXPIRY_DAYS = 30;

    /**
     * Get URL parameters
     */
    function getUrlParams() {
        const params = {};
        const urlParams = new URLSearchParams(window.location.search);
        
        UTM_PARAMS.forEach(param => {
            const value = urlParams.get(param);
            if (value) {
                params[param] = value;
            }
        });
        
        return params;
    }

    /**
     * Get referer information
     */
    function getRefererInfo() {
        const referer = document.referrer || '';
        let sourceType = 'direct';
        let detectedSource = null;
        
        if (referer) {
            try {
                const refererUrl = new URL(referer);
                const domain = refererUrl.hostname.toLowerCase();
                
                // Detect source platforms
                if (domain.includes('instagram.com')) {
                    sourceType = 'social_media';
                    detectedSource = 'instagram';
                } else if (domain.includes('facebook.com') || domain.includes('fb.com') || domain.includes('m.facebook.com')) {
                    sourceType = 'social_media';
                    detectedSource = 'facebook';
                } else if (domain.includes('wa.me') || domain.includes('web.whatsapp.com') || domain.includes('whatsapp.com')) {
                    sourceType = 'messaging_app';
                    detectedSource = 'whatsapp';
                } else if (domain.includes('google.com') || domain.includes('google.co.in')) {
                    sourceType = 'search_engine';
                    detectedSource = 'google';
                } else if (domain.includes('bing.com')) {
                    sourceType = 'search_engine';
                    detectedSource = 'bing';
                } else if (domain.includes('yahoo.com')) {
                    sourceType = 'search_engine';
                    detectedSource = 'yahoo';
                } else {
                    sourceType = 'other';
                }
            } catch (e) {
                // Invalid URL, treat as direct
                sourceType = 'direct';
            }
        }
        
        return {
            referer: referer,
            domain: referer ? (new URL(referer).hostname) : null,
            sourceType: sourceType,
            detectedSource: detectedSource
        };
    }

    /**
     * Set cookie
     */
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + encodeURIComponent(value) + ";" + expires + ";path=/";
    }

    /**
     * Get cookie
     */
    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
        }
        return null;
    }

    /**
     * Store UTM parameters in localStorage and cookies
     */
    function storeUTMParams(params) {
        UTM_PARAMS.forEach(param => {
            if (params[param]) {
                // Store in localStorage
                try {
                    localStorage.setItem(STORAGE_PREFIX + param, params[param]);
                } catch (e) {
                    // localStorage not available, use cookies only
                }
                
                // Store in cookies
                setCookie(STORAGE_PREFIX + param, params[param], COOKIE_EXPIRY_DAYS);
            }
        });
    }

    /**
     * Get stored UTM parameters from localStorage/cookies
     */
    function getStoredUTMParams() {
        const params = {};
        
        UTM_PARAMS.forEach(param => {
            // Try localStorage first
            try {
                const value = localStorage.getItem(STORAGE_PREFIX + param);
                if (value) {
                    params[param] = value;
                    return;
                }
            } catch (e) {
                // localStorage not available
            }
            
            // Fallback to cookies
            const cookieValue = getCookie(STORAGE_PREFIX + param);
            if (cookieValue) {
                params[param] = cookieValue;
            }
        });
        
        return params;
    }

    /**
     * Send UTM parameters to server via AJAX
     */
    function sendToServer(utmParams, refererInfo) {
        // Merge URL params with stored params (URL params take priority)
        const allParams = Object.assign({}, getStoredUTMParams(), utmParams);
        
        // Check if referer is from external domain (not our own site)
        const currentHost = window.location.hostname.toLowerCase();
        let externalReferer = refererInfo.referer;
        let externalDomain = refererInfo.domain;
        
        // Only use referer if it's from external domain
        if (refererInfo.referer && refererInfo.domain) {
            const refererHost = refererInfo.domain.toLowerCase();
            // If referer is from our own domain, don't use it (it's internal navigation)
            if (refererHost === currentHost || refererHost.includes(currentHost) || currentHost.includes(refererHost)) {
                // Check if we have a stored external referer
                try {
                    const storedReferer = localStorage.getItem('utm_referer_url');
                    const storedDomain = localStorage.getItem('utm_referer_domain');
                    if (storedReferer && storedDomain && storedDomain !== currentHost) {
                        externalReferer = storedReferer;
                        externalDomain = storedDomain;
                    } else {
                        externalReferer = null;
                        externalDomain = null;
                    }
                } catch (e) {
                    externalReferer = null;
                    externalDomain = null;
                }
            } else {
                // External referer - store it for future use
                try {
                    localStorage.setItem('utm_referer_url', refererInfo.referer);
                    localStorage.setItem('utm_referer_domain', refererInfo.domain);
                } catch (e) {
                    // localStorage not available
                }
            }
        }
        
        // If no UTM source but we detected a source from referer, use that
        if (!allParams.utm_source && refererInfo.detectedSource) {
            allParams.utm_source = refererInfo.detectedSource;
        }
        
        // Prepare data to send
        const data = {
            utm_params: allParams,
            referer: externalReferer,
            referer_domain: externalDomain,
            source_type: refererInfo.sourceType,
            detected_source: refererInfo.detectedSource,
            landing_page: window.location.href,
            timestamp: new Date().toISOString()
        };
        
        // Send to server
        if (typeof jQuery !== 'undefined') {
            // Use form data format for CodeIgniter compatibility
            var formData = new FormData();
            formData.append('utm_params[utm_source]', allParams.utm_source || '');
            formData.append('utm_params[utm_medium]', allParams.utm_medium || '');
            formData.append('utm_params[utm_campaign]', allParams.utm_campaign || '');
            formData.append('utm_params[utm_term]', allParams.utm_term || '');
            formData.append('utm_params[utm_content]', allParams.utm_content || '');
            formData.append('utm_params[utm_id]', allParams.utm_id || '');
            formData.append('referer', externalReferer || '');
            formData.append('referer_domain', externalDomain || '');
            formData.append('source_type', refererInfo.sourceType || '');
            formData.append('detected_source', refererInfo.detectedSource || '');
            
            jQuery.ajax({
                url: window.location.origin + '/home/capture_utm',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(response) {
                    // Success - parameters stored in session
                },
                error: function(xhr, status, error) {
                    // Silently fail - don't interrupt user experience
                    console.log('UTM tracking: Failed to send to server');
                }
            });
        } else {
            // Fallback to fetch API if jQuery not available
            var formData = new FormData();
            formData.append('utm_params[utm_source]', allParams.utm_source || '');
            formData.append('utm_params[utm_medium]', allParams.utm_medium || '');
            formData.append('utm_params[utm_campaign]', allParams.utm_campaign || '');
            formData.append('utm_params[utm_term]', allParams.utm_term || '');
            formData.append('utm_params[utm_content]', allParams.utm_content || '');
            formData.append('utm_params[utm_id]', allParams.utm_id || '');
            formData.append('referer', externalReferer || '');
            formData.append('referer_domain', externalDomain || '');
            formData.append('source_type', refererInfo.sourceType || '');
            formData.append('detected_source', refererInfo.detectedSource || '');
            
            fetch(window.location.origin + '/home/capture_utm', {
                method: 'POST',
                body: formData
            }).catch(function(error) {
                // Silently fail
                console.log('UTM tracking: Failed to send to server');
            });
        }
    }

    /**
     * Initialize UTM tracking
     */
    function init() {
        // Get UTM parameters from URL
        const urlParams = getUrlParams();
        
        // Get referer information
        const refererInfo = getRefererInfo();
        
        // If we have UTM parameters in URL, store them
        if (Object.keys(urlParams).length > 0) {
            storeUTMParams(urlParams);
        }
        
        // Send to server (will use stored params if no URL params)
        sendToServer(urlParams, refererInfo);
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        // DOM already loaded
        init();
    }

})();






