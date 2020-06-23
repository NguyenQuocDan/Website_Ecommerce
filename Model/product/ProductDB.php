<?php


use Model\DB\DB;

class ProductDB
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->connection();
    }

    public function getById($id)
    {

        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch();
        $product = new Product($result["name"],
            $result["desc"],
            $result["image"],
            $result["price"]);
        $product->setId($result["id"]);

        return $product;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();

        $products = [];
        foreach ($result as $item) {
            $product = new Product($item["name"],
                $item["desc"],
                $item["image"],
                $item["price"]);
            $product->setId($item["id"]);
            array_push($products, $product);
        }
        return $products;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id = ?";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1, $id);
        return $stmt->execute();
    }

    public function edit($product)
    {
        $sql = "UPDATE products SET name = ?, desc = ?, image = ?, price = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);

        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getImage());
        $stmt->bindParam(3, $product->getPrice());
        $stmt->bindParam(5, $product->getId());

        return $stmt->execute();
    }
}