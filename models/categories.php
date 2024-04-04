<?php

// Definizione della classe Category
class Category {
    //  proprietà della classe
    public $name; 
    public $icon; 

    //  costruttore della classe
    public function __construct($name, $icon) {
        //  valori passati come argomenti al costruttore
        $this->name = $name;
        $this->icon = $icon;
    }
}

?>
