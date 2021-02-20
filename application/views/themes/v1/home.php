<!-- Header -->
        <div id="site-container">
            <div class="container">
                <div class="info">Silahkan anda mendownload lagu secara gratis disini hanya untuk review. Jika anda menyukainya, silahkan beli lagu yang asli</div>
                <?= siteBase('Ads2');?>
                <div class="row" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <h1 class="screen-reader-text" itemprop="headline">Download Lagu Gratis</h1>
                    <div class="col-md-main">
                        <h3 class="main-title"><span class="highlight">Lagu</span> Terpopuler</h3>
                        <div class="success" itemprop="text">
                            <?= siteBase('textDesc');?>
                        </div>
                        <?php
                            foreach ($trending as $data):
                                
                        ?>
                        <div class="clearfix list-content">
                            <div class="content-left pull-left">
                                <a href="<?= single_permalink($data['id'],$data['judul']);?>" title="Download Lagu <?=$data['judul']; ?>" itemprop="url">
                                    <img
                                        src="<?=$data['thumbnails']; ?>"
                                        alt="<?=$data['judul']; ?>"
                                        width="55"
                                        height="55"
                                        itemprop="image"
                                    />
                                </a>
                            </div>
                            <div class="content-right">
                                <h2 class="content-title" itemprop="headline">
                                    <a href="<?= single_permalink($data['id'],$data['judul']);?>" title="Download Lagu <?=$data['judul']; ?>" itemprop="url"> <?=$data['judul']; ?> </a>
                                </h2>
                                <div class="meta-content">
                                    <span class="separator">
                                        <a href="<?= base_url('search')?>?q=<?=$data['uploader']; ?>" title="Download Lagu <?=$data['uploader']; ?>" itemprop="url"> <?=$data['uploader']; ?> </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                       
                        <h3 class="main-title"><span class="highlight">Rilis</span> Terbaru</h3>
                        <div class="success" itemprop="text">
                        <?= siteBase('textDesc');?>
                        </div>
                        <?php
                            foreach ($indonesia as $data):
                                
                        ?>
                        <div class="clearfix list-content">
                            <div class="clearfix">
                                <div class="content-left pull-left">
                                <a href="<?= search_permalink($data['songName']);?>" title="Download Lagu <?=$data['songName']; ?>" itemprop="url">
                                    <img
                                        src="<?=$data['thumbNail']; ?>"
                                        alt="<?=$data['songName']; ?>"
                                        width="55"
                                        height="55"
                                        itemprop="image"
                                    />
                                </a>
                                </div>
                                <div class="content-right">
                                <h2 class="content-title" itemprop="headline">
                                    <a href="<?= search_permalink($data['songName']);?>" title="Download Lagu <?=$data['songName']; ?>" itemprop="url"> <?=$data['songName']; ?> </a>
                                </h2>
                                <div class="meta-content">
                                    <span class="separator">
                                        <a href="<?= base_url('search')?>?q=<?=$data['artistName']; ?>" title="Download Lagu <?=$data['artistName']; ?>" itemprop="url"> <?=$data['artistName']; ?> </a>
                                    </span>
                                </div>
                            </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                        

                        <!-- Inject AGK -->
                    </div>
                    
                    <?php $this->load->view('themes/v1/base/sidebar');?>
                </div>
            </div>
            <?= siteBase('Ads3');?>
        </div>
        
