<?php header('Content-type: application/xml; charset=utf-8') ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
<?php require_once 'settings.php'; ?>
<url><loc>http://wyimki.pl</loc></url>
<?php foreach ($photos as $value) { ?>
     <url>
        <loc>https://wyimki.pl/blog/<?php print($value) ?></loc>
        <image:image>
            <image:loc>https://wyimki.pl/media/blog/<?php print($value) ?>.jpg</image:loc>
        </image:image>
     </url>
<?php } ?>
</urlset>