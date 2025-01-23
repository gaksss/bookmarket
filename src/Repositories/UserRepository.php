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

    public function createUser()
    {

   
    }



    public function deleteUser(string $email): void
    {
        $sql = "DELETE FROM `user` WHERE `email` = :email";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['email' => $email]);
    }
}
