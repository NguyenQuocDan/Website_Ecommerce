<?php
namespace  Model\DB;
use PDO;

class DB
{
    private $dsn = "mysql:host=127.0.0.1;dbname=Website_Ecommerce";
    private $user = "root";
    private $pass = "@Quocdan123";

    public function __construct()
    {
    }

    public function connection()
    {
        return new PDO($this->dsn, $this->user, $this->pass);
    }
}