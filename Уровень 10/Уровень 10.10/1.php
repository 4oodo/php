<?php
function highlightHTML($html) {
    // Определяем шаблоны и замены
    $patterns = [
        '/(&lt;!--[\s\S]*?--&gt;)/',
        '/(&lt;\/?[a-zA-Z]+[^\&gt;]*&gt;)/',
        '/(&quot;[^&quot;]*&quot;)/',
        '/(&#39;[^&#39;]*&#39;)/'
    ];
    $replacements = [
        '<span class="comment">$1</span>',
        '<span class="tag">$1</span>',
        '<span class="attribute">$1</span>',
        '<span class="attribute">$1</span>'
    ];

    // Применяем замены
    $highlightedHTML = preg_replace($patterns, $replacements, htmlspecialchars($html));

    return $highlightedHTML;
}

$htmlCode = <<<HTML
<!-- Пример HTML -->
<div class="container">
    <p id="paragraph">Hello, World!</p>
</div>
HTML;

echo '<pre>' . highlightHTML($htmlCode) . '</pre>';
?>
<style>
.comment { color: green; }
.tag { color: blue; }
.attribute { color: red; }
</style>
