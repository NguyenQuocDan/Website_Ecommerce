<?php

namespace Model\DB;

use PDO;
use PDOException;

class DB
{
    private $dsn = "mysql:host=127.0.0.1;dbname=Website_Ecommerce; charset=utf8";
    private $user = "root";
    private $pass = "@Quocdan123";

    public function __construct()
    {
    }

    public function connection()
    {
        try {
            return new PDO($this->dsn, $this->user, $this->pass);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}