<?php
$html = '<a href="http://example.com">Example</a> <a href="/internal">Internal</a> <a href="https://another.com">Another</a>';

$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
libxml_clear_errors();

$links = $dom->getElementsByTagName('a');

foreach ($links as $link) {
    $href = $link->getAttribute('href');
    // Проверяем, является ли ссылка внешней
    if (strpos($href, 'http://') === 0 || strpos($href, 'https://') === 0) {
        $link->setAttribute('target', '_blank');
    }
}

echo $dom->saveHTML();
?>