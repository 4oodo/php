<?php
function highlightCSS($css) {
    $patterns = [
        '/(\/\*[\s\S]*?\*\/)/',
        '/([{};])/',
        '/([a-z-]+)(\s*:\s*)/',
        '/(:\s*)([^;{}]+)/'
    ];
    $replacements = [
        '<span class="comment">$1</span>',
        '<span class="brace">$1</span>',
        '<span class="property">$1</span>$2',
        '$1<span class="value">$2</span>'
    ];

    // Применяем замены
    $highlightedCSS = preg_replace($patterns, $replacements, $css);

    return $highlightedCSS;
}

$cssCode = <<<CSS
/* Пример CSS */
body {
    background-color: #f0f0f0;
    color: #333;
}
CSS;

echo '<pre>' . highlightCSS($cssCode) . '</pre>';
?>

