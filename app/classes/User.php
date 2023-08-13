<?php


namespace App\classes;


class User
{
    public  $users = [], $email, $password;

    public function __construct()
    {
//        $this->email = $post['email'];
//        $this->password = $post['password'];

        $this->users = [
            0 => [
                'id' => 1,
                'name' => 'asad',
                'email' => 'asad@gmail.com',
                'password' => '1234',
            ],
            1 => [
                'id' => 2,
                'name' => 'sohel',
                'email' => 'sohel@gmail.com',
                'password' => '12345',
            ],
            2 => [
                'id' => 3,
                'name' => 'arman',
                'email' => 'arman@gmail.com',
                'password' => '123456',
            ],
            3 => [
                'id' => 4,
                'name' => 'towfic',
                'email' => 'towfic@gmail.com',
                'password' => '1234567',
            ],

        ];
    }

    public function getAllUser()
    {
        return $this->users;
    }

//    public function login()
//    {
//        foreach ($this->users as $user)
//        {
//            if ($user['email']== $this->email && $user['password'] == $this->password)
//            {
//                session_start();
//                $_SESSION['id'] = session_id();
//                header('Location: action.php?page=home');
//            }
//        }
//        echo 'Email or Password is incorrect';
//        exit();
////        return $this->users;
//    }

}