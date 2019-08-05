<?php
  include_once 'controller/QuestController.php';
  $questcontroller = new QuestController;
  $result = $questcontroller->readData();
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>QCM</title>
    <link rel="stylesheet" href="public/css/index.css">
  </head>
  <body>
    <div class="row">
      <a href="">Créer QCM</a>
    </div>
    <div class="row">
      <? include_once 'view/qcm.php'; ?>
    </div>

  </body>
</html>
