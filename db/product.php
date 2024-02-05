<?php

class Product {
    private $image;
    private $title;
    private $price;
    private $category;
    private $target;

    public function __construct($image, $title, $price, $category, $target) {
        $this->setImage($image);
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setCategory($category);
        $this->setTarget($target);
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

    public function setTarget($target){
        return $this -> target = $target;
    }

    public function getTarget() {
        return $this->target;
    }


}



$product = new Product ("dio", "dio", "dio", "dio","dio");
var_dump ($product);