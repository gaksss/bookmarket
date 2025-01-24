<?php

final class UserRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findByEmail(string $email): ?User
    {
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$userData) {
            return null;
        }
        return UserMapper::mapToObject($userData);
    }

    public function createUser(User $user): void
    {
        $sql = "INSERT INTO user (lastname, firstname, email, phone, password)
            VALUES (:lastname, :firstname, :email, :phone, :password )";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':lastname' => $user->getLastname(),
            ':firstname' => $user->getFirstname(),
            ':email' => $user->getEmail(),
            ':phone' => $user->getPhone(),
            ':password' => $user->getPassword(),

        ]);
    }



    public function deleteUser(string $email): void
    {
        $sql = "DELETE FROM `user` WHERE `email` = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
    }


    public function updateUser(User $user): void
    {
        $sql = "UPDATE user 
                SET lastname = :lastname, 
                    firstname = :firstname, 
                    email = :email, 
                    phone = :phone, 
                    password = :password
                WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':lastname' => $user->getLastname(),
            ':firstname' => $user->getFirstname(),
            ':email' => $user->getEmail(),
            ':phone' => $user->getPhone(),
            ':password' => $user->getPassword(),
            ':id' => $user->getId()
        ]);
    }
}
