<?php
$directory = 'path/to/your/images/folder';
$images = glob($directory . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

if (!empty($images)) {
    $randomImage = $images[array_rand($images)];
    $imagePath = basename($randomImage);
    echo "<img src='$directory/$imagePath' alt='Random Image'>";
} else {
    echo "No images found in the directory.";
}
?>