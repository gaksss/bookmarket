<?php
require_once("../utils/db/dbConnect.php");
include_once("../utils/autoloader.php");

$email = $_POST['email'];
$password = $_POST['password'];

$userRepository = new UserRepository();
$user = $userRepository->findByEmail($email);

if ($user === null || !password_verify($password, $user->getPassword())) {
    header('location: ../public/accueil.php');
    exit;
}

session_start();

$_SESSION['user'] = [
    "lastname" => $user->getLastname(),
    "firstname" => $user->getFirstname(),
    "phone" => $user->getPhone(),
    "email" => $user->getEmail(),
    "id" => $user->getId(),
];

header('location: ../public/accueil.php');
