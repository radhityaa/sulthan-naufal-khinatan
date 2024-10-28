<script id="page-scroll-to-id-plugin-script-js-extra">
    var mPS2id_params = {
        "instances": {
            "mPS2id_instance_0": {
                "selector": "a[href*='#']:not([href='#'])",
                "autoSelectorMenuLinks": "true",
                "excludeSelector": "a[href^='#tab-'], a[href^='#tabs-'], a[data-toggle]:not([data-toggle='tooltip']), a[data-slide], a[data-vc-tabs], a[data-vc-accordion], a.screen-reader-text.skip-link",
                "scrollSpeed": 2500,
                "autoScrollSpeed": "true",
                "scrollEasing": "easeOutCubic",
                "scrollingEasing": "easeOutCubic",
                "forceScrollEasing": "false",
                "pageEndSmoothScroll": "true",
                "stopScrollOnUserAction": "false",
                "autoCorrectScroll": "false",
                "autoCorrectScrollExtend": "false",
                "layout": "vertical",
                "offset": 0,
                "dummyOffset": "false",
                "highlightSelector": "",
                "clickedClass": "mPS2id-clicked",
                "targetClass": "mPS2id-target",
                "highlightClass": "mPS2id-highlight",
                "forceSingleHighlight": "false",
                "keepHighlightUntilNext": "false",
                "highlightByNextTarget": "false",
                "appendHash": "false",
                "scrollToHash": "true",
                "scrollToHashForAll": "true",
                "scrollToHashDelay": 0,
                "scrollToHashUseElementData": "true",
                "scrollToHashRemoveUrlHash": "false",
                "disablePluginBelow": 0,
                "adminDisplayWidgetsId": "true",
                "adminTinyMCEbuttons": "true",
                "unbindUnrelatedClickEvents": "false",
                "unbindUnrelatedClickEventsSelector": "",
                "normalizeAnchorPointTargets": "false",
                "encodeLinks": "false"
            }
        },
        "total_instances": "1",
        "shortcode_class": "_ps2id"
    };
</script>
<script src="https://demo.invi.id/wp-content/plugins/page-scroll-to-id/js/page-scroll-to-id.min.js?js_icv=1aa8f9"
    id="page-scroll-to-id-plugin-script-js"></script>
<script src="https://demo.invi.id/wp-content/plugins/weddingpress/assets/js/wdp-swiper.min.js?js_icv=1aa8f9"
    id="wdp-swiper-js-js"></script>
<script src="https://demo.invi.id/wp-content/plugins/weddingpress/assets/js/qr-code.js?js_icv=1aa8f9"
    id="weddingpress-qr-js"></script>
<script src="https://demo.invi.id/wp-content/plugins/weddingpress/assets/js/exad-scripts.min.js?js_icv=1aa8f9"
    id="exad-main-script-js"></script>
<script id="cui_js_script-js-extra">
    var CUI_WP = {
        "ajaxurl": "https:\/\/demo.invi.id\/wp-admin\/admin-ajax.php",
        "cuiNonce": "1c60929156",
        "jpages": "true",
        "jPagesNum": "10",
        "textCounter": "true",
        "textCounterNum": "500",
        "widthWrap": "",
        "autoLoad": "true",
        "thanksComment": "Thanks for your comment!",
        "thanksReplyComment": "Thanks for answering the comment!",
        "duplicateComment": "You might have left one of the fields blank, or duplicate comments",
        "accept": "Accept",
        "cancel": "Cancel",
        "reply": "Reply",
        "textWriteComment": "Ucapan",
        "classPopularComment": "cui-popular-comment",
        "textToDisplay": "Text to display",
        "textCharacteresMin": "2 characters minimum",
        "textNavNext": "Next",
        "textNavPrev": "Previous",
        "textMsgDeleteComment": "Do you want delete this comment?",
        "textLoadMore": "Load more"
    };
</script>
<script src="https://demo.invi.id/wp-content/plugins/weddingpress/addons/comment-kit2//js/cui_script.js?js_icv=1aa8f9"
    id="cui_js_script-js"></script>
<script
    src="https://demo.invi.id/wp-content/plugins/weddingpress/addons/comment-kit2//js/libs/jquery.jPages.min.js?js_icv=1aa8f9"
    id="cui_jPages-js"></script>
<script
    src="https://demo.invi.id/wp-content/plugins/weddingpress/addons/comment-kit2//js/libs/jquery.textareaCounter.js?js_icv=1aa8f9"
    id="cui_textCounter-js"></script>
<script
    src="https://demo.invi.id/wp-content/plugins/weddingpress/addons/comment-kit2//js/libs/jquery.placeholder.min.js?js_icv=1aa8f9"
    id="cui_placeholder-js"></script>
<script
    src="https://demo.invi.id/wp-content/plugins/weddingpress/addons/comment-kit2//js/libs/autosize.min.js?js_icv=1aa8f9"
    id="cui_autosize-js"></script>
<script id="rocket-browser-checker-js-after">
    class RocketBrowserCompatibilityChecker {

        constructor(options) {
            this.passiveSupported = false;

            this._checkPassiveOption(this);
            this.options = this.passiveSupported ? options : false;
        }

        /**
         * Initializes browser check for addEventListener passive option.
         *
         * @link https://developer.mozilla.org/en-US/docs/Web/API/EventTarget/addEventListener#Safely_detecting_option_support
         * @private
         *
         * @param self Instance of this object.
         * @returns {boolean}
         */
        _checkPassiveOption(self) {
            try {
                const options = {
                    // This function will be called when the browser attempts to access the passive property.
                    get passive() {
                        self.passiveSupported = true;
                        return false;
                    }
                };

                window.addEventListener('test', null, options);
                window.removeEventListener('test', null, options);
            } catch (err) {
                self.passiveSupported = false;
            }
        }

        /**
         * Checks if the browser supports requestIdleCallback and cancelIdleCallback. If no, shims its behavior with a polyfills.
         *
         * @link @link https://developers.google.com/web/updates/2015/08/using-requestidlecallback
         */
        initRequestIdleCallback() {
            if (!'requestIdleCallback' in window) {
                window.requestIdleCallback = (cb) => {
                    const start = Date.now();
                    return setTimeout(() => {
                        cb({
                            didTimeout: false,
                            timeRemaining: function timeRemaining() {
                                return Math.max(0, 50 - (Date.now() - start));
                            }
                        });
                    }, 1);
                };
            }

            if (!'cancelIdleCallback' in window) {
                window.cancelIdleCallback = (id) => clearTimeout(id);
            }
        }

        /**
         * Detects if data saver mode is on.
         *
         * @link https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/save-data/#detecting_the_save-data_setting
         *
         * @returns {boolean|boolean}
         */
        isDataSaverModeOn() {
            return (
                'connection' in navigator &&
                true === navigator.connection.saveData
            );
        }

        /**
         * Checks if the browser supports link prefetch.
         *
         * @returns {boolean|boolean}
         */
        supportsLinkPrefetch() {
            const elem = document.createElement('link');
            return (
                elem.relList &&
                elem.relList.supports &&
                elem.relList.supports('prefetch') &&
                window.IntersectionObserver &&
                'isIntersecting' in IntersectionObserverEntry.prototype
            );
        }

        isSlowConnection() {
            return (
                'connection' in navigator &&
                'effectiveType' in navigator.connection &&
                (
                    '2g' === navigator.connection.effectiveType ||
                    'slow-2g' === navigator.connection.effectiveType
                )
            )
        }
    }
</script>
<script id="rocket-preload-links-js-extra">
    var RocketPreloadLinksConfig = {
        "excludeUris": "\/tema-reseller\/|\/(?:.+\/)?feed(?:\/(?:.+\/?)?)?$|\/(?:.+\/)?embed\/|\/(index.php\/)?(.*)wp-json(\/.*|$)|\/refer\/|\/go\/|\/recommend\/|\/recommends\/",
        "usesTrailingSlash": "1",
        "imageExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php",
        "fileExt": "jpg|jpeg|gif|png|tiff|bmp|webp|avif|pdf|doc|docx|xls|xlsx|php|html|htm",
        "siteUrl": "https:\/\/demo.invi.id",
        "onHoverDelay": "100",
        "rateThrottle": "3"
    };
</script>
<script id="rocket-preload-links-js-after">
    class RocketPreloadLinks {

        constructor(browser, config) {
            this.browser = browser;
            this.config = config;
            this.options = this.browser.options;

            this.prefetched = new Set;
            this.eventTime = null;
            this.threshold = 1111;
            this.numOnHover = 0;
        }

        /**
         * Initializes the handler.
         */
        init() {
            if (
                !this.browser.supportsLinkPrefetch() ||
                this.browser.isDataSaverModeOn() ||
                this.browser.isSlowConnection()
            ) {
                return;
            }

            this.regex = {
                excludeUris: RegExp(this.config.excludeUris, 'i'),
                images: RegExp('.(' + this.config.imageExt + ')$', 'i'),
                fileExt: RegExp('.(' + this.config.fileExt + ')$', 'i')
            };

            this._initListeners(this);
        }

        /**
         * Initializes the event listeners.
         *
         * @private
         *
         * @param self instance of this object, used for binding "this" to the listeners.
         */
        _initListeners(self) {
            // Setting onHoverDelay to -1 disables the "on-hover" feature.
            if (this.config.onHoverDelay > -1) {
                document.addEventListener('mouseover', self.listener.bind(self), self.listenerOptions);
            }

            document.addEventListener('mousedown', self.listener.bind(self), self.listenerOptions);
            document.addEventListener('touchstart', self.listener.bind(self), self.listenerOptions);
        }

        /**
         * Event listener. Processes when near or on a valid <a> hyperlink.
         *
         * @param Event event Event instance.
         */
        listener(event) {
            const linkElem = event.target.closest('a');
            const url = this._prepareUrl(linkElem);
            if (null === url) {
                return;
            }

            switch (event.type) {
                case 'mousedown':
                case 'touchstart':
                    this._addPrefetchLink(url);
                    break;
                case 'mouseover':
                    this._earlyPrefetch(linkElem, url, 'mouseout');
            }
        }

        /**
         *
         * @private
         *
         * @param Element|null linkElem
         * @param object url
         * @param string resetEvent
         */
        _earlyPrefetch(linkElem, url, resetEvent) {
            const doPrefetch = () => {
                falseTrigger = null;

                // Start the rate throttle: 1 sec timeout.
                if (0 === this.numOnHover) {
                    setTimeout(() => this.numOnHover = 0, 1000);
                }
                // Bail out when exceeding the rate throttle.
                else if (this.numOnHover > this.config.rateThrottle) {
                    return;
                }

                this.numOnHover++;
                this._addPrefetchLink(url);
            };

            // Delay to avoid false triggers for hover/touch/tap.
            let falseTrigger = setTimeout(doPrefetch, this.config.onHoverDelay);

            // On reset event, reset the false trigger timer.
            const reset = () => {
                linkElem.removeEventListener(resetEvent, reset, {
                    passive: true
                });
                if (null === falseTrigger) {
                    return;
                }

                clearTimeout(falseTrigger);
                falseTrigger = null;
            };
            linkElem.addEventListener(resetEvent, reset, {
                passive: true
            });
        }

        /**
         * Adds a <link rel="prefetch" href="<url>"> for the given URL.
         *
         * @param string url The Given URL to prefetch.
         */
        _addPrefetchLink(url) {
            this.prefetched.add(url.href);

            return new Promise((resolve, reject) => {
                const elem = document.createElement('link');
                elem.rel = 'prefetch';
                elem.href = url.href;
                elem.onload = resolve;
                elem.onerror = reject;

                document.head.appendChild(elem);
            }).catch(() => {
                // ignore and continue.
            });
        }

        /**
         * Prepares the target link's URL.
         *
         * @private
         *
         * @param Element|null linkElem Instance of the link element.
         * @returns {null|*}
         */
        _prepareUrl(linkElem) {
            if (
                null === linkElem ||
                typeof linkElem !== 'object' ||
                !'href' in linkElem ||
                // Link prefetching only works on http/https protocol.
                ['http:', 'https:'].indexOf(linkElem.protocol) === -1
            ) {
                return null;
            }

            const origin = linkElem.href.substring(0, this.config.siteUrl.length);
            const pathname = this._getPathname(linkElem.href, origin);
            const url = {
                original: linkElem.href,
                protocol: linkElem.protocol,
                origin: origin,
                pathname: pathname,
                href: origin + pathname
            };

            return this._isLinkOk(url) ? url : null;
        }

        /**
         * Gets the URL's pathname. Note: ensures the pathname matches the permalink structure.
         *
         * @private
         *
         * @param object url Instance of the URL.
         * @param string origin The target link href's origin.
         * @returns {string}
         */
        _getPathname(url, origin) {
            let pathname = origin ?
                url.substring(this.config.siteUrl.length) :
                url;

            if (!pathname.startsWith('/')) {
                pathname = '/' + pathname;
            }

            if (this._shouldAddTrailingSlash(pathname)) {
                return pathname + '/';
            }

            return pathname;
        }

        _shouldAddTrailingSlash(pathname) {
            return (
                this.config.usesTrailingSlash &&
                !pathname.endsWith('/') &&
                !this.regex.fileExt.test(pathname)
            );
        }

        /**
         * Checks if the given link element is okay to process.
         *
         * @private
         *
         * @param object url URL parts object.
         *
         * @returns {boolean}
         */
        _isLinkOk(url) {
            if (null === url || typeof url !== 'object') {
                return false;
            }

            return (
                !this.prefetched.has(url.href) &&
                url.origin === this.config.siteUrl // is an internal document.
                &&
                url.href.indexOf('?') === -1 // not a query string.
                &&
                url.href.indexOf('#') === -1 // not an anchor.
                &&
                !this.regex.excludeUris.test(url.href) // not excluded.
                &&
                !this.regex.images.test(url.href) // not an image.
            );
        }

        /**
         * Named static constructor to encapsulate how to create the object.
         */
        static run() {
            // Bail out if the configuration not passed from the server.
            if (typeof RocketPreloadLinksConfig === 'undefined') {
                return;
            }

            const browser = new RocketBrowserCompatibilityChecker({
                capture: true,
                passive: true
            });
            const instance = new RocketPreloadLinks(browser, RocketPreloadLinksConfig);
            instance.init();
        }
    }

    RocketPreloadLinks.run();
</script>
<script src="https://demo.invi.id/wp-content/plugins/elementor/assets/lib/e-gallery/js/e-gallery.js?js_icv=1aa8f9"
    id="elementor-gallery-js"></script>
<script id="ct-scripts-js-extra">
    var ct_localizations = {
        "ajax_url": "https:\/\/demo.invi.id\/wp-admin\/admin-ajax.php",
        "public_url": "https:\/\/demo.invi.id\/wp-content\/themes\/blocksy\/static\/bundle\/",
        "rest_url": "https:\/\/demo.invi.id\/wp-json\/",
        "search_url": "https:\/\/demo.invi.id\/search\/QUERY_STRING\/",
        "show_more_text": "Show more",
        "more_text": "More",
        "search_live_results": "Search results",
        "search_live_no_results": "No results",
        "search_live_no_result": "No results",
        "search_live_one_result": "You got %s result. Please press Tab to select it.",
        "search_live_many_results": "You got %s results. Please press Tab to select one.",
        "clipboard_copied": "Copied!",
        "clipboard_failed": "Failed to Copy",
        "expand_submenu": "Expand dropdown menu",
        "collapse_submenu": "Collapse dropdown menu",
        "dynamic_js_chunks": [],
        "dynamic_styles": {
            "lazy_load": "https:\/\/demo.invi.id\/wp-content\/themes\/blocksy\/static\/bundle\/non-critical-styles.min.css?ver=2.0.71",
            "search_lazy": "https:\/\/demo.invi.id\/wp-content\/themes\/blocksy\/static\/bundle\/non-critical-search-styles.min.css?ver=2.0.71",
            "back_to_top": "https:\/\/demo.invi.id\/wp-content\/themes\/blocksy\/static\/bundle\/back-to-top.min.css?ver=2.0.71"
        },
        "dynamic_styles_selectors": [{
            "selector": ".ct-header-cart, #woo-cart-panel",
            "url": "https:\/\/demo.invi.id\/wp-content\/themes\/blocksy\/static\/bundle\/cart-header-element-lazy.min.css?ver=2.0.71"
        }, {
            "selector": ".flexy",
            "url": "https:\/\/demo.invi.id\/wp-content\/themes\/blocksy\/static\/bundle\/flexy.min.css?ver=2.0.71"
        }]
    };
    var WP_DEBUG = {
        "debug": "1"
    };
</script>
<script src="https://demo.invi.id/wp-content/themes/blocksy/static/bundle/main.js?js_icv=1aa8f9" id="ct-scripts-js">
</script>
<script src="https://demo.invi.id/wp-includes/js/comment-reply.js?js_icv=1aa8f9" id="comment-reply-js" async
    data-wp-strategy="async"></script>
<script src="https://demo.invi.id/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.js?js_icv=1aa8f9"
    id="elementor-pro-webpack-runtime-js"></script>
<script src="https://demo.invi.id/wp-content/plugins/elementor/assets/js/webpack.runtime.js?js_icv=1aa8f9"
    id="elementor-webpack-runtime-js"></script>
<script src="https://demo.invi.id/wp-content/plugins/elementor/assets/js/frontend-modules.js?js_icv=1aa8f9"
    id="elementor-frontend-modules-js"></script>
<script src="https://demo.invi.id/wp-includes/js/dist/hooks.js?js_icv=1aa8f9" id="wp-hooks-js"></script>
<script src="https://demo.invi.id/wp-includes/js/dist/i18n.js?js_icv=1aa8f9" id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
</script>
<script id="elementor-pro-frontend-js-before">
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/demo.invi.id\/wp-admin\/admin-ajax.php",
        "nonce": "78ed13dd1b",
        "urls": {
            "assets": "https:\/\/demo.invi.id\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "https:\/\/demo.invi.id\/wp-json\/"
        },
        "shareButtonsNetworks": {
            "facebook": {
                "title": "Facebook",
                "has_counter": true
            },
            "twitter": {
                "title": "Twitter"
            },
            "linkedin": {
                "title": "LinkedIn",
                "has_counter": true
            },
            "pinterest": {
                "title": "Pinterest",
                "has_counter": true
            },
            "reddit": {
                "title": "Reddit",
                "has_counter": true
            },
            "vk": {
                "title": "VK",
                "has_counter": true
            },
            "odnoklassniki": {
                "title": "OK",
                "has_counter": true
            },
            "tumblr": {
                "title": "Tumblr"
            },
            "digg": {
                "title": "Digg"
            },
            "skype": {
                "title": "Skype"
            },
            "stumbleupon": {
                "title": "StumbleUpon",
                "has_counter": true
            },
            "mix": {
                "title": "Mix"
            },
            "telegram": {
                "title": "Telegram"
            },
            "pocket": {
                "title": "Pocket",
                "has_counter": true
            },
            "xing": {
                "title": "XING",
                "has_counter": true
            },
            "whatsapp": {
                "title": "WhatsApp"
            },
            "email": {
                "title": "Email"
            },
            "print": {
                "title": "Print"
            },
            "x-twitter": {
                "title": "X"
            },
            "threads": {
                "title": "Threads"
            }
        },
        "facebook_sdk": {
            "lang": "id_ID",
            "app_id": ""
        },
        "lottie": {
            "defaultAnimationUrl": "https:\/\/demo.invi.id\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
        }
    };
</script>
<script src="https://demo.invi.id/wp-content/plugins/elementor-pro/assets/js/frontend.js?js_icv=1aa8f9"
    id="elementor-pro-frontend-js"></script>
<script src="https://demo.invi.id/wp-includes/js/jquery/ui/core.js?js_icv=1aa8f9" id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": true
        },
        "i18n": {
            "shareOnFacebook": "Bagikan di Facebook",
            "shareOnTwitter": "Bagikan di Twitter",
            "pinIt": "Buat Pin",
            "download": "Unduh",
            "downloadImage": "Unduh gambar",
            "fullscreen": "Layar Penuh",
            "zoom": "Perbesar",
            "share": "Bagikan",
            "playVideo": "Putar Video",
            "previous": "Sebelumnya",
            "next": "Selanjutnya",
            "close": "Tutup",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Slide sebelumnya",
            "a11yCarouselNextSlideMessage": "Slide selanjutnya",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Layar lebar",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.24.4",
        "is_static": false,
        "experimentalFeatures": {
            "additional_custom_breakpoints": true,
            "container": true,
            "container_grid": true,
            "e_swiper_latest": true,
            "e_nested_atomic_repeaters": true,
            "e_onboarding": true,
            "theme_builder_v2": true,
            "home_screen": true,
            "nested-elements": true,
            "link-in-bio": true,
            "floating-buttons": true,
            "display-conditions": true,
            "taxonomy-filter": true
        },
        "urls": {
            "assets": "https:\/\/demo.invi.id\/wp-content\/plugins\/elementor\/assets\/",
            "ajaxurl": "https:\/\/demo.invi.id\/wp-admin\/admin-ajax.php"
        },
        "nonces": {
            "floatingButtonsClickTracking": "af7b53578d"
        },
        "swiperClass": "swiper",
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes"
        },
        "post": {
            "id": 2841,
            "title": "Khitanan%2002%20%E2%80%93%20Demo%20Invi",
            "excerpt": "",
            "featuredImage": "https:\/\/demo.invi.id\/wp-content\/uploads\/2024\/06\/Khitanan-02-1024x1024.webp"
        }
    };
</script>
<script src="https://demo.invi.id/wp-content/plugins/elementor/assets/js/frontend.js?js_icv=1aa8f9"
    id="elementor-frontend-js"></script>
<script src="https://demo.invi.id/wp-content/plugins/elementor-pro/assets/js/elements-handlers.js?js_icv=1aa8f9"
    id="pro-elements-handlers-js"></script>
<script src="https://demo.invi.id/wp-content/plugins/weddingpress/assets/js/modules/bdt-uikit.js?js_icv=1aa8f9"
    id="bdt-uikit-js"></script>
<script id="jet-elements-js-extra">
    var jetElements = {
        "ajaxUrl": "https:\/\/demo.invi.id\/wp-admin\/admin-ajax.php",
        "isMobile": "false",
        "templateApiUrl": "https:\/\/demo.invi.id\/wp-json\/jet-elements-api\/v1\/elementor-template",
        "devMode": "false",
        "messages": {
            "invalidMail": "Please specify a valid e-mail"
        }
    };
</script>
<script src="https://demo.invi.id/wp-content/plugins/jet-elements/assets/js/jet-elements.js?js_icv=1aa8f9"
    id="jet-elements-js"></script>
<script id="weddingpress-wdp-js-extra">
    var cevar = {
        "ajax_url": "https:\/\/demo.invi.id\/wp-admin\/admin-ajax.php",
        "plugin_url": "https:\/\/demo.invi.id\/wp-content\/plugins\/weddingpress\/"
    };
</script>
<script src="https://demo.invi.id/wp-content/plugins/weddingpress/assets/js/wdp.min.js?js_icv=1aa8f9"
    id="weddingpress-wdp-js"></script>
<script src="https://demo.invi.id/wp-content/plugins/weddingpress/assets/js/guest-form.js?js_icv=1aa8f9"
    id="kirim-kit-js"></script>
<script
    src="https://demo.invi.id/wp-content/plugins/powerpack-elements/assets/lib/tooltipster/tooltipster.js?js_icv=1aa8f9"
    id="pp-tooltipster-js"></script>
<script src="https://demo.invi.id/wp-content/plugins/powerpack-elements/assets/js/frontend-tooltip.js?js_icv=1aa8f9"
    id="pp-elements-tooltip-js"></script>

<script>
    // Tentukan tanggal akhir countdown
    const countdownDate = new Date("November 2, 2024 00:00:00").getTime();

    // Update countdown setiap 1 detik
    const countdownInterval = setInterval(function() {
        // Dapatkan waktu saat ini
        const now = new Date().getTime();

        // Hitung jarak waktu antara sekarang dan tanggal countdown
        const distance = countdownDate - now;

        // Hitung hari, jam, menit, dan detik
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Tampilkan hasil di elemen HTML
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // Jika countdown selesai
        if (distance < 0) {
            clearInterval(countdownInterval);
            document.getElementById("countdown-timer").innerHTML = "Waktu telah berakhir!";
        }
    }, 1000);
</script>
