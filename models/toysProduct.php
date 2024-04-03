<?php

class ToysProduct extends Product
{
    public $type;
    public $materials;

    // Costruttore della classe ToysProduct
    public function __construct($id, $name, $description, $price, $image, $category, $type, $materials)
    {
        // Richiamo del costruttore della classe genitore (Product)
        parent::__construct($id, $name, $description, $price, $image, $category);
        
        // Assegnazione dei valori delle nuove proprietà
        $this->type = $type;
        $this->materials = $materials;
    }
}

?>