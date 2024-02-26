<?php
include __DIR__ . '/Product.php';

 class DogProduct extends Product {
    public $type;
    public $icon;

    public function __construct($name, $price, $code, $image, $genre, $type, $icon){
        // parent::__construct($name, $price, $code, $image, $genre)
        $this->name = $name;
        $this->price = $price;
        $this->code = $code;
        $this->image = $image;
        $this->genre = $genre;

        $this->type = $type;
        $this->icon = $icon;
    }
 }