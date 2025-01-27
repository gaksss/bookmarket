<?php 

final class Img {

    private int $id;
    private string $img_path;
    private string $img_alt;


    public function __construct(int $id, string $img_path, string $img_alt)
    {

        $this->id = $id;
        $this->img_path = $img_path;
        $this->img_alt = $img_alt;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of img_path
     */ 
    public function getImg_path()
    {
        return $this->img_path;
    }

    /**
     * Get the value of img_alt
     */ 
    public function getImg_alt()
    {
        return $this->img_alt;
    }
}