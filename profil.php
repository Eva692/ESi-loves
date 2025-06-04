<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon profil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body { font-family: Times, sans-serif; background: #eee; }
        .container { max-width: 400px; margin: 70px auto; background: white; border-radius: 10px; box-shadow: 0 0 10px #bbb; padding: 30px 20px; }
        h2 { color: #4CAF50; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bienvenue <?= htmlspecialchars($_SESSION['prenom'] . " " . $_SESSION['nom']) ?> !</h2>
        <p><b>Nom d'utilisateur :</b> <?= htmlspecialchars($_SESSION['username']) ?></p>
        <a href="logout.php"><button>Déconnexion</button></a>
    </div>
</body>
</html>
