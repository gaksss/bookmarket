<?php

class BookMapper
{

    public static function mapToObject(array $datas)
    {

        return new Book(
            $datas['id'],
            $datas['title'],
            $datas['description']


        );
    }

    public static function mapToArray(Book $book)
    {

        return [

            'id' => $book->getId(),
            'title' => $book->getTitle(),
            'description' => $book->getDescription(),




        ];
    }
}
