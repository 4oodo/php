<?php
function generateQuadraticEquation() {
    $root1 = rand(-10, 10);
    $root2 = rand(-10, 10);

    $a = 1; // Для упрощения используем a = 1
    $b = -($root1 + $root2);
    $c = $root1 * $root2;

    $equation = "{$a}x^2";
    if ($b != 0) {
        $equation .= ($b > 0 ? " + {$b}x" : " - " . abs($b) . "x");
    }
    if ($c != 0) {
        $equation .= ($c > 0 ? " + {$c}" : " - " . abs($c));
    }

    return $equation;
}

echo generateQuadraticEquation();
?><?php
