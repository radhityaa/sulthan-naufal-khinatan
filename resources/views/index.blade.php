@include('layouts.head')

<body
    class="khitan-template khitan-template-elementor_canvas single single-khitan postid-2841 wp-custom-logo wp-embed-responsive elementor-default elementor-template-canvas elementor-kit-7 elementor-page elementor-page-2841">
    <div data-elementor-type="wp-post" data-elementor-id="2841" class="elementor elementor-2841"
        data-elementor-post-type="khitan">
        <div class="elementor-element elementor-element-51c4b66c e-con-full e-flex e-con e-parent" data-id="51c4b66c"
            data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
            <div class="elementor-element elementor-element-120e09d elementor-widget elementor-widget-weddingpress-wellcome"
                data-id="120e09d" data-element_type="widget" data-widget_type="weddingpress-wellcome.default">
                <div class="elementor-widget-container">

                    <div class="modalx"
                        data-sampul='https://cdn2.invi.id/q:intelligent/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-BG-scaled-1.webp'>

                        <div class="overlayy"></div>
                        <div class="content-modalx">
                            <div class="info_modalx">

                                <div class="elementor-image img"><img src="{{ asset('cover.jpeg') }}" data-src=""
                                        title="Khitanan-Image-05-scaled-1.webp" alt="Khitanan-Image-05-scaled-1.webp"
                                        loading="lazy"
                                        class="wps-ic-live-cdn wpc-excluded-adaptive wpc-lazy-skipped wpc-excluded-adaptive wpc-lazy-skipped"
                                        wpc-data="excluded-adaptive" alt="Khitanan-Image-05-scaled-1.webp" />
                                </div>



                                <div class="wdp-txt-the-wedding" style="width:auto !important">Undangan Tasyakuran
                                    Khitan
                                </div>




                                <div class="wdp-mempelai" style="width: auto !important;">Sulthan Naufal Al-Banus
                                </div>




                                <div class="wdp-tgl" style="width: auto !important;">Sabtu, 02 November 2024
                                </div>


                                <div class="wdp-dear" style="width: auto !important;">Kpd Bpk/Ibu/Saudara/i</div>
                                @if ($guest)
                                    <div class="wdp-name namatamu" style="width: auto !important;">{{ $guest }}
                                    </div>
                                @endif
                                <div class="wdp-text" style="width: auto !important;">Tanpa Mengurangi Rasa
                                    Hormat, Kami Mengundang Anda Untuk Berhadir Di Acara Tasyakuran Khitanan Kami.
                                </div>

                                <div class="wdp-button-wrapper" id="wdp-button-wrapper">
                                    <button class="elementor-button">
                                        <span>
                                            <i class="far fa-envelope-open"></i> </span>
                                        Buka Undangan </button>
                                </div>

                                <div class="wdp-keterangan">
                                    Mohon maaf apabila ada kesalahan penulisan nama/gelar </div>




                            </div>
                        </div>
                    </div>



                    <script>
                        var sampulbg = jQuery('.modalx').data('sampul');
                        jQuery('.modalx').attr('style', 'background-image: url(' + sampulbg + ') !important;');
                        jQuery('body').css('overflow', 'hidden');

                        jQuery('.wdp-button-wrapper button').on('click', function() {
                            jQuery('.modalx').addClass('removeModals');
                            jQuery('body').css('overflow', 'auto');
                        });
                    </script>



                    <script>
                        //var z = document.querySelector('#wdp-button-wrapper');
                        //z.addEventListener("click", function(event) {

                        //Neo - Added New Conditional Statement for select Audio or Youtube
                        var isYT = false;
                        jQuery("#wdp-button-wrapper").on("click", "button", function() {
                            // var isYT = false;
                            playAudio();
                            if (document.body.contains(document.getElementById("song"))) {
                                document.getElementById("song").play();
                                isYT = false;
                            } else {
                                isYT = true;
                                player.playVideo();
                            }

                            function playAudio() {
                                var isYT = false;
                                if (document.body.contains(document.getElementById("song"))) {
                                    document.getElementById("song").play();
                                    isYT = false;
                                } else {
                                    isYT = true;
                                    player.playVideo();
                                }
                            }
                        });
                    </script>
                    <script>
                        // decode &amp; and \'
                        if (jQuery('.namatamu').length >= 1) {
                            let tmpHtmlNamatamu = document.querySelectorAll('.namatamu')
                            tmpHtmlNamatamu.forEach((tamuTexts) => {
                                tamuTexts.innerHTML = cleanIts(tamuTexts.innerHTML);
                            });
                        }

                        function cleanIts(str) {

                            return jQuery("<textarea></textarea>").html(str.replace(/\\/g, "")).text();
                        }
                    </script>

                    <style type="text/css">
                        .elementor-button-qr {
                            display: inline-block;
                            line-height: 1;
                            background-color: #818a91;
                            font-size: 15px;
                            padding: 12px 24px;
                            border-radius: 3px;
                            color: #fff;
                            fill: #fff;
                            text-align: center;
                            -webkit-transition: all .3s;
                            -o-transition: all .3s;
                            transition: all .3s;
                        }
                    </style>

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-2ca6b8b9 e-con-full e-flex e-con e-parent" data-id="2ca6b8b9"
            data-element_type="container" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
            <div class="elementor-element elementor-element-7ce861d8 animated-slow elementor-absolute goyang-kanan-atas elementor-invisible elementor-widget elementor-widget-image"
                data-id="7ce861d8" data-element_type="widget"
                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_position&quot;:&quot;absolute&quot;}"
                data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-01-scaled-1.webp"
                        data-src="" width="2560" height="1281" alt
                        class="wps-ic-live-cdn wpc-excluded-adaptive wpc-lazy-skipped attachment-full size-full wp-image-2834 wpc-excluded-adaptive wpc-lazy-skipped"
                        wpc-data="excluded-adaptive" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-6ab3afb9 e-con-full animated-slow e-flex elementor-invisible e-con e-child"
                data-id="6ab3afb9" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                <div class="elementor-element elementor-element-1c93148b animated-slow elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="1c93148b" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p><strong>Assalamualaikum Wr. Wb.</strong><br />Tanpa mengurangi rasa hormat kami bermaksud
                            mengundang Bapak/Ibu/Saudara/i pada acara Tasyakuran Khitan putra kami.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-19608aeb animated-slow elementor-invisible elementor-widget elementor-widget-image"
                    data-id="19608aeb" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img src="{{ asset('image-1.jpeg') }}" data-src="" width="2560" height="2476" alt
                            class="wps-ic-live-cdn wpc-excluded-adaptive wpc-lazy-skipped attachment-full size-full wp-image-2809 wpc-excluded-adaptive wpc-lazy-skipped"
                            wpc-data="excluded-adaptive" alt="" />
                    </div>
                </div>
                <div class="elementor-element elementor-element-78f3824a animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="78f3824a" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Sulthan Naufal Al-Banus</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-26f25baa animated-slow elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="26f25baa" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Anak Pertama dari Bapak Ali Robi Banus dan Ibu Hilda Lastari</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-3fde902 animated-slow elementor-invisible elementor-widget elementor-widget-jet-countdown-timer"
                    data-id="3fde902" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_mobile&quot;:&quot;fadeIn&quot;}"
                    data-widget_type="jet-countdown-timer.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-jet-countdown-timer jet-elements">
                            <div class="jet-countdown-timer" data-type="evergreen"
                                data-expire-actions="[&quot;hide&quot;]">
                                <div class="jet-countdown-timer__item item-days">
                                    <div class="jet-countdown-timer__item-value" data-value="days" id="days">
                                        <span class="jet-countdown-timer__digit">0</span><span
                                            class="jet-countdown-timer__digit">0</span></div>
                                    <div class="jet-countdown-timer__item-label">Hari</div>
                                </div>
                                <div class="jet-countdown-timer__item item-hours">
                                    <div class="jet-countdown-timer__item-value" data-value="hours" id="hours">
                                        <span class="jet-countdown-timer__digit">0</span><span
                                            class="jet-countdown-timer__digit">0</span></div>
                                    <div class="jet-countdown-timer__item-label">Jam</div>
                                </div>
                                <div class="jet-countdown-timer__item item-minutes">
                                    <div class="jet-countdown-timer__item-value" data-value="minutes" id="minutes">
                                        <span class="jet-countdown-timer__digit">0</span><span
                                            class="jet-countdown-timer__digit">0</span></div>
                                    <div class="jet-countdown-timer__item-label">Menit</div>
                                </div>
                                <div class="jet-countdown-timer__item item-seconds">
                                    <div class="jet-countdown-timer__item-value" data-value="seconds" id="seconds">
                                        <span class="jet-countdown-timer__digit">0</span><span
                                            class="jet-countdown-timer__digit">0</span></div>
                                    <div class="jet-countdown-timer__item-label">Detik</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2afefdc2 elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="2afefdc2" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        data-src="" width="1003" height="1003" alt
                        class="wps-ic-live-cdn wpc-excluded-adaptive wpc-lazy-skipped attachment-full size-full wp-image-2835 wpc-excluded-adaptive wpc-lazy-skipped"
                        wpc-data="excluded-adaptive" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-3950e42f elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="3950e42f" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="5"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAzIiBoZWlnaHQ9IjEwMDMiPjxwYXRoIGQ9Ik0yIDJoMTAwM3YxMDAzSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        width="1003" height="1003" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2835"
                        loading="lazy" alt="" />
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-6da02899 e-con-full e-flex e-con e-parent" data-id="6da02899"
            data-element_type="container" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
            <div class="elementor-element elementor-element-3cbb51a0 animated-slow elementor-absolute goyang-kanan-atas elementor-invisible elementor-widget elementor-widget-image"
                data-id="3cbb51a0" data-element_type="widget"
                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_position&quot;:&quot;absolute&quot;}"
                data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="6"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTYwIiBoZWlnaHQ9IjEyODEiPjxwYXRoIGQ9Ik0yIDJoMjU2MHYxMjgxSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-01-scaled-1.webp"
                        width="2560" height="1281" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2834"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-5dc72693 elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="5dc72693" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="7"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAzIiBoZWlnaHQ9IjEwMDMiPjxwYXRoIGQ9Ik0yIDJoMTAwM3YxMDAzSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        width="1003" height="1003" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2835"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-31e0f6dd elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="31e0f6dd" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="8"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAzIiBoZWlnaHQ9IjEwMDMiPjxwYXRoIGQ9Ik0yIDJoMTAwM3YxMDAzSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        width="1003" height="1003" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2835"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-d05e32f e-con-full animated-slow e-flex elementor-invisible e-con e-child"
                data-id="d05e32f" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                <div class="elementor-element elementor-element-4981ed0e animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="4981ed0e" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Jadwal Acara</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-542d81dc animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="542d81dc" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        Dengan ucapan rasa syukur kepada Tuhan Yang Maha Esa, kami bermaksud untuk mengundang teman,
                        rekan, saudara dan bapak/ibu sekalian untuk hadir pada acara Tasyakuran Khitan putra kami.
                    </div>
                </div>
                <div class="elementor-element elementor-element-212e89cd animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="212e89cd" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Hari &amp; Tempat</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f4df7c0 elementor-widget elementor-widget-heading"
                    data-id="f4df7c0" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="elementor-heading-title elementor-size-default">Sabtu, 02 November 2024</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-312f13c elementor-widget elementor-widget-heading"
                    data-id="312f13c" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="elementor-heading-title elementor-size-default">Pukul 08:00 WIB - Selesai</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f62fb89 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                    data-id="f62fb89" data-element_type="widget" data-widget_type="divider.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-divider">
                            <span class="elementor-divider-separator">
                            </span>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-6b1bdbd elementor-widget elementor-widget-heading"
                    data-id="6b1bdbd" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="elementor-heading-title elementor-size-default">Kediaman Kami</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-729e2b8 elementor-widget elementor-widget-heading"
                    data-id="729e2b8" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <p class="elementor-heading-title elementor-size-default" style="text-align: center">
                            Jl.Kumbang Raya No 01
                            Rt 09 Rw 01, Pegadungan, Kalideres, Jakarta Barat</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1950588 elementor-widget elementor-widget-google_maps"
                    data-id="1950588" data-element_type="widget" data-widget_type="google_maps.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-custom-embed">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.9257974909724!2d106.69512137498971!3d-6.1406701938462795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMDgnMjYuNCJTIDEwNsKwNDEnNTEuNyJF!5e0!3m2!1sid!2sid!4v1730101218248!5m2!1sid!2sid"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1dd2afd elementor-align-center animated-slow elementor-invisible elementor-widget elementor-widget-button"
                    data-id="1dd2afd" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm"
                                href="https://maps.app.goo.gl/C9BdFihz3p9L9jD5A" target="_blank" rel="nofollow">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-icon">
                                        <i aria-hidden="true" class="fas fa-map-marked-alt"></i> </span>
                                    <span class="elementor-button-text">Buka di Google Maps</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-431c02ee e-con-full e-flex e-con e-parent" data-id="431c02ee"
            data-element_type="container" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
            <div class="elementor-element elementor-element-11de7ba9 animated-slow elementor-absolute goyang-kanan-atas elementor-invisible elementor-widget elementor-widget-image"
                data-id="11de7ba9" data-element_type="widget"
                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_position&quot;:&quot;absolute&quot;}"
                data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="9"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTYwIiBoZWlnaHQ9IjEyODEiPjxwYXRoIGQ9Ik0yIDJoMjU2MHYxMjgxSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-01-scaled-1.webp"
                        width="2560" height="1281" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2834"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-50f6229d elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="50f6229d" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="10"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAzIiBoZWlnaHQ9IjEwMDMiPjxwYXRoIGQ9Ik0yIDJoMTAwM3YxMDAzSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        width="1003" height="1003" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2835"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-1504dea0 elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="1504dea0" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="11"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAzIiBoZWlnaHQ9IjEwMDMiPjxwYXRoIGQ9Ik0yIDJoMTAwM3YxMDAzSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        width="1003" height="1003" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2835"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-206c7566 e-con-full animated-slow e-flex elementor-invisible e-con e-child"
                data-id="206c7566" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                <div class="elementor-element elementor-element-30186fb8 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="30186fb8" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Doa Untuk Anak Kami</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-e95fa93 animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="e95fa93" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        “Ya Allah, jadikanlah anak-anak kami anak yang sholih sholihah, orang-orang yang hafal
                        Al-Qur’an dan sunnah, orang-orang yang faham dalam agama dibarokahi kehidupan mereka di
                        dunia dan di akhirat.” </div>
                </div>
                <div class="elementor-element elementor-element-72b8e1c scaling-effect elementor-widget elementor-widget-gallery"
                    data-id="72b8e1c" data-element_type="widget"
                    data-settings="{&quot;gallery_layout&quot;:&quot;justified&quot;,&quot;ideal_row_height&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:156,&quot;sizes&quot;:[]},&quot;ideal_row_height_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:167,&quot;sizes&quot;:[]},&quot;gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:7,&quot;sizes&quot;:[]},&quot;ideal_row_height_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:150,&quot;sizes&quot;:[]},&quot;gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;link_to&quot;:&quot;file&quot;,&quot;overlay_background&quot;:&quot;yes&quot;,&quot;content_hover_animation&quot;:&quot;fade-in&quot;}"
                    data-widget_type="gallery.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-gallery__container">
                            <a class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                href="{{ asset('image-1.jpeg') }}" data-elementor-open-lightbox="yes"
                                data-elementor-lightbox-slideshow="72b8e1c"
                                data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjgxNCwidXJsIjoiaHR0cHM6XC9cL2RlbW8uaW52aS5pZFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNFwvMDVcL0toaXRhbmFuLUltYWdlLTAyLXNjYWxlZC0xLndlYnAiLCJzbGlkZXNob3ciOiI3MmI4ZTFjIn0%3D">
                                <div class="e-gallery-image elementor-gallery-item__image"
                                    data-thumbnail="{{ asset('image-1.jpeg') }}" data-width="768" data-height="1153"
                                    aria-label="" role="img"></div>
                                <div class="elementor-gallery-item__overlay"></div>
                            </a>
                            <a class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                href="{{ asset('image-3.jpeg') }}" data-elementor-open-lightbox="yes"
                                data-elementor-lightbox-slideshow="72b8e1c"
                                data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjgxNiwidXJsIjoiaHR0cHM6XC9cL2RlbW8uaW52aS5pZFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNFwvMDVcL0toaXRhbmFuLUltYWdlLTA0LXNjYWxlZC0xLndlYnAiLCJzbGlkZXNob3ciOiI3MmI4ZTFjIn0%3D">
                                <div class="e-gallery-image elementor-gallery-item__image"
                                    data-thumbnail="{{ asset('image-3.jpeg') }}" data-width="768" data-height="1153"
                                    aria-label="" role="img"></div>
                                <div class="elementor-gallery-item__overlay"></div>
                            </a>
                            <a class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                href="{{ asset('image-4.jpeg') }}" data-elementor-open-lightbox="yes"
                                data-elementor-lightbox-slideshow="72b8e1c"
                                data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjgxNywidXJsIjoiaHR0cHM6XC9cL2RlbW8uaW52aS5pZFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNFwvMDVcL0toaXRhbmFuLUltYWdlLTA1LXNjYWxlZC0xLndlYnAiLCJzbGlkZXNob3ciOiI3MmI4ZTFjIn0%3D">
                                <div class="e-gallery-image elementor-gallery-item__image"
                                    data-thumbnail="{{ asset('image-4.jpeg') }}" data-width="768" data-height="787"
                                    aria-label="" role="img"></div>
                                <div class="elementor-gallery-item__overlay"></div>
                            </a>
                            <a class="e-gallery-item elementor-gallery-item elementor-animated-content"
                                href="{{ asset('image-5.jpeg') }}" data-elementor-open-lightbox="yes"
                                data-elementor-lightbox-slideshow="72b8e1c"
                                data-e-action-hash="#elementor-action%3Aaction%3Dlightbox%26settings%3DeyJpZCI6MjgxOCwidXJsIjoiaHR0cHM6XC9cL2RlbW8uaW52aS5pZFwvd3AtY29udGVudFwvdXBsb2Fkc1wvMjAyNFwvMDVcL0toaXRhbmFuLUltYWdlLTA2LXNjYWxlZC0xLndlYnAiLCJzbGlkZXNob3ciOiI3MmI4ZTFjIn0%3D">
                                <div class="e-gallery-image elementor-gallery-item__image"
                                    data-thumbnail="{{ asset('image-5.jpeg') }}" data-width="768" data-height="790"
                                    aria-label="" role="img"></div>
                                <div class="elementor-gallery-item__overlay"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-7a7c9439 e-con-full e-flex e-con e-parent" data-id="7a7c9439"
            data-element_type="container" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
            <div class="elementor-element elementor-element-5094f8fa animated-slow elementor-absolute goyang-kanan-atas elementor-invisible elementor-widget elementor-widget-image"
                data-id="5094f8fa" data-element_type="widget"
                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_position&quot;:&quot;absolute&quot;}"
                data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="12"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTYwIiBoZWlnaHQ9IjEyODEiPjxwYXRoIGQ9Ik0yIDJoMjU2MHYxMjgxSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-01-scaled-1.webp"
                        width="2560" height="1281" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2834"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-3102c067 elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="3102c067" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="13"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAzIiBoZWlnaHQ9IjEwMDMiPjxwYXRoIGQ9Ik0yIDJoMTAwM3YxMDAzSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        width="1003" height="1003" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2835"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-344a0d99 elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="344a0d99" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="14"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAzIiBoZWlnaHQ9IjEwMDMiPjxwYXRoIGQ9Ik0yIDJoMTAwM3YxMDAzSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        width="1003" height="1003" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2835"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-2222328c e-con-full animated-slow e-flex elementor-invisible e-con e-child"
                data-id="2222328c" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                <div class="elementor-element elementor-element-3eb3cf3a e-con-full e-flex e-con e-child"
                    data-id="3eb3cf3a" data-element_type="container"
                    data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
                    <div class="elementor-element elementor-element-65c4eea9 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="65c4eea9" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Tanda Kasih</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-676f7c1b animated-slow elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
                        data-id="676f7c1b" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            <p>Doa restu dan kehadiran Anda memberikan kebahagiaan yang luar biasa bagi kami. Jika
                                Anda ingin mengekspresikan kasih sayang Anda melalui hadiah, opsi cashless juga
                                sangat kami apresiasi, dan itu akan menjadi pelengkap yang istimewa bagi kebahagiaan
                                kami.</p>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-1374fe4 e-con-full e-flex e-con e-child"
                    data-id="1374fe4" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                    <div class="elementor-element elementor-element-30782a3 elementor-align-center elementor-widget elementor-widget-weddingpress-copy-text"
                        data-id="30782a3" data-element_type="widget"
                        data-widget_type="weddingpress-copy-text.default">
                        <div class="elementor-widget-container">

                            <div class="elementor-image img"><img loading="lazy" data-count="15"
                                    src="{{ asset('bank-mega.png') }}" data-src="{{ asset('bank-mega.png') }}"
                                    title="bca.webp" alt="bca.webp" loading="lazy" data-wpc-loaded="true"
                                    class="wps-ic-live-cdn wps-ic-lazy-image" loading="lazy" alt="bank-mega.png" />
                            </div>

                            <div class="head-title">Ali Robi Banus</div>
                            <div class="elementor-button-wrapper">
                                <div class="copy-content spancontent">010120020094142</div>

                                <a style="cursor:pointer;" onclick="copyText(this)" data-message="Berhasil disalin"
                                    class="elementor-button" role="button">

                                    <div class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Salin Rekening</span>
                                    </div>
                                </a>

                            </div>

                            <style type="text/css">
                                .spancontent {
                                    padding-bottom: 20px;
                                }

                                .copy-content {
                                    color: #6EC1E4;
                                    text-align: center;
                                }

                                .head-title {
                                    color: #6EC1E4;
                                    text-align: center;
                                }
                            </style>

                            <script>
                                function copyText(el) {
                                    var content = jQuery(el).siblings('div.copy-content').html()
                                    var temp = jQuery("<textarea>");
                                    jQuery("body").append(temp);
                                    temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
                                    document.execCommand("copy");
                                    temp.remove();
                                    var text = jQuery(el).html()
                                    jQuery(el).html(jQuery(el).data('message'))
                                    var counter = 0;
                                    var interval = setInterval(function() {
                                        counter++;
                                        if (counter == 1) {
                                            jQuery(el).html(text)
                                        }
                                    }, 500);
                                }
                            </script>

                        </div>
                    </div>
                    <div class="elementor-element elementor-element-b2cfc72 elementor-align-center elementor-widget elementor-widget-weddingpress-copy-text"
                        data-id="b2cfc72" data-element_type="widget"
                        data-widget_type="weddingpress-copy-text.default">
                        <div class="elementor-widget-container">

                            <div class="elementor-image img" style="margin-top: 30px;"><img loading="lazy"
                                    data-count="16" src="{{ asset('ovo.png') }}" data-src="{{ asset('ovo.png') }}"
                                    title="bni" alt="bni" loading="lazy" data-wpc-loaded="true"
                                    class="wps-ic-live-cdn wps-ic-lazy-image" loading="lazy" alt="ovo.png" />
                            </div>

                            <div class="head-title" style="margin-top: 30px;">Ali Robi Banus</div>
                            <div class="elementor-button-wrapper">
                                <div class="copy-content spancontent">08811156140</div>

                                <a style="cursor:pointer;" onclick="copyText(this)" data-message="Berhasil disalin"
                                    class="elementor-button" role="button">

                                    <div class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Salin Nomor</span>
                                    </div>
                                </a>

                            </div>

                            <style type="text/css">
                                .spancontent {
                                    padding-bottom: 20px;
                                }

                                .copy-content {
                                    color: #6EC1E4;
                                    text-align: center;
                                }

                                .head-title {
                                    color: #6EC1E4;
                                    text-align: center;
                                }
                            </style>

                            <script>
                                function copyText(el) {
                                    var content = jQuery(el).siblings('div.copy-content').html()
                                    var temp = jQuery("<textarea>");
                                    jQuery("body").append(temp);
                                    temp.val(content.replace(/<br ?\/?>/g, "\n")).select();
                                    document.execCommand("copy");
                                    temp.remove();
                                    var text = jQuery(el).html()
                                    jQuery(el).html(jQuery(el).data('message'))
                                    var counter = 0;
                                    var interval = setInterval(function() {
                                        counter++;
                                        if (counter == 1) {
                                            jQuery(el).html(text)
                                        }
                                    }, 500);
                                }
                            </script>

                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-79456dc e-con-full e-flex e-con e-child"
                    data-id="79456dc" data-element_type="container"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                    <div class="elementor-element elementor-element-cd1e08c elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-icon"
                        data-id="cd1e08c" data-element_type="widget" data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                        viewBox="0 0 24 24" width="512" height="512">
                                        <path
                                            d="M20,7H18.262A5.137,5.137,0,0,0,20,3a1,1,0,0,0-2,0c0,2.622-2.371,3.53-4.174,3.841A9.332,9.332,0,0,0,15,3,3,3,0,0,0,9,3a9.332,9.332,0,0,0,1.174,3.841C8.371,6.53,6,5.622,6,3A1,1,0,0,0,4,3,5.137,5.137,0,0,0,5.738,7H4a4,4,0,0,0-4,4v1a2,2,0,0,0,2,2v5a5.006,5.006,0,0,0,5,5H17a5.006,5.006,0,0,0,5-5V14a2,2,0,0,0,2-2V11A4,4,0,0,0,20,7ZM12,2a1,1,0,0,1,1,1,7.71,7.71,0,0,1-1,3.013A7.71,7.71,0,0,1,11,3,1,1,0,0,1,12,2ZM2,11A2,2,0,0,1,4,9h7v3H2Zm2,8V14h7v8H7A3,3,0,0,1,4,19Zm16,0a3,3,0,0,1-3,3H13V14h7Zm-7-7V9h7a2,2,0,0,1,2,2v1Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-283be46b e-con-full e-flex e-con e-parent" data-id="283be46b"
            data-element_type="container" data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
            <div class="elementor-element elementor-element-61b84534 animated-slow elementor-absolute goyang-kanan-atas elementor-invisible elementor-widget elementor-widget-image"
                data-id="61b84534" data-element_type="widget"
                data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;_position&quot;:&quot;absolute&quot;}"
                data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="20"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNTYwIiBoZWlnaHQ9IjEyODEiPjxwYXRoIGQ9Ik0yIDJoMjU2MHYxMjgxSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-01-scaled-1.webp"
                        width="2560" height="1281" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2834"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-1bb626c5 elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="1bb626c5" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="21"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAzIiBoZWlnaHQ9IjEwMDMiPjxwYXRoIGQ9Ik0yIDJoMTAwM3YxMDAzSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        width="1003" height="1003" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2835"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-14ddd4d5 elementor-absolute elementor-widget__width-initial spin elementor-widget elementor-widget-image"
                data-id="14ddd4d5" data-element_type="widget"
                data-settings="{&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img loading="lazy" data-count="22"
                        src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMDAzIiBoZWlnaHQ9IjEwMDMiPjxwYXRoIGQ9Ik0yIDJoMTAwM3YxMDAzSDJ6IiBmaWxsPSIjZmZmIiBvcGFjaXR5PSIwIi8+PC9zdmc+"
                        data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2024/05/Khitanan-02-02.webp"
                        width="1003" height="1003" alt data-wpc-loaded="true"
                        class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2835"
                        loading="lazy" alt="" />
                </div>
            </div>
            <div class="elementor-element elementor-element-4b1f3ffd e-con-full animated-slow e-flex elementor-invisible e-con e-child"
                data-id="4b1f3ffd" data-element_type="container"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
                <div class="elementor-element elementor-element-6c8697da animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="6c8697da" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Terima Kasih</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-486941f6 animated-slow elementor-widget__width-initial elementor-invisible elementor-widget elementor-widget-text-editor"
                    data-id="486941f6" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                    data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">
                        <p>Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i,
                            berkenan hadir dan memberikan do’a kepada anak kami.</p>
                    </div>
                </div>
                <div class="elementor-element elementor-element-401e43b7 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="401e43b7" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Kami Yang Berbahagia</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-17e6d3d2 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="17e6d3d2" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Ali Robi Banus &amp; Hilda Lastari
                        </h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-f735c8c e-con-full e-flex e-con e-child"
                    data-id="f735c8c" data-element_type="container"
                    data-settings="{&quot;jet_parallax_layout_list&quot;:[]}">
                    <div class="elementor-element elementor-element-ab67750 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                        data-id="ab67750" data-element_type="widget" data-widget_type="divider.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-divider">
                                <span class="elementor-divider-separator">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-361f0a3 elementor-view-framed elementor-shape-circle elementor-widget elementor-widget-weddingpress-audio"
                data-id="361f0a3" data-element_type="widget" data-widget_type="weddingpress-audio.default">
                <div class="elementor-widget-container">
                    <script>
                        var settingAutoplay = 'yes';
                        window.settingAutoplay = settingAutoplay === 'disable' ? false : true;
                    </script>

                    <div id="audio-container" class="audio-box">



                        <audio id="song">
                            <source src="https://file.invi.id/audio/Maher-Zain-Rahmatun-LilAlameen.mp3"
                                type="audio/mp3">
                        </audio>



                        <div class="elementor-icon-wrapper" id="unmute-sound" style="display: none;">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="fas fa-compact-disc"></i>
                            </div>
                        </div>

                        <div class="elementor-icon-wrapper" id="mute-sound" style="display: none;">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="fas fa-compact-disc"></i>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-be0ef9c e-con-full elementor-hidden-desktop elementor-hidden-tablet elementor-hidden-mobile e-flex e-con e-parent"
            data-id="be0ef9c" data-element_type="container"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;jet_parallax_layout_list&quot;:[]}">
            <div class="elementor-element elementor-element-48e0a70 elementor-widget elementor-widget-image"
                data-id="48e0a70" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <a href="https://invi.id">
                        <img loading="lazy" data-count="23"
                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNjYxIiBoZWlnaHQ9Ijg1NSI+PHBhdGggZD0iTTIgMmgxNjYxdjg1NUgyeiIgZmlsbD0iI2ZmZiIgb3BhY2l0eT0iMCIvPjwvc3ZnPg=="
                            data-src="https://cdn2.invi.id/q:i/r:0/wp:1/w:1/u:https://demo.invi.id/wp-content/uploads/2023/08/invi-putih.webp"
                            loading="lazy" width="1661" height="855" alt data-wpc-loaded="true"
                            class="wps-ic-live-cdn wps-ic-lazy-image attachment-full size-full wp-image-2021"
                            loading="lazy" alt="" /> </a>
                </div>
            </div>
            <div class="elementor-element elementor-element-438e3b6 elementor-widget elementor-widget-heading"
                data-id="438e3b6" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <p class="elementor-heading-title elementor-size-default">Made with ♥ by invi.id | Digital
                        Invitation</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elements = document.querySelectorAll('.namatamu');
            if (elements) {
                elements.forEach(function(element) {
                    element.innerHTML = decodeEntities(element.innerHTML);
                });
            }
        });

        function decodeEntities(encodedString) {
            var textarea = document.createElement('textarea');
            textarea.innerHTML = encodedString;
            return textarea.value;
        }
    </script>
    <script type='text/javascript'>
        const lazyloadRunObserver = () => {
            const lazyloadBackgrounds = document.querySelectorAll(`.e-con.e-parent:not(.e-lazyloaded)`);
            const lazyloadBackgroundObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        let lazyloadBackground = entry.target;
                        if (lazyloadBackground) {
                            lazyloadBackground.classList.add('e-lazyloaded');
                        }
                        lazyloadBackgroundObserver.unobserve(entry.target);
                    }
                });
            }, {
                rootMargin: '200px 0px 200px 0px'
            });
            lazyloadBackgrounds.forEach((lazyloadBackground) => {
                lazyloadBackgroundObserver.observe(lazyloadBackground);
            });
        };
        const events = [
            'DOMContentLoaded',
            'elementor/lazyload/observe',
        ];
        events.forEach((event) => {
            document.addEventListener(event, lazyloadRunObserver);
        });
    </script>
    <style id='core-block-supports-inline-css'>
        /**
 * Core styles: block-supports
 */
    </style>
    @include('layouts.script')
</body>

</html>
