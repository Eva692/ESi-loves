<?php
session_start();
// Exemple en dur (remplace par une base de données en vrai)
$users = [
    ["username" => "jean.dupont", "password" => "password123", "nom" => "Dupont", "prenom" => "Jean"],
    ["username" => "sophie.martin", "password" => "azerty", "nom" => "Martin", "prenom" => "Sophie"]
];

$username = isset($_POST['username']) ? trim($_POST['username']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

foreach ($users as $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['nom'] = $user['nom'];
        $_SESSION['prenom'] = $user['prenom'];
        header("Location: profil.php");
        exit();
    }
}
header("Location: index.html?erreur=Nom d'utilisateur ou mot de passe incorrect.");
exit();
?>
