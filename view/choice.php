<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix ajout ou fin qcm</title>
    <link rel="stylesheet" href="../public/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
    crossorigin="anonymous">
  </head>
  <body class="d-flex w-100 justify-content-center text-center">
    <div class="container-fluid d-flex flex-wrap col-12 column justify-content-center">
      <div class="row w-100 d-flex">
      <h1 class="col-12">Choisir si le qcm est finit ou non</h1>
      </div>
      <div class="affiche col-12 w-100 d-flex flex-column">
        <div class="row mr-1 ml-1 justify-content-center affiche">
          <a href="new_question.php?id=<?= $_GET['idqcm'] ?>">Ajouter une nouvelle question</a>
        </div>
        <div class="row mr-1 ml-1 justify-content-center affiche">
          <a href="new_answer.php?id=<?php echo $_GET['idquestion']; ?>">Ajouter une nouvelle réponse</a>
        </div>
        <div class=" mr-1 ml-1 p-2 justify-content-center affiche">
          <a href="../index.php"><button> Finir le questionnaire</button></a>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
    crossorigin="anonymous"></script>
  </body>
</html>