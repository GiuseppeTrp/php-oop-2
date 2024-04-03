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
    <style>
   .card-img-top {
    height: 200px;
    object-fit: cover; 
}
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Prodotti</h1>
        <!-- Cards dei Prodotti -->
        <div class="row">
            <?php foreach ($ArrayProduct as $prodotto) { ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="<?php echo $prodotto->image; ?>" class="card-img-top" alt="<?php echo $prodotto->name; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $prodotto->name; ?></h5>
                            <p class="card-text"><?php echo $prodotto->description; ?></p>
                            <p class="card-text"><strong>ID:</strong> <?php echo $prodotto->id; ?></p>

                            <p class="card-text"><strong>Prezzo:</strong> <?php echo $prodotto->price; ?></p>
                            <p class="card-text"><strong>Categoria:</strong> <?php echo $prodotto->category->name; ?></p>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
