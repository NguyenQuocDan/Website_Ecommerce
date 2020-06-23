<?php

use Model\DB\DB;
use User\UserDB;

class UserController
{
    private $userDB;

    public function __construct()
    {
        $db = new DB("mysql:host=127.0.0.1;dbname=Website_Ecommerce", "root", "@Quocdan123");
        $this->userDB = new UserDB($db->connect());
    }

}