<?php header('Content-type: application/xml; charset=utf-8') ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php require_once 'settings.php'; ?>
<url><loc>http://wyimki.pl</loc></url>
<?php foreach ($photos as $value) { ?>
     <url><loc>http://wyimki.pl?<?php print($value) ?></loc></url>
<?php } ?>
</urlset>