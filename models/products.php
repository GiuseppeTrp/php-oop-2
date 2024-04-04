<?php

// Definizione della classe Product
class Product {
    //  proprietà della classe
    public $id; 
    public $name; 
    public $description; 
    public $price; 
    public $image; 
    public $category;

    // costruttore della classe
    public function __construct($id, $name, $description, $price, $image, $category) {
        // valori passati come argomenti al costruttore
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
    public function setImage($image) {
        $this->image = $image;
    }


   
}

?>


