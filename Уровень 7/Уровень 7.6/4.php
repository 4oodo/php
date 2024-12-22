<?php
$outputFilePath = 'path/to/your/output/file.txt';

$outputDir = dirname($outputFilePath);
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0777, true);
}

$luckyTickets = [];

for ($i = 0; $i <= 999999; $i++) {
    $ticket = str_pad($i, 6, '0', STR_PAD_LEFT);
    $firstHalfSum = $ticket[0] + $ticket[1] + $ticket[2];
    $secondHalfSum = $ticket[3] + $ticket[4] + $ticket[5];

    if ($firstHalfSum == $secondHalfSum) {
        $luckyTickets[] = $ticket;
    }
}

file_put_contents($outputFilePath, implode(PHP_EOL, $luckyTickets));

echo "Список всех возможных счастливых билетов был записан в файл.";
?>