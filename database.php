<?php

require './models/categories.php';
require './models/products.php';
require './models/foodProduct.php';
require './models/accessories.php';
require './models/toysProduct.php';

// Creazione della categoria "Cani" con la relativa immagine 
$categoriaCani = new Category("Cani", "https://www.b2x.it/rest/images/2023/11/15/1488336.jpg?imageFormat=@1x");

// Creazione del prodotto "GastroIntestinal" con la relativa immagine
$prodotto1 = new FoodProduct("#01", "GastroIntestinal", "Crocchette per problemi gastro intestinali", "20€", "https://www.clubdelcane.com/wordpress/wp-content/uploads/2012/08/crocchette-clubdelcane.jpg", $categoriaCani, "cibo secco", "manzo, cereali e fermenti lattici");

// Creazione del prodotto "Pettorina" con la relativa immagine
$prodotto2 = new Accessories("#02", "Pettorina", "Pettorina per cani", "15€", "https://m.media-amazon.com/images/I/51eOTU5+qqL.jpg", $categoriaCani, "nickel");

// Creazione del prodotto "Pallina" con la relativa immagine
$prodotto3 = new ToysProduct("#03", "Pallina", "Pallina  cani", "5€", "https://shop-cdn-m.mediazs.com/bilder/4/400/55500_pla_hundespielzeug_squeaky_ball_aus_tpr_4.jpg", $categoriaCani, "gioco", "gomma");

$ArrayProduct = [
    $prodotto1,
    $prodotto2,
    $prodotto3
];

?>