
    <body itemscope="itemscope" itemtype="http://schema.org/WebPage">
        
        <div id="site-container">
            <div class="container">
                <div class="row" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <div class="col-md-main">
                        <h1 class="single-title" itemprop="headline">Download Lagu <?= $title_meta;?> mp3 / mp4</h1>
                        <div class="featured text-center clearfix">
                            <div id="video" class="tab-pane">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video width="100%" height="100%" id="youtube-video" playsinline preload="none">
                                        <source type="video/x-youtube" src="https://www.youtube.com/watch?v=<?= $id_video;?>" />
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="ads-margin-bottom"></div>
                        <div class="downloadbutton">
                            <a href="#" target="_blank" rel="nofollow">FAST DOWNLOAD</a>
                            <a href="<?= base_url('/download?id='.$id_video.'&title='.$title_meta)?>" rel="nofollow">Download Mp3 / Mp4</a>
                        </div>
                        <div class="content-item more-content" itemprop="text">
                            <p>
                               <?= $spin_text;?>
                            </p>
                            <p>Data lagu:</p>
                            <ul class="data-lagu">
                                <li><strong>Judul:</strong> <?= $title_meta;?></li>
                                <li><strong>Quality:</strong> HD, 720P, 480P, 320P, and 240P</li>
                                <li><strong>Sumber:</strong> https://www.youtube.com/watch?v=<?= $id_video;?></li>
                            </ul>
                        </div>
                        <div class="clearfix">
                            <ul class="socialicon">
                                <li class="facebook">
                                    <a
                                        href="#"
                                        class="idblog-sharebtn idblog-facebook"
                                        onclick="popUp=window.open('https://www.facebook.com/sharer/sharer.php?u=https://www.downloadlagu123.biz/Maroon-5-Memories-Official-Video/SlPhMPnQ58k.html', 'popupwindow', 'scrollbars=yes,height=300,width=550');popUp.focus();return false"
                                        rel="nofollow"
                                        title="Share Ke Facebook"
                                    >
                                        <i class="fab fa-facebook-f"></i> <span class="socialtext">Facebook</span>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a
                                        href="#"
                                        class="idblog-sharebtn idblog-twitter"
                                        onclick="popUp=window.open('https://twitter.com/share?url=https://www.downloadlagu123.biz/Maroon-5-Memories-Official-Video/SlPhMPnQ58k.html&amp;text=<?= $title_meta;?>', 'popupwindow', 'scrollbars=yes,height=300,width=550');popUp.focus();return false"
                                        rel="nofollow"
                                        title="Tweet"
                                    >
                                        <i class="fab fa-twitter"></i> <span class="socialtext">Twitter</span>
                                    </a>
                                </li>
                                <li class="google">
                                    <a
                                        href="#"
                                        onclick="popUp=window.open('https://plus.google.com/share?url=https://www.downloadlagu123.biz/Maroon-5-Memories-Official-Video/SlPhMPnQ58k.html', 'popupwindow', 'scrollbars=yes,height=300,width=550');popUp.focus();return false"
                                        rel="nofollow"
                                        title="Add +1"
                                    >
                                        <i class="fab fa-google-plus-g"></i> <span class="socialtext">Plus</span>
                                    </a>
                                </li>
                                <li class="whatsapp">
                                    <a
                                        href="https://api.whatsapp.com/send?text=<?= $title_meta;?> 
https://www.downloadlagu123.biz/Maroon-5-Memories-Official-Video/SlPhMPnQ58k.html"
                                        rel="nofollow"
                                        title="Kirim Ke WA Teman"
                                    >
                                        <i class="fab fa-whatsapp"></i> <span class="socialtext">WhatsApp</span>
                                    </a>
                                </li>
                                <li class="line">
                                    <a href="https://social-plugins.line.me/lineit/share?url=https://www.downloadlagu123.biz/Maroon-5-Memories-Official-Video/SlPhMPnQ58k.html" rel="nofollow" title="Kirim Ke Line">
                                        <i class="fab fa-line"></i> <span class="socialtext">Line</span>
                                    </a>
                                </li>
                                <li class="text"><i class="far fa-hand-point-left"></i> Beritahu Teman!</li>
                            </ul>
                        </div>
                        <div class="warning" itemprop="text">
                            <strong>Disclamer:</strong><br />
                            File disini di hosting di Youtube.com bukan di server https://downloadlagu123.biz dan kami tidak mengupload pada server kami. Jika menurut anda ini adalah file ilegal, silakan laporkan ke
                            <a href="https://www.youtube.com/reportabuse" rel="nofollow">Youtube</a> dengan id Video <strong>SlPhMPnQ58k</strong>
                        </div>
                    </div>
                    <?php $this->load->view('themes/v1/base/sidebar');?>
                </div>
            </div>
        </div>
    