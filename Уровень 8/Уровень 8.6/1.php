<?php
$menu = [
    'Home' => '/home',
    'About' => '/about',
    'Contact' => '/contact'
];

$currentUrl = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <style>
        .active {
            color: red;
        }
    </style>
</head>
<body>
    <ul>
        <?php foreach ($menu as $name => $url): ?>
            <li>
                <a href="<?php echo $url; ?>" class="<?php echo ($url == $currentUrl) ? 'active' : ''; ?>">
                    <?php echo $name; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>