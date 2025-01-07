<?php
include_once("./db.php");

// recupe des datas
$email = $_POST['email'];
$password = $_POST['password'];

// QUERY
$stmt = $pdo->prepare('SELECT * FROM user WHERE email = :email');
$stmt->execute([
    ':email'=> $email,
]);

// RESULT QUERY
$user = $stmt->fetch(PDO::FETCH_ASSOC);



// if user exist is not empty
if(empty($user)){
    header('location: ./pages/accueil.php');
    exit;
};

// if password enter and the password(hashed) stock in DB are equal

if(!password_verify($password, $user['password'])) {
    var_dump("test");
    header('location: ./pages/accueil.php');
    exit;
};

session_start();

// envoye en backend par session
$_SESSION['user'] = [
    "name"=>$user["name"],
    "email"=>$user["email"],
    "id"=>$user["id"],

];

// redirect to home page if user exist

header('location: ./pages/accueil.php');
?>