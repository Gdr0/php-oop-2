<?php

class Product {
    private $id;
    private $image;
    private $title;
    private $price;
    private $category;
   

    public function __construct($image, $title, $price, $category) {
        $this->setImage($image);
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setCategory($category);
    
    }


        public function setId($id){
        return $this -> id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setImage($image)
    {
        return $this -> image = $image;
    }
    public function getImage() {
        return $this->image;
    }

   
    public function setTitle($title){
        return $this -> title = $title;
    }

    public function getTitle() {
      return  $this-> title;
    }
    public function setPrice($price){
        return $this -> price = $price;
    }

    public function getPrice() {
       return $this->price;
    }

    public function setCategory($category){
        return $this -> category = $category;
    }

    public function getCategory() {
        return $this->category;
    }




}


