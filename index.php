<?php
require_once "movies.php";
require_once "genere.php";
require_once "actor.php";

// Creazione di un oggetto Genere
$genere1 = new Genere("Fantascienza");
$movie1 = new Movie("Il Signore degli Anelli", "Peter Jackson", $genere1);
$movie1->setReleaseYear("2001");

// Creazione e aggiunta degli attori
$actor1 = new Actor("Elijah Wood");
$actor2 = new Actor("Ian McKellen");

$movie1->addActor($actor1);
$movie1->addActor($actor2);



// Creazione di un oggetto Genere
$genere2 = new Genere("Azione");
$movie2 = new Movie("Io vi troverò", "Pierre Morel", $genere2);
$movie2->setReleaseYear("2008");

// Creazione e aggiunta degli attori
$actor3 = new Actor("Liam Neeson");
$actor4 = new Actor("Maggie Grace");

$movie2->addActor($actor3);
$movie2->addActor($actor4);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- film 1 -->
    <div class="container mt-3" style=" display: flex; align-content: center; justify-content: center;">
        <div class="card me-5" style="width: 18rem;border: 1px solid black;">
            <img src="signore degli anelli.jpg" class="card-img-top w-2" alt="" style="width: 100%;">
            <div class="card-body ">
                <h2 class="card-title text-center"> <?php echo $movie1->getTitle() ?></h2>
                <div class="d-flex justify-content-between">
                    <span class="card-text">Diretto da:</span>
                    <p class="card-text mt-0" style="margin-top: 0;"><?php echo $movie1->getDirect() ?></p>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span class="card-text">Categoria</span>
                    <p class="card-text mt-0" style="margin-top: 0;"><?php echo $movie1->getGener() . " " . "del" . " " . $movie1->getRelease() ?></p>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span class="card-text">Cast:</span>
                    <div>
                        <p class="card-text mt-0" style="margin-top: 0; margin-bottom: 0;"><?php echo $actor1 ?></p>
                        <p class="card-text mt-0" style="margin-top: 0;"><?php echo $actor2 ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- film 2 -->
        <div class="card" style="width: 18rem;border: 1px solid black;">
            <img src="Io vi trovero.jpg" class="card-img-top w-2" alt="" style="width: 100%; height: 24rem;">
            <div class="card-body">
                <h2 class="card-title text-center mb-5"> <?php echo $movie2->getTitle() ?></h2>
                <div class="d-flex justify-content-between">
                    <span class="card-text">Diretto da:</span>
                    <p class="card-text mt-0" style="margin-top: 0;"><?php echo $movie2->getDirect() ?></p>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span class="card-text">Categoria</span>
                    <p class="card-text mt-0" style="margin-top: 0;"><?php echo $movie2->getGener() . " " . "del" . " " . $movie2->getRelease()  ?></p>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <span class="card-text">Cast:</span>
                    <div>
                        <p class="card-text mt-0" style="margin-top: 0; margin-bottom: 0;"><?php echo $actor3 ?></p>
                        <p class="card-text mt-0" style="margin-top: 0;"><?php echo $actor4 ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>