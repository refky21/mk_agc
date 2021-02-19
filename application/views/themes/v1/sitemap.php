<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach($keywoard as $kw): ?>
<url>
<loc><?=search_permalink($kw) ?></loc>
</url>
<?php endforeach; ?>
</urlset>