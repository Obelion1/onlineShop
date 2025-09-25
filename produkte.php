<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Produkte</title>
</head>
<body>
<nav>
<ul>
<li><a href="index.php">Startseite</a></li>
<li><a href="produkte.php">Produkte</a></li>
<li><a href="warenkorb.php">Warenkorb</a></li>
</ul>
</nav>

<h1>Produkte</h1>

<article>
    <h2>Apfel</h2>
    <p>Preis: €1</p>
    <p>Es ist ein Apfel! </p>
    <form action="warenkorb.php" method="POST">
      <input type="hidden" name="bezeichnung" value="Apfel">
      <input type="hidden" name="beschreibung" value="runde essbare Frucht">
      <input type="hidden" name="preis" value="1">
      <button type="submit">Add to cart</button>
    </form>
  </article>

<div>
<h2>Brot</h2>
<p> es ist ein Brot </p>
<p> Preis: 2€ </p>
<button>add to cart</button>
</div>

<article>
    <h2>Cool T-Shirt</h2>
    <p>Price: €19.99</p>
    <form action="cart.php" method="POST">
      <input type="hidden" name="product_id" value="shirt123">
      <input type="hidden" name="product_name" value="Cool T-Shirt">
      <input type="hidden" name="product_price" value="19.99">
      <button type="submit">Add to cart</button>
    </form>
  </article>

</body>
</html>

