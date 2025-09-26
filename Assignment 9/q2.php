<?php

$products = file('products.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$productArray = [];

foreach ($products as $product) {
    list($name, $price) = explode(',', $product);
    $productArray[] = ['name' => $name, 'price' => (int)$price];
}

usort($productArray, function($a, $b) {
    return $a['price'] <=> $b['price'];
});

echo "<table border='1'>";
echo "<tr><th>Product Name</th><th>Price</th></tr>";
foreach ($productArray as $product) {
    echo "<tr><td>{$product['name']}</td><td>{$product['price']}</td></tr>";
}
echo "</table>";
?>

