<?php
session_start();

// Hier solltest du die tatsächliche Überprüfung der Anmeldeinformationen durchführen.
// Für dieses einfache Beispiel verwenden wir eine statische Liste von Benutzern.

$users = array(
    'benutzer1' => 'passwort1',
    'benutzer2' => 'passwort2',
    'benutzer3' => 'passwort3'
);

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Überprüfe, ob die Anmeldeinformationen gültig sind.
    if (array_key_exists($username, $users) && $users[$username] == $password) {
        $_SESSION['username'] = $username;
        header("Location: /Login/dashboard.php");
        exit;
    }
}

// Wenn die Anmeldeinformationen ungültig sind, leite zur Anmeldeseite zurück.
header("Location: /Login/index.html");
exit;
?>
