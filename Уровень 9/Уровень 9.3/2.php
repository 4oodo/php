<?php
function hasFourTwos($date) {
    return substr_count($date, '2') === 4;
}

$startDate = new DateTime('2000-01-01');
$endDate = new DateTime('2099-12-31');
$interval = new DateInterval('P1D');
$period = new DatePeriod($startDate, $interval, $endDate);

$datesWithFourTwos = [];

foreach ($period as $date) {
    $formattedDate = $date->format('d.m.Y');
    if (hasFourTwos($formattedDate)) {
        $datesWithFourTwos[] = $formattedDate;
    }
}

echo "Dates with exactly four '2's in the current century:\n";
echo implode("\n", $datesWithFourTwos);
?>