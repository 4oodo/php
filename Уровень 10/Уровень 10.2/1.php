<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Решение квадратного уравнения</title>
</head>
<body>
    <h1>Решение квадратного уравнения</h1>
    <form method="post">
        <label for="a">a:</label>
        <input type="number" id="a" name="a" required><br><br>
        <label for="b">b:</label>
        <input type="number" id="b" name="b" required><br><br>
        <label for="c">c:</label>
        <input type="number" id="c" name="c" required><br><br>
        <input type="submit" value="Решить">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        $discriminant = $b * $b - 4 * $a * $c;

        if ($discriminant > 0) {
            $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
            echo "Корни уравнения: $root1 и $root2";
        } elseif ($discriminant == 0) {
            $root = -$b / (2 * $a);
            echo "Корень уравнения: $root";
        } else {
            echo "Уравнение не имеет действительных корней.";
        }
    }
    ?>
</body>
</html>