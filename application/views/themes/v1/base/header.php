<!DOCTYPE html>
<html lang="id" prefix="og: http://ogp.me/ns#">
    <head itemscope="itemscope" itemtype="http://schema.org/WebSite">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <title><?= sitebase('siteName'); ?> <?= $title; ?></title>
		<!-- Meta -->
        <meta name="description" content="<?= sitebase('siteDesc'); ?>" />
        <meta property="og:description" content="<?= sitebase('siteDesc'); ?>" />
        <meta property="og:site_name" content="<?= sitebase('siteName'); ?>" />
		<meta name="keywords" content="<?= sitebase('siteKeywords'); ?>, <?= $keywords;?>">
		<meta name="author" content="<?= sitebase('siteAuthor'); ?>">
        <meta property="og:title" content="Download Lagu <?= $title; ?>" />
        
        <meta name="theme-color" content="#E91E63" />
        <meta name="googlebot" content="index, follow" />
        <meta name="robots" content="index, follow" />
        <!-- Stylesheet -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito%3A300%2C400%2C600%2C700" type="text/css" media="all" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.9/build/mediaelementplayer.min.css" integrity="sha256-ji1bfJaTGnyscoc7LzcV9yNJy5vGKJ0frO3KJo1oaGQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url('assets/style.css');?>" />
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    </head>
    <body itemscope="itemscope" itemtype="http://schema.org/WebPage">
        <header id="header-container" itemscope="itemscope" itemtype="http://schema.org/WPHeader">
            <div id="header">
                <div class="container">
                    <div class="list-table clearfix">
                        <div class="table-row">
                            <div class="table-cell logo">
                                <a href="<?= base_url();?>" title="Download Lagu Gratis" itemprop="url">
                                    <img src="<?= sitebase('siteLogo'); ?>" alt="Download Lagu Gratis" title="Download Lagu Gratis" itemprop="image" />
                                </a>
                                <a id="mobile-menu" class="pull-right" href="#menu" rel="nofollow"><i class="fas fa-bars"></i><span class="screen-reader-text">Mobile Menu</span></a>
                            </div>
                            <div class="table-cell search">
                                <form class="searchform searchform" method="get" action="<?= base_url('search')?>">
                                    <label class="screen-reader-text" for="search-form">Search Form:</label>
                                    <input type="text" name="q" id="search-form" class="ui-autocomplete-input" autofocus="autofocus" value="" autocomplete="off" placeholder="Cari Lagu!! Artis - Judul lagu." minlength="3" />
                                    <button type="submit" role="button" class="search-submit"><i class="fas fa-search"></i><span class="screen-reader-text">Cari</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav id="top-nav" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
                <div class="container">
                    <ul class="top-menu">
                        <li class="close-btn"><a id="close-menu-button" href="#" rel="nofollow">Close Menu x</a></li>
                        <li class="home">
                            <a href="<?= base_url('/') ?>" title="Kembali ke Beranda" itemprop="url"><span itemprop="name">Home</span></a>
                        </li>
                        <li class="orange">
                            <a href="<?= base_url('/') ?>music/lagu-k-pop-korean-pop" title="Download Lagu kpop korean pop" itemprop="url"><span itemprop="name">Lagu Kpop</span></a>
                        </li>
                        <li class="merah">
                            <a href="<?= base_url('/') ?>music/lagu-india-bollywood" title="Download Lagu India Bollywood" itemprop="url"><span itemprop="name">Lagu India Bollywood</span></a>
                        </li>
                        <li class="biru-tua">
                            <a href="<?= base_url('/') ?>music/lagu-dangdut" title="Download Lagu Dangdut" itemprop="url"><span itemprop="name">Lagu Dangdut</span></a>
                        </li>
                        <li class="ungu">
                            <a href="<?= base_url('/') ?>music/lagu-indonesia" title="Download Lagu Pop Indonesia" itemprop="url"><span itemprop="name">Lagu Pop Indonesia</span></a>
                        </li>
                        <li class="hijau menu-item-has-children">
                            <a href="#" rel="nofollow">Lainnya</a>
                            <ul class="sub-menu">
                                <li class="menu-item">
                                    <a href="<?= base_url('/') ?>music/lagu-alternatif" title="Download Lagu Alternatif" itemprop="url"><span itemprop="name">Lagu Alternatif</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="<?= base_url('/') ?>music/lagu-blues" title="Download Lagu Blues" itemprop="url"><span itemprop="name">Lagu Blues</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="<?= base_url('/') ?>music/lagu-j-pop-japan-pop" title="Download Lagu jpop japan pop" itemprop="url"><span itemprop="name">Lagu Jpop</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="<?= base_url('/') ?>music/lagu-malaysia" title="Download Lagu Malaysia" itemprop="url"><span itemprop="name">Lagu Malaysia</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="<?= base_url('/') ?>music/planetlagu" title="Planetlagu" itemprop="url"><span itemprop="name">Planetlagu</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="<?= base_url('/') ?>music/gudanglagu" title="Gudang Lagu" itemprop="url"><span itemprop="name">Gudang Lagu</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="<?= base_url('/') ?>music/stafaband" title="Stafaband MP3" itemprop="url"><span itemprop="name">Stafaband</span></a>
                                </li>
                                <li class="menu-item">
                                    <a href="<?= base_url('/') ?>music/lagu-dj" title="Download Lagu DJ" itemprop="url"><span itemprop="name">Lagu DJ</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>