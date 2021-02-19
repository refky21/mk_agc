<div id="footer-container">
            <div class="container">
                <p class="copy">
                    &copy; 2019 Download Lagu Gratis. All rights reserved.
                </p>
                <ul class="footer-menu">
                    <li>
                        <a href="https://www.downloadlagu123.biz/p/disclaimer.html" title="Disclaimer">Disclaimer</a>
                    </li>
                    <li>
                        <a href="https://www.downloadlagu123.biz/p/copyright.html" title="Copyright">Copyright</a>
                    </li>
                    <li>
                        <a href="https://www.downloadlagu123.biz/p/term-of-services.html" title="Term Of Services">TOS</a>
                    </li>
                </ul>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sidr@2.2.1/dist/jquery.sidr.min.js" integrity="sha256-/VeucihXSoNSfLiRfsWg/5RKp4eTTuW4Wnl28lm3rjE=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/mediaelement@4.2.9/build/mediaelement-and-player.min.js" integrity="sha256-bGz/0MMW4d9dsyq3BEXee8f377noiWxTibmRZqWvvYI=" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function playAudio(id, ytid) {
                remPlayer();
                var html = '<audio src="https://www.youtube.com/watch?v=' + ytid + '" type="video/youtube" controls autoplay style="width:100%">Browser tidak support bro, coba update browser nya!</audio>';
                $("#player-" + id).html(html);
                renderPlayer();
            }
            function renderPlayer() {
                $("audio,video").mediaelementplayer();
            }
            function remPlayer() {
                $(".divPlayer").html("");
            }
            if ("serviceWorker" in navigator) {
                window.addEventListener("load", function () {
                    navigator.serviceWorker
                        .register("https://downloadlagu123.biz/OneSignalSDKWorker.js")
                        .then(function (registration) {
                            console.log("PWA service worker ready");
                            registration.update();
                        })
                        .catch(function (error) {
                            console.log("Registration failed with " + error);
                        });
                });
            }
            var $ = jQuery.noConflict();
            (function ($) {
                "use strict";
                jQuery(function ($) {
                    $("#mobile-menu").sidr({ name: "menu", source: "#top-nav", displace: false });
                    $(window).resize(function () {
                        $.sidr("close", "menu");
                    });
                    $("#sidr-id-close-menu-button").click(function (e) {
                        e.preventDefault();
                        $.sidr("close", "menu");
                    });
                    $(".sidr-class-menu-item-has-children").click(function () {
                        $(this)
                            .find("ul.sidr-class-sub-menu")
                            .slideToggle(function (e) {
                                e.preventDefault();
                            });
                    });
                    $(document.body).click(function (e) {
                        if ($.sidr("status").opened) {
                            var isBlur = true;
                            if ($(e.target).closest(".sidr").length !== 0) {
                                isBlur = false;
                            }
                            if ($(e.target).closest(".js-sidr-trigger").length !== 0) {
                                isBlur = false;
                            }
                            if (isBlur) {
                                $.sidr("close", $.sidr("status").opened);
                            }
                        }
                    });
                });
            })(jQuery);
        </script>
        <script src="https://cdn.jsdelivr.net/npm/sidr@2.2.1/dist/jquery.sidr.min.js" integrity="sha256-/VeucihXSoNSfLiRfsWg/5RKp4eTTuW4Wnl28lm3rjE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/mediaelement@4.2.9/build/mediaelement-and-player.min.js" integrity="sha256-bGz/0MMW4d9dsyq3BEXee8f377noiWxTibmRZqWvvYI=" crossorigin="anonymous"></script>
<script type="text/javascript">
    var $ = jQuery.noConflict();
    (function ($) {
        "use strict";
        jQuery(function ($) {
            $("#youtube-audio, #youtube-video").mediaelementplayer();
        });
        jQuery(function ($) {
            var collapsedSize = "40px";
            $(".more-content").each(function () {
                var h = this.scrollHeight;
                console.log(h);
                var div = $(this);
                if (h > 30) {
                    div.css("height", collapsedSize);
                    div.after('<button class="more-button">Lihat Selengkapnya</button>');
                    var link = div.next();
                    link.click(function (e) {
                        e.stopPropagation();
                        if (link.text() != "Lihat lebih sedikit") {
                            link.text("Lihat lebih sedikit");
                            div.animate({ height: h });
                        } else {
                            div.animate({ height: collapsedSize });
                            link.text("Lihat Selengkapnya");
                        }
                    });
                }
            });
        });
    })(jQuery);
    if ("serviceWorker" in navigator) {
        window.addEventListener("load", function () {
            navigator.serviceWorker
                .register("https://downloadlagu123.biz/OneSignalSDKWorker.js")
                .then(function (registration) {
                    console.log("PWA service worker ready");
                    registration.update();
                })
                .catch(function (error) {
                    console.log("Registration failed with " + error);
                });
        });
    }
    var $ = jQuery.noConflict();
    (function ($) {
        "use strict";
        jQuery(function ($) {
            $("#mobile-menu").sidr({ name: "menu", source: "#top-nav", displace: false });
            $(window).resize(function () {
                $.sidr("close", "menu");
            });
            $("#sidr-id-close-menu-button").click(function (e) {
                e.preventDefault();
                $.sidr("close", "menu");
            });
            $(".sidr-class-menu-item-has-children").click(function () {
                $(this)
                    .find("ul.sidr-class-sub-menu")
                    .slideToggle(function (e) {
                        e.preventDefault();
                    });
            });
            $(document.body).click(function (e) {
                if ($.sidr("status").opened) {
                    var isBlur = true;
                    if ($(e.target).closest(".sidr").length !== 0) {
                        isBlur = false;
                    }
                    if ($(e.target).closest(".js-sidr-trigger").length !== 0) {
                        isBlur = false;
                    }
                    if (isBlur) {
                        $.sidr("close", $.sidr("status").opened);
                    }
                }
            });
        });
    })(jQuery);
</script>

    </body>
</html>