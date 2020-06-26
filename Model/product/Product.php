<?php

class   Product
{
    private $id;
    private $name;
    private $desc;
    private $image;
    private $price;
    private $category_id;


    public function __construct($name, $desc, $image, $price, $category_id)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->image = $image;
        $this->price = $price;
        $this->category_id = $category_id;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc): void
    {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getCategory_Id()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategory_Id($category_id)
    {
        $this->category_id = $category_id;
    }

}