<?php

final class Book
{
    private int $id;
    private string $title;
    private int $id_author;
    private int $price;
    private string $description;
    private int $id_img;
    private int $releaseAt;
    private int $id_seller;
    private int $id_bookState;



    public function __construct(int $id, string $title, string $description)
    {

        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }
}
