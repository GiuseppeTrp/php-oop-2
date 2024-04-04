<?php

require './models/Categories.php';
require './models/Products.php';
require './models/FoodProduct.php';
require './models/Accessories.php';
require './models/ToysProduct.php';

// Creazione della categoria "Cani" con la relativa immagine 
$dogCategory = new Category("Cani", "fa-dog");
$catCategory = new Category("Gatti", "fa-cat");


// Creazione del prodotto "GastroIntestinal" con la relativa immagine
$crocchette= new FoodProduct("#01", "GastroIntestinal", "Crocchette per problemi gastro intestinali", "20€", "https://www.clubdelcane.com/wordpress/wp-content/uploads/2012/08/crocchette-clubdelcane.jpg", $dogCategory, "cibo secco", "manzo, cereali e fermenti lattici");

// Creazione del prodotto "Pettorina" con la relativa immagine
$pettorina = new Accessories("#02", "Pettorina", "Pettorina per cani", "15€", "https://m.media-amazon.com/images/I/51eOTU5+qqL.jpg", $dogCategory, "nickel");

// Creazione del prodotto "Pallina" con la relativa immagine
$pallina= new ToysProduct("#03", "Pallina", "Pallina  cani", "5€", "https://shop-cdn-m.mediazs.com/bilder/4/400/55500_pla_hundespielzeug_squeaky_ball_aus_tpr_4.jpg", $dogCategory, "gioco", "gomma");

$ArrayProduct = [
    $crocchette,
    $pettorina,
    $pallina
];

?>