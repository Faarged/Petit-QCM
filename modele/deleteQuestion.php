<?php
    if(isset($_POST["id"])) {
        require_once '../controller/QuestController';
        $controller = new QuestController();

        $result = $controller->delete($_POST['id']);
        header('Location: ../index.php');
    }
?>