<?php
include("product.php");
class Accessories extends Product {

private $type;



public function __construct($image, $title, $price, $category, $target, $type) {
    parent::__construct($image, $title, $price, $category, $target);

    $this->setType($type);
   
}

public function getType() {
   return $this -> type;
}
public function setType($type) {
    return $this -> type = $type;
}

}

