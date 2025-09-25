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

  <article>
    <h2>Brot</h2>
    <p>Preis: €2</p>
    <p>Es ist ein Brot! </p>
    <form action="warenkorb.php" method="POST">
      <input type="hidden" name="bezeichnung" value="Brot">
      <input type="hidden" name="beschreibung" value="Grundnahrungsmittel der deutschen">
      <input type="hidden" name="preis" value="2">
      <button type="submit">Add to cart</button>
    </form>
  </article>

  <article>
    <h2>Bier</h2>
    <p>Preis: €3</p>
    <p>Ein frischgezapftes kühles blondes</p>
    <form action="warenkorb.php" method="POST">
      <input type="hidden" name="bezeichnung" value="Bier">
      <input type="hidden" name="beschreibung" value="ein weiteres Grundnahrungsmittel der deutschen">
      <input type="hidden" name="preis" value="3">
      <button type="submit">Add to cart</button>
    </form>
  </article>

</body>
</html>

