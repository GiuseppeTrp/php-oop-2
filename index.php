<?php

require './models/categories.php';
require './models/products.php';



// Creazione della categoria con la relativa immagine 
$categoriaCani = new Category("Cani", "https://www.b2x.it/rest/images/2023/11/15/1488336.jpg?imageFormat=@1x");

// Creazione del prodotto con la relativa immagine
$prodotto1 = new Product("#01", "GastroIntestinal", "Crocchette per problemi gastro intestinali", "20€", "https://www.robinsonpetshop.it/news/cms2017/wp-content/uploads/2019/08/crocchette-italiane.png", $categoriaCani);


// Mostra informazioni su prodotti e categorie
var_dump($prodotto1);
var_dump($categoriaCani);

?>