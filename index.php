<?php 
require_once __DIR__ . '/Model/Movie.php';

$lotr_1 = new Movie('Il Signore degli Anelli - La Compagnia dell\'Anello', 'fantasy', 'Peter Jackson', 4.4, 2001);
$lotr_2 = new Movie('Il Signore degli Anelli - Le due torri', 'fantasy', 'Peter Jackson', 4.2, 2002);
$lotr_3 = new Movie('Il Signore degli Anelli - Il ritorno del re', 'fantasy', 'Peter Jackson', 4.1, 2003);

// var_dump($lotr_1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="container my-3 ">
    <h1 class="mb-5 text-center ">Movies</h1>

    <div class="row row-cols-3">
  
      <div class="col mb-3 ">

        <div class="card fellowship" style="width: 18rem;">
          
          <div class="card-body">
            <h3 class="card-title mb-3 ">
              <?php echo $lotr_1->getInfoNome()  ?>
            </h3>
            <p class="card-text">
              Genere:
              <?php echo $lotr_1->getInfoGenere()  ?>
            </p>
            <p class="card-text">
              Regista:
              <?php echo $lotr_1->getInfoRegista()  ?>
            </p>
            <p class="card-text">
              Voto:
              <?php echo $lotr_1->getInfoVoto()  ?>
            </p>
            <p class="card-text">
              Anno di uscita:
              <?php echo $lotr_1->getInfoAnno()  ?>
            </p>
            
          </div>
        </div>
      </div>

      <div class="col mb-3 ">

        <div class="card towers" style="width: 18rem;">
          
          <div class="card-body">
            <h3 class="card-title mb-3 ">
              <?php echo $lotr_2->getInfoNome()  ?>
            </h3>
            <p class="card-text">
              Genere:
              <?php echo $lotr_2->getInfoGenere()  ?>
            </p>
            <p class="card-text">
              Regista:
              <?php echo $lotr_2->getInfoRegista()  ?>
            </p>
            <p class="card-text">
              Voto:
              <?php echo $lotr_2->getInfoVoto()  ?>
            </p>
            <p class="card-text">
              Anno di uscita:
              <?php echo $lotr_2->getInfoAnno()  ?>
            </p>
            
          </div>
        </div>
      </div>

      <div class="col mb-3 ">

        <div class="card king" style="width: 18rem;">
          
          <div class="card-body">
            <h3 class="card-title mb-3 ">
              <?php echo $lotr_3->getInfoNome()  ?>
            </h3>
            <p class="card-text">
              Genere:
              <?php echo $lotr_3->getInfoGenere()  ?>
            </p>
            <p class="card-text">
              Regista:
              <?php echo $lotr_3->getInfoRegista()  ?>
            </p>
            <p class="card-text">
              Voto:
              <?php echo $lotr_3->getInfoVoto()  ?>
            </p>
            <p class="card-text">
              Anno di uscita:
              <?php echo $lotr_3->getInfoAnno()  ?>
            </p>
            
          </div>
        </div>
      </div>

      

      

    </div>
  </div>
</body>
</html>