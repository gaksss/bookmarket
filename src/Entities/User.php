<?php

final class User
{

    private int $id;
    private string $lastname;
    private string $firstname;
    private string $email;
    private string $phone;
    private string $password;
    private string $pp_path;
    private int $id_role;



    public function __construct(int $id, string $lastname, string $firstname, string $email, string $phone, string $password, string $pp_path, int $id_role)
    {
        $this->id = $id;
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = $password;
        $this->pp_path = $pp_path;
        $this->id_role = $id_role;
    }



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Get the value of firstname
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }


    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }
}
