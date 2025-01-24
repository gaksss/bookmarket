<?php

require_once("../utils/db/dbConnect.php");
require_once("../utils/autoloader.php");

// Regarde que le server soit bien en mode post
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../public/accueil.php');
    return;
}

// Regarde que tout les inputs existent bien
if (
    !isset(
        $_POST['email'],
        $_POST['confirmEmail'],
        $_POST['password'],
        $_POST['confirmPassword'],
        $_POST['phone'],
        $_POST['lastname'],
        $_POST['firstname']
    )
) {
    header('location: ../public/accueil.php');
    return;
}

// Regarde que les inputs ne soient pas vides
if (
    empty($_POST['email']) ||
    empty($_POST['confirmEmail']) ||
    empty($_POST['password']) ||
    empty($_POST['confirmPassword']) ||
    empty($_POST['phone']) ||
    empty($_POST['lastname']) ||
    empty($_POST['firstname'])
) {
    header('location: ../public/accueil.php');
    return;
}

// input sanitization
$email = htmlspecialchars(trim($_POST['email']));
$confirmEmail = htmlspecialchars(trim($_POST['confirmEmail']));
$password = htmlspecialchars(trim($_POST['password']));
$confirmPassword = htmlspecialchars(trim($_POST['confirmPassword']));
$phone = htmlspecialchars(trim($_POST['phone']));
$lastname = htmlspecialchars(trim($_POST['lastname']));
$firstname = htmlspecialchars(trim($_POST['firstname']));

// Regarde que les inputs ne soient pas trop longs
if (
    strlen($email) > 50 ||
    strlen($confirmEmail) > 50 ||
    strlen($password) > 50 ||
    strlen($confirmPassword) > 50 ||
    strlen($phone) > 15 ||
    strlen($lastname) > 50 ||
    strlen($firstname) > 50
) {
    header('location: ../public/accueil.php');
    return;
}

// Si des champs sont différents
if ($email != $confirmEmail || $password != $confirmPassword) {
    header('location: ../public/accueil.php');
    return;
}

// Regarde en regex si l'email est bien conforme
if (!preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]/', $email)) {
    header('location: ../public/accueil.php');
    return;
}

try {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $user = new User(0, $lastname, $firstname, $email, $phone, $hashedPassword, '', 1); // Assuming default role id is 1
    $userRepository = new UserRepository();
    $userRepository->createUser($user);
    header('location: ../public/accueil.php');
} catch (PDOException $error) {
    echo "Erreur lors de la requête : " . $error->getMessage();
    header('location: ../public/accueil.php');
}
