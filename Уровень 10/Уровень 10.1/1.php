<?php
function pluralize($word) {
    $plural = '';

    $rules = [
        '/(quiz)$/i' => '\1zes,',
        '/^(ox)$/i' => '\1en,',
        '/([m|l])ouse$/i' => '\1ice',
        '/(matr|vert|ind)ix|ex$/i' => '\1ices,',
        '/(x|ch|ss|sh)$/i' => '\1es,',
        '/([^aeiouy]|qu)y$/i' => '\1ies,',
        '/(hive)$/i' => '\1s',
        '/(?:([^f])fe|([lr])f)$/i' => '\1\2ves,',
        '/sis$/i' => 'ses,',
        '/([ti])um$/i' => '\1a,',
        '/(buffal|tomat)o$/i' => '\1oes,',
        '/(bu)s$/i' => '\1ses,',
        '/(alias|status)$/i' => '\1es,',
        '/(octop|vir)us$/i' => '\1i,',
        '/(ax|test)is$/i' => '\1es,',
        '/s$/i' => 's,',
        '/$/' => 's,',
    ];

    // Применяем правила к слову
    foreach ($rules as $pattern => $replacement) {
        if (preg_match($pattern, $word)) {
            $plural = preg_replace($pattern, $replacement, $word);
            break;
        }
    }

    return $plural;
}

// Пример использования
echo pluralize('quiz');
echo pluralize('ox');
echo pluralize('mouse');
echo pluralize('matrix');
echo pluralize('box');
echo pluralize('baby');
echo pluralize('leaf');
echo pluralize('analysis');
echo pluralize('cactus');
echo pluralize('bus');
echo pluralize('status');
echo pluralize('octopus');
echo pluralize('axis');
echo pluralize('car');
?>