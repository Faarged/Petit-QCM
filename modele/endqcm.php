<?php
    if(isset($_POST['endqcm'])){
        include_once '../controller/QuestController.php';
        $questcontroller = new QuestController();
        $result = $questcontroller->point_count($_POST);
        header('Location: ../view/result_page.php?resultat='.$result);
    }

?>