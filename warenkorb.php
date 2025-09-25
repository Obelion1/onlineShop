<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Warenkorb</title>
</head>
<body>
<nav>
<ul>
<li><a href="index.php">Startseite</a></li>
<li><a href="produkte.php">Produkte</a></li>
<li><a href="warenkorb.php">Warenkorb</a></li>
</ul>
</nav>

<h1>Warenkorb</h1>
<?php
session_start();
if (!isset($_SESSION['einkaufswagen'])) {
    $_SESSION['einkaufswagen'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['einkaufswagen'][] = [
        'bezeichnung'    => $_POST['bezeichnung'],
        'beschreibung'  => $_POST['beschreibung'],
        'preis' => $_POST['preis']
    ];
}

?>

<?php if (empty($_SESSION['einkaufswagen'])): ?>
    <p>Ihr Warenkorb ist leer.</p>
  <?php else: ?>
    <ul>
      <?php foreach ($_SESSION['einkaufswagen'] as $item): ?>
        <li>
          <?= htmlspecialchars($item['bezeichnung']) ?> — 
          €<?= htmlspecialchars($item['preis']) ?>
        </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</body>
</html>