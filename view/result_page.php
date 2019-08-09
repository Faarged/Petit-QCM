<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quizz n°<?php echo $_GET['id']; ?></title>
        <link rel="stylesheet" href="../public/css/index.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
    </head>
    <body>
    <div class="affiche p-3">
        <h1>Résultat du QCM</h1>
        <h2>Votre score est de <?= $_GET['resultat']; ?></h2>
    </div>
    <div class="affiche p-2">
        <a href="../index.php">Retour au choix du questionnaire</a>
    </div>
        
    </body>
</html