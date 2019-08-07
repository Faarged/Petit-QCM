<?php
    if(isset($_POST['answer'])){
        include_once '../controller/QuestController.php';
        $questcontroller = new QuestController();
        $result = $questcontroller->addReponse($_POST);
        header('Location: ../view/new_question.php');
    }
?>