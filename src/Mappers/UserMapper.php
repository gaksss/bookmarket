<?php

class UserMapper
{

    public static function mapToObject(array $datas)
    {

        return new User(
            $datas['id'],
            $datas['lastname'],
            $datas['firstname'],
            $datas['email'],
            $datas['phone'],
            $datas['password'],

        );
    }

    public static function mapToArray(User $user)
    {

        return [

            'lastname' => $user->getLastName(),
            'firstname' => $user->getFirstName(),
            'email' => $user->getEmail(),
            'phone' => $user->getPhone(),
            'password' => $user->getPassword(),



        ];
    }
}
