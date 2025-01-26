<?php


final class BookRepository extends AbstractRepository
{

    public function __construct()
    {
        parent::__construct();
    }

    public function findById(int $id): ?Book
    {
        $sql = "SELECT * FROM book WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['id' => $id]);
        $userData = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$userData) {
            return null;
        }
        return BookMapper::mapToObject($userData);
    }


    public function findAllBooks(): array
    {
        $sql = "SELECT * FROM book";
        $stmt = $this->pdo->query($sql);
        $heroDatas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $heroes = [];

        foreach ($heroDatas as $heroData) {
            $books[] = BookMapper::mapToObject($heroData);
        }

        return $books;
    }
}
