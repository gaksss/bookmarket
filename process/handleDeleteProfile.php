<?php
// Vérifiez si une session est déjà démarrée
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once '../db/dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    // Récupérer l'email depuis le formulaire ou la session
    $email = $_POST['email'] ?? '';
    
    if (empty($email)) {
        echo "Erreur : email non fourni. <a href='../pages/accueil.php'>Revenir à l'accueil</a>";
        exit;
    }

    // Requête DELETE pour supprimer le profil
    $deleteSql = "DELETE FROM `user` WHERE `email` = :email";
    $deleteStmt = $pdo->prepare($deleteSql);

    try {
        $deleteStmt->execute([':email' => $email]);

        if ($deleteStmt->rowCount() > 0) {
            // Supprimer la session de l'utilisateur pour le déconnecter
            session_unset(); // Supprime toutes les variables de session
            session_destroy(); // Détruit la session

            // Redirection après succès
            echo "Profil supprimé avec succès. Vous allez être redirigé...";
            header("Refresh: 3; url=../pages/accueil.php");
            exit;
        } else {
            echo "Aucun utilisateur trouvé avec cet email. <a href='../pages/accueil.php'>Revenir à l'accueil</a>";
        }
    } catch (PDOException $error) {
        echo "Erreur lors de la suppression : " . $error->getMessage() . " <a href='../pages/accueil.php'>Revenir à l'accueil</a>";
    }
}
