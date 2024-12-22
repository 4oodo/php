<?php
$arr = [
    ['name' => 'prod1', 'price' => 100, 'amount' => 1],
    ['name' => 'prod2', 'price' => 200, 'amount' => 2],
    ['name' => 'prod3', 'price' => 300, 'amount' => 3],
];

$total = 0;

echo "<table>
    <thead>
        <tr>
            <th>продукт</th>
            <td>цена</td>
            <td>количество</td>
            <td>сумма</td>
        </tr>
    </thead>
    <tbody>";

foreach ($arr as $item) {
    $sum = $item['price'] * $item['amount'];
    $total += $sum;
    echo "<tr>
        <td>{$item['name']}</td>
        <td>{$item['price']}</td>
        <td>{$item['amount']}</td>
        <td>{$sum}</td>
    </tr>";
}

echo "</tbody>
</table>
<br>
итого: <span>{$total}</span>";
?>