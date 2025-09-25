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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bezeichnung'])) {
    $_SESSION['einkaufswagen'][] = [
        'bezeichnung'   => $_POST['bezeichnung'],
        'beschreibung'  => $_POST['beschreibung'],
        'preis'         => floatval($_POST['preis'])  // make sure it's numeric
    ];
}

// checkout pressed?
$total = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['checkout'])) {
    $sum = 0;
    foreach ($_SESSION['einkaufswagen'] as $item) {
        $sum += $item['preis'];
    }
    $total = $sum;
}
?>

<?php if (empty($_SESSION['einkaufswagen'])): ?>
    <p>Ihr Warenkorb ist leer.</p>
<?php else: ?>
    <ul>
      <?php foreach ($_SESSION['einkaufswagen'] as $item): ?>
        <li>
          <?= htmlspecialchars($item['bezeichnung']) ?> —
          €<?= number_format($item['preis'], 2, ',', '.') ?>
        </li>
      <?php endforeach; ?>
    </ul>

    <!-- Checkout button -->
    <form method="post">
        <button type="submit" name="checkout">Bezahlen</button>
    </form>

    <?php if ($total !== null): ?>
        <p><strong>Total: €<?= number_format($total, 2, ',', '.') ?></strong></p>
    <?php endif; ?>
<?php endif; ?>
</body>
</html>
