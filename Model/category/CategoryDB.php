<?php


use Model\DB\DB;

class CategoryDB
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->connection();
    }


    public function getall()
    {
        $sql = "SELECT * FROM categories";
        $stmt = $this->db->query($sql);
        $result = $stmt->fetchAll();

        $arr = [];
        foreach ($result as $item){
            $category = new Category($item['name'], $item['slugs']);
            $category->setId($item['id']);
            array_push($arr, $category);
        }
            return $arr;
    }

}