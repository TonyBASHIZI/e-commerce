<?php

namespace Core\Auth;

use Core\Database\Database;


class DBAuth
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function getAuthUserId()
    {
        if($this->isLogged())
        {
            return $_SESSION['auth'];
        }
        return false;
    }

    public function login($email, $password)
    {
        $user = $this->db->prepare("SELECT * FROM users WHERE email = ?", [$email], null, true);
        // var_dump($user);die();

        if($user)
        {
            // if(password_verify($password, $user->password)) si le mot de pass est hacher
            if($password === $user->password) //si non
            {
                $_SESSION['auth'] = $user->id;
                return true; 
            }
        }
        return false;
    }

    public function isLogged()
    {
       return isset($_SESSION['auth']); 
    }
}
