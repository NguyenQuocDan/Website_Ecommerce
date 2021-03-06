<?php


class Category
{
    protected $id;
    protected $name;
    protected $slugs;

    public function __construct($name, $slugs)
    {
        $this->name = $name;
        $this->slugs = $slugs;
    }


    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $slugs
     */
    public function setSlugs($slugs)
    {
        $this->slugs = $slugs;
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
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSlugs()
    {
        return $this->slugs;
    }
}