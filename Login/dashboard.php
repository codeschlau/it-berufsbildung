<?php
session_start();
// Überprüfe, ob der Benutzer angemeldet ist (dies ist ein Beispiel für PHP).
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    // Wenn der Benutzer nicht angemeldet ist, leite ihn zur Anmeldeseite weiter.
    header("Location: /Login/index.html");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Hallo, <?php echo $username; ?>!</h1>
    <p>Dies ist Ihr persönliches Dashboard, auf das Sie nach erfolgreichem Login weitergeleitet wurden.</p>
    
    <!-- Hier kannst du weitere Inhalte für das Dashboard hinzufügen. -->

    <p><a href="/Login/logout.php">Abmelden</a></p> <!-- Hier sollte ein Link zur Abmeldung platziert werden. -->
</body>
</html>
