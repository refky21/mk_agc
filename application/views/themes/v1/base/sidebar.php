<div class="col-md-sidebar">
                        <div class="sidebar">
                            <h3 class="sidebar-title"><span class="highlight">Lagu</span> Pilihan</h3>
                            <ul class="chart">
                            <?php foreach (get_kw() as $kw ):
                            ?>
                                <li><i class="fas fa-headphones-alt"></i> <a href="<?= search_permalink($kw); ?>" itemprop="url"><?= ucwords($kw);?></a></li>
                            <?php endforeach; ?>
                               </ul>
                        </div>
                        <div class="sidebar">
                            <h3 class="sidebar-title"><span class="highlight">Pencarian</span> Terakhir</h3>
                            <ul class="chart">
                            <?php foreach (getSitemap(20) as $kw ):
                            ?>
                                <li><i class="fas fa-headphones-alt"></i> <a href="<?= search_permalink($kw); ?>" itemprop="url"><?= ucwords($kw);?></a></li>
                            <?php endforeach; ?>
                        </div>
                    </div>