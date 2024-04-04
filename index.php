<?php
    // Includi il file db.php
    require './database.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
   
   <style>
     .card .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center">
            Shop Prodotti
        </h1>

        <div class="row row-cols-2 row-gap-4">

            <?php
            foreach ($ArrayProduct as $prodotto) {
                ?>
                <div class="col">
                    <div class="card">
                        <img src="<?= $prodotto->image ?>" class="card-img-top" alt="<?= $prodotto->name ?>">
                        <div class="card-body">
                            <h5 class="card-title d-flex justify-content-between text-secondary">
                                <span><?= $prodotto->name ?></span>
                                <span><i class="fa-solid <?= $prodotto->category->icon ?>"></i></span>
                            </h5>
                            <p class="card-text"><?= $prodotto->description ?></p>
                            <p class="card-text"><strong>ID:</strong> <?= $prodotto->id ?></p>
                            <p class="card-text"><strong>Prezzo:</strong> <?= $prodotto->price ?></p>
                            <p class="card-text"><strong>Categoria:</strong> <?= $prodotto->category->name ?></p>

                            <div class="details">
                                <ul class="list-unstyled">
                                    <?php

                                    // controlliamo di che tipo sia il prodotto
                                    if ($prodotto instanceof Accessories) {
                                        echo '<li> <strong>Materiale:</strong> ' . $prodotto->materials . '</li>';

                                    } else if ($prodotto instanceof ToysProduct) {

                                        echo '<li><strong>Materiale:</strong>  ' . $prodotto->materials . '</li>';

                                    } else if ($prodotto instanceof FoodProduct) {

                                        echo '<li><strong>Ingredienti</strong> ' . $prodotto->ingredients . '</li>';

                                    }


                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }

        ?>


        </div>
    </div>
</body>

</html>
