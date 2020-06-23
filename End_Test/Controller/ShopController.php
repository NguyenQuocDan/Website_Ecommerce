<?php

class ShopController
{
    private $shopDB;

    public function __construct()
    {
        $this->shopDB = new ProductDB();
    }

    function index()
    {
        $products = $this->shopDB->getAll();
        include_once "View/product/list.php";
    }
    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET["id"];
            $product =$this->shopDB->getById($id);
        } else {
            $this->shopDB->delete($_POST["id"]);
            header("location: admin.php");
        }
        include "view/product/delete.php";

    }

    public function edit()
    {
    }
}