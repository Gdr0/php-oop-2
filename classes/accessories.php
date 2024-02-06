<?php

class Accessories extends Product {

private $type;



public function __construct($image, $title, $price, $category, $type) {


    $this->setImage($image);
    $this->setTitle($title);
    $this->setPrice($price);
    $this->setCategory($category);
    $this->setType($type);
   
}

public function getType() {
   return $this -> type;
}
public function setType($type) {
    return $this -> type = $type;
}

}

