<?php
include_once("../db/dbConnect.php");


// Regarde que le server soit bien en mode post
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ../pages/accueil.php');
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
        $_POST['firstname'],
    )
) {
    header('location: ../pages/accueil.php');
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
    header('location: ../pages/accueil.php');
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
    // redirection si c'est pas bon
    header('location: ../pages/accueil.php');
    return;
}

//  Si des champs sont différents
if (
    $email != $confirmEmail || $password != $confirmPassword
) {
    header('location: ../pages/accueil.php');
    return;
}



// Regarde en regex si l'email est bien conforme
if (!preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]/', $email)) {
    header('location: ../pages/accueil.php');
    return;
}



// Inserer user info dans la BDD


$sql = $sql = "INSERT INTO user (lastname, firstname, email, phone, password)
VALUES (:lastname,:firstname, :email, :phone, :password);";

try {
    $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare($sql);
    $users = $stmt->execute([
        ':email' => $_POST["email"],
        ':password' => $hashedPassword,
        ':lastname' => $_POST["lastname"],
        ':firstname' => $_POST["firstname"],
        ':phone' => $_POST["phone"]
    ]);
} catch (PDOException $error) {
    echo "Erreur lors de la requete : ";
    header('location: ../pages/accueil.php');
}

header('location: ../pages/accueil.php');
