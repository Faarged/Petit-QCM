<?php
    if(isset($_POST['answer'])){
        include_once '../controller/QuestController.php';
        $questcontroller = new QuestController();
        $result = $questcontroller->addReponse($_POST, $_GET['id']);
        header('Location: ../view/choice.php?idquestion='.$result);
    }
?>