<?php 

// Dichiarazione della classe Accessories che estende la classe Product
class accessories extends Product {
    
    // Dichiarazione della proprietà pubblica $material
    public $material;

    // Definizione del costruttore della classe Accessories
    public function __construct($id, $name, $description, $price, $image, $category, $material) {
        
        // Chiamata al costruttore della classe genitore Product
        parent::__construct($id, $name, $description, $price, $image, $category);
        
        // Assegnazione del valore del parametro $material alla proprietà $material dell'istanza corrente
        $this->material = $material;
    }
}

?>
