<?php

function getZodiacSign($date) {
    $zodiacSigns = [
        ['start' => '01-20', 'end' => '02-18', 'sign' => 'Водолей'],
        ['start' => '02-19', 'end' => '03-20', 'sign' => 'Рыбы'],
        ['start' => '03-21', 'end' => '04-19', 'sign' => 'Овен'],
        ['start' => '04-20', 'end' => '05-20', 'sign' => 'Телец'],
        ['start' => '05-21', 'end' => '06-20', 'sign' => 'Близнецы'],
        ['start' => '06-21', 'end' => '07-22', 'sign' => 'Рак'],
        ['start' => '07-23', 'end' => '08-22', 'sign' => 'Лев'],
        ['start' => '08-23', 'end' => '09-22', 'sign' => 'Дева'],
        ['start' => '09-23', 'end' => '10-22', 'sign' => 'Весы'],
        ['start' => '10-23', 'end' => '11-21', 'sign' => 'Скорпион'],
        ['start' => '11-22', 'end' => '12-21', 'sign' => 'Стрелец'],
        ['start' => '12-22', 'end' => '01-19', 'sign' => 'Козерог'],
    ];

    $dateObj = new DateTime($date);
    $monthDay = $dateObj->format('m-d');

    foreach ($zodiacSigns as $zodiac) {
        if (($monthDay >= $zodiac['start'] && $monthDay <= $zodiac['end']) ||
            ($zodiac['start'] > $zodiac['end'] && ($monthDay >= $zodiac['start'] || $monthDay <= $zodiac['end']))) {
            return $zodiac['sign'];
        }
    }

    return null;
}

// Пример использования
$date = '2023-03-15';
$zodiacSign = getZodiacSign($date);
echo "Знак зодиака: " . $zodiacSign;
?>