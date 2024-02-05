<?php
class Food extends Product {

    private $typeOfFood;
    private $size;
    private $brand;
    private $flavour;

    public function __construct($image, $title, $price, $category, $target, $typeOfFood, $size,  $brand, $flavour) {
        parent::__construct($image, $title, $price, $category, $target);

        $this->setTypeOfFood($typeOfFood);
        $this->setSize($size);
        $this->setBrand($brand);
        $this->setFlavour($flavour);
    }

    public function getTypeOfFood() {
        return $this->typeOfFood;
    }

    public function getSize() {
        return $this->size;
    }



    public function getBrand() {
        return $this->brand;
    }

    public function getFlavour() {
        return $this->flavour;
    }

    public function setTypeOfFood($typeOfFood) {
        $this->typeOfFood = $typeOfFood;
    }

    public function setSize($size) {
        $this->size = $size;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function setFlavour($flavour) {
        $this->flavour = $flavour;
    }
}