<?php
session_start();

if (!isset($_SESSION['user'])) {
    // Redirigez vers l'accueil si l'utilisateur n'est pas connecté
    header('Location: ../pages/accueil.php');
    exit;
}

$email = $_SESSION['user']['email'];
require_once '../db/dbConnect.php';

$sql = "SELECT * FROM `user` WHERE email = :email";

try {
    // Préparation de la requête
    $stmt = $pdo->prepare($sql);

    // Exécution avec le paramètre :email
    $stmt->execute([':email' => $email]);

    // Récupération des résultats
    $user = $stmt->fetch(PDO::FETCH_ASSOC); // Utilisez fetch si vous attendez un seul résultat
    if ($user) {
        // print_r($user); // Affichez les données si nécessaire
    } else {
        echo "Aucun utilisateur trouvé avec cet email.";
    }
} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
}