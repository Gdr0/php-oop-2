<?php

class Food extends Product {

    private $type;
    private $brand;
    private $flavour;

    public function __construct($image, $title, $price, $category, $type, $brand, $flavour) {
       

        $this->setImage($image);
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setCategory($category);
        

        $this->setType($type);
        $this->setBrand($brand);
        $this->setFlavour($flavour);
    }

    public function getType() {
        return $this->type;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getFlavour() {
        return $this->flavour;
    }

    public function setType($type) {
        $this->type = $type;
    }


    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setFlavour($flavour) {
        $this->flavour = $flavour;
    }
}