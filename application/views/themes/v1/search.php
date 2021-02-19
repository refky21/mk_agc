<!-- Header -->
        <div id="site-container">
            <div class="container">
                <div class="row" itemscope="itemscope" itemtype="http://schema.org/MusicAlbum">
                    <div class="col-md-main">
                        <h1 class="main-title" itemprop="headline"><span class="highlight">Download Lagu MP3</span> <?= $title_parameter;?></h1>
                        <div class="success" itemprop="text">
                            <p>Download lagu mp3 <?= $title_parameter;?> gratis. <?= $title_parameter;?> planetlagu, download mp3 <?= $title_parameter;?>, download <?= $title_parameter;?> lagu123.</p>
                            <p>Terdapat sekitar 10 pencarian lagu yang dapat anda download dan dengarkan. Jika hasilnya tidak berisi lagu yang anda cari, cobalah mencari lagu dengan nama artis atau dengan nama lagu tersebut.</p>
                        </div>

                        <div itemscope="itemscope" itemtype="http://schema.org/MusicAlbum">
                            <span itemprop="keywords" content="Lagu,Download,Album,Lirik,Artis,Video,Mp3,Song"></span>
                            <span itemprop="publisher" content="Youtube"></span>
                            <span itemprop="name" content="Memories Maroon 5"></span>
                            <span itemprop="byArtist" content="Memories Maroon 5"></span>
                            <div itemprop="track" itemscope="itemscope" itemtype="http://schema.org/ItemList">
                                <span itemprop="numberOfItems" content="10"></span>
                                    <!-- batas Music -->
                                    <?php
                                    $i = 0;
                                    foreach ($music as $item) {
                                        $i++;
                                    ?>
                                <div class="clearfix search-content" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                                    <span itemprop="position" content="1"></span>
                                    <div class="content-left pull-left">
                                        <img src="<?= $item['thumbnails'];?>" alt="<?= $item['judul'];?>" width="120" height="90" itemprop="image" />
                                    </div>
                                    <div class="content-right" itemprop="item" itemscope="itemscope" itemtype="http://schema.org/MusicRecording">
                                        <h2 class="content-title">
                                            <a href="<?= single_permalink($item['id'],$item['judul']);?>" title="<?= $item['judul'];?> mp3" itemprop="url" rel="nofollow">
                                                <span itemprop="name"><?= $item['judul'];?></span>
                                            </a>
                                        </h2>
                                        <div class="button">
                                            <a href="javascript:void(0);" onclick="playAudio(<?= $i;?>,'<?= $item['id'];?>');" title="Dengarkan lagu Maroon 5 - Memories (Official Video)" rel="nofollow">Play</a>
                                            <a title="<?= $item['judul'];?>" href="<?= base_url('download')?>?id=<?=$item['id'];?>&title=<?= $item['judul'];?>" rel="nofollow">Download</a>
                                            <a href="#" target="_blank" rel="nofollow">FAST DOWNLOAD</a>
                                        </div>
                                        <div class="divPlayer" id="player-<?= $i;?>"></div>
                                    </div>
                                </div>
                                <?php } ?>
                                <!-- End -->
                            </div>
                        </div>
                    </div>
                    <?php $this->load->view('themes/v1/base/sidebar');?>
                </div>
            </div>
        </div>
      <!-- Footer -->
