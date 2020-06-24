<?php
ob_start();


class ShopController
{
    public $shopDB;

    public function __construct()
    {
        $this->shopDB = new ProductDB();
    }


    function index()
    {
        $products = $this->shopDB->getAll();
        include "View/product/list.php";
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
        include "../View/product/delete.php";

    }

    public function edit()
    {
    }

    public function getCategories()
    {
        $categoryDB = new CategoryDB();
        return  $categoryDB->getAll();
    }

    public  function  add()
    {
        $categories = $this->getCategories();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!empty($_FILES["image"]["name"])) {
                include "upload.php";
            }

            $product = new Product(
                $_POST["name"],
                $_POST["price"],
                $_POST["desc"],
                $_POST["image"]

        );

            if ($isSuccess = $this->shopDB->add($product)) {
                $message = "Add product successful!";
            } else {
                $message = "Something error! Try again!";
            }
        }
        include_once "View/product/add.php";
    }

    public function getById($id)
    {
        $product =$this->shopDB->getById($id);
        include "View/product/product.php";

    }
}