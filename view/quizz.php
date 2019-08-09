<?php
  include_once '../controller/QuestController.php';
  $questcontroller = new QuestController;
  $result = $questcontroller->show_quizz($_GET['id']);
?>
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
        <?php //print_r($result); ?>
        <div class="affiche d-flex text-center justify-content-center column">
            <div>
            <h1><?= $result[0]['titre'] ?></h1>
            <?php
            for($j = 0; $j < sizeof($result) ; $j++){
                if($j == 0) {
                    $tmp = $result[0]['id'];
                    echo '<form class="affiche" action="">';
                    echo '<h2>';
                    echo $result[$j]['question'].'</h2><br>';
                }
                if($result[$j]['id'] != $tmp){
                    $tmp = $result[$j]['id'];
                    echo '<br><h2>';
                    echo $result[$j]['question'].'</h2><br>';
                } else { ?>
                    <label for="answer<?php echo $j ?>"><?= $result[$j]['reponse'] ?></label>
            <input type="radio" name="answer<?php echo $j ?>" value="<?= $result[$j]['valid'] ?>">
            <?php }
            }?>
            
            <button type="submit" name="endqcm">Valider mes réponses</button>
            </form>
            
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