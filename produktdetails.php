<?php
foreach ($products as $product) {
    echo "<h2>" . htmlspecialchars($product['price']) . "€</p>";
    echo "<p>Preis: " . htmlspecialchars ($product['price']) 


}