<?php
namespace Controller;
use Category;
use CategoryDB;


    class CategoriesController
    {
        private  $categoryDB;

        public function __construct()
        {
            $this->categoryDB = new CategoryDB();
        }

        public  function index()
        {
            $categories = $this->categoryDB->getall();
            include "View/category/list.php";
        }
    }