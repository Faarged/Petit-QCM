<?php
    if(isset($_POST['create'])){
        include_once '../controller/QuestController.php';
        $questcontroller = new QuestController();
        $result = $questcontroller->createQcm($_POST);

        header('Location: ../view/new_question.php?id='.$result);
    }
?>