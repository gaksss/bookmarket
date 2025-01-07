<?php
session_start();

if (!isset($_SESSION['user'])) {
    // Redirigez vers l'accueil si l'utilisateur n'est pas connecté
    header('Location: ../pages/accueil.php');
    exit;
}

// Récupérez les données de l'utilisateur pour afficher son profil
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookMarket</title>
</head>

<body>
    <h3>Bienvenue, <?php echo $user['lastname'] . " " . $user['firstname']  ?></h3>
</body>

</html>