<?php 
    require_once "classi/classe.php";

    $movie1 = new Movie("Interstellar","Matthew McConaughey", "2014", "english","Christopher Nolan",);
    $movie2 = new Movie("Inception","Leonardo Di Caprio", "2010", "english","Christopher Nolan",);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center p-5"> My favorite movies</h1>
        <div class="row flex-column g-5">
            <div class="col">
                <?php $movie1->printCard();?>
            </div>
            <div class="col">
                <?php $movie2->printCard();?>
            </div>
        </div>
    </div>
</body>
</html>