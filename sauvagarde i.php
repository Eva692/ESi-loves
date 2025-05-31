<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["photo"])) {
    $upload_dir = "uploads/";
    $upload_file = $upload_dir . "profile.jpg"; // L'image sera nommée "profile.jpg"

    // Vérifier le type de fichier
    $allowed_types = ["image/jpeg", "image/png", "image/gif"];
    if (!in_array($_FILES["photo"]["type"], $allowed_types)) {
        die("Format de fichier non autorisé.");
    }

    // Déplacer le fichier vers le dossier "uploads"
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $upload_file)) {
        // Stocker nom et prénom dans des cookies (valides 1 an)
        setcookie("nom", $_POST["nom"], time() + (365 * 24 * 60 * 60), "/");
        setcookie("prenom", $_POST["prenom"], time() + (365 * 24 * 60 * 60), "/");

        // Rediriger vers la page profil
        header("Location: profil.html");
        exit();
    } else {
        echo "Erreur lors de l'enregistrement.";
    }
}
?>