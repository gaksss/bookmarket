<?php

require_once("../utils/db/dbConnect.php");
include_once("../utils/autoloader.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Récupérer les données du formulaire
    $id = $_POST['idPatient'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $firstname = $_POST['firstname'] ?? '';
    $password = $_POST['password'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

    // Créer une instance de UserRepository
    $userRepository = new UserRepository();

    // Créer une instance de User
    $user = new User($id, $lastname, $firstname, $email, $phone, password_hash($password, PASSWORD_DEFAULT));

    try {
        // Mettre à jour l'utilisateur
        $userRepository->updateUser($user);
        echo "Profil mis à jour avec succès ! <a href=../public/profil.php>Revenir à la liste </a>";
    } catch (PDOException $error) {
        echo "Erreur lors de la mise à jour : " . $error->getMessage() . "<a href=../public/profil.php>Revenir à la liste </a>";
    }
}
