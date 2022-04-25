<?php 
    include __DIR__ . "./codephp.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>e-pet store</title>
</head>
<body>
    <h1>
        E-PET STORE
    </h1>

    <div class="prodotto-wrapper">
        <p class="prodotto">
            Prezzo: <?php echo $collare->costo; ?> <br>
            Disponibilitá: <?php echo $collare->disponibilitá; ?> <br>
            Colore: <?php echo $collare->colore; ?> <br>
            Taglia: <?php echo $collare->taglia; ?> <br>
        </p>

        <p class="prodotto">
            Prezzo: <?php echo $guinzaglio->costo; ?> <br>
            Disponibilitá: <?php echo $guinzaglio->disponibilitá; ?> <br>
            Colore: <?php echo $guinzaglio->colore; ?> <br>
            Taglia: <?php echo $guinzaglio->taglia; ?> <br>
        </p>

        <p class="prodotto">
            Prezzo: <?php echo $antipulci->costo; ?> <br>
            Disponibilitá: <?php echo $antipulci->disponibilitá; ?> <br>
            Colore: <?php echo $antipulci->colore; ?> <br>
            Taglia: <?php echo $antipulci->taglia; ?> <br>
        </p>
    </div>

    <?php var_dump($totale) ?>
    
</body>
</html>