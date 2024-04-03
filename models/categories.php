<?php

// Definizione della classe Category
class Category {
    //  proprietà della classe
    public $name; 
    public $image; 

    //  costruttore della classe
    public function __construct($name, $image) {
        //  valori passati come argomenti al costruttore
        $this->name = $name;
        $this->image = $image;
    }
}

?>
