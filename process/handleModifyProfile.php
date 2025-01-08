<?php 

require_once '../db/dbConnect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Récupérer les données du formulaire
    
    $lastname = $_POST['lastname'] ?? '';
    $firstname = $_POST['firstname'] ?? '';
    $password = $_POST['password'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';

    // Requête UPDATE pour modifier les informations
    $updateSql = "UPDATE `user` 
                  SET `lastname` = :lastname, 
                      `firstname` = :firstname, 
                      `password` = :password, 
                      `phone` = :phone, 
                      `email` = :email 
                  WHERE `email` = :email";
    $updateStmt = $pdo->prepare($updateSql);

    try {
        $hashedPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $updateStmt->execute([
            ':lastname' => $lastname,
            ':firstname' => $firstname,
            ':password' => $hashedPassword,
            ':phone' => $phone,
            ':email' => $email,
            
        ]);
        echo "Profil mis à jour avec succès ! <a href=./profil.php>Revenir à la liste </a>";
    } catch (PDOException $error) {
        echo "Erreur lors de la mise à jour : " . $error->getMessage() . "<a href=./profil.php>Revenir à la liste </a>";
    }
}