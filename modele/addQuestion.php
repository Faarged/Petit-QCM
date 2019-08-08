<?php
    if(isset($_POST['add'])){
        include_once '../controller/QuestController.php';
        $questcontroller = new QuestController();
        $result = $questcontroller->addQuestion($_POST, $_GET['id']);
        header('Location: ../view/new_answer.php?id='.$result);
    }
?>