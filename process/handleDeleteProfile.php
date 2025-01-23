<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once("../utils/db/dbConnect.php");
include_once("../utils/autoloader.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $email = $_POST['email'] ?? '';

    if (empty($email)) {
        echo "Erreur : email non fourni. <a href='../public/accueil.php'>Revenir à l'accueil</a>";
        exit;
    }

    $userRepository = new UserRepository();
    $user = $userRepository->findByEmail($email);

    if ($user === null) {
        echo "Aucun utilisateur trouvé avec cet email. <a href='../public/accueil.php'>Revenir à l'accueil</a>";
        exit;
    }

    try {
        $userRepository->deleteUser($email);

        session_unset();
        session_destroy();

        echo "Profil supprimé avec succès. Vous allez être redirigé...";
        header("Refresh: 3; url=../public/accueil.php");
        exit;
    } catch (PDOException $error) {
        echo "Erreur lors de la suppression : " . $error->getMessage() . " <a href='../public/accueil.php'>Revenir à l'accueil</a>";
    }
}
