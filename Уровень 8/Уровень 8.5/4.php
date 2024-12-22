<?php
$days = range(1, 31);
$months = [
    'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
    'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'
];
$currentYear = date('Y');
$years = range($currentYear - 10, $currentYear + 10);

$currentDay = date('j');
$currentMonth = date('n');
?>

<form>
    <label for="day">День:</label>
    <select id="day" name="day">
        <?php foreach ($days as $day): ?>
            <option value="<?= $day ?>" <?= $day == $currentDay ? 'selected' : '' ?>><?= $day ?></option>
        <?php endforeach; ?>
    </select>

    <label for="month">Месяц:</label>
    <select id="month" name="month">
        <?php foreach ($months as $index => $month): ?>
            <option value="<?= $index + 1 ?>" <?= $index + 1 == $currentMonth ? 'selected' : '' ?>><?= $month ?></option>
        <?php endforeach; ?>
    </select>

    <label for="year">Год:</label>
    <select id="year" name="year">
        <?php foreach ($years as $year): ?>
            <option value="<?= $year ?>" <?= $year == $currentYear ? 'selected' : '' ?>><?= $year ?></option>
        <?php endforeach; ?>
    </select>
</form>