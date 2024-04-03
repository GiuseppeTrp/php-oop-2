<?php

// Dichiarazione della classe FoodProduct che estende Product
class FoodProduct extends Product
{
    // Dichiarazione della proprietà pubblica $type
    public $type;

    // Dichiarazione della proprietà pubblica $ingredients
    public $ingredients;

    // Definizione del costruttore della classe FoodProduct
    public function __construct($id, $name, $description, $price, $image, $category, $type, $ingredients)
    {
        // Chiamata al costruttore della classe genitore Product
        parent::__construct($id, $name, $description, $price, $image, $category);

        // Assegnazione del valore del parametro $type alla proprietà $type dell'istanza corrente
        $this->type = $type;

        // Assegnazione del valore del parametro $ingredients alla proprietà $ingredients dell'istanza corrente
        $this->ingredients = $ingredients;
    }
}

?>
