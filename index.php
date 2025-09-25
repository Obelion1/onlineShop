<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Startseite</title>
</head>
<body>
<h1>Willkommen im Online-Shop</h1>
    <form action="index.php" method="POST">
     <label for="username">Benutzername:</label>
    <input type="text" id="username" name="username">
    <br />
    <label for="password">Passwort:</label>
    <input type="password" id="password" name="password">
    <br />
    <input type="submit" name="login" value="Anmelden">
    </form>
<nav>
<ul>
<li><a href="index.php">Startseite</a></li>
<li><a href="produkte.php">Produkte</a></li>
<li><a href="warenkorb.php">Warenkorb</a></li>
</ul>
</nav>



</body>
</html>