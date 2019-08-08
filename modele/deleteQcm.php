<?php
        include_once '../controller/QuestController.php';
        $controller = new QuestController();

        $result = $controller->delete($_GET['id']);
        header('Location: ../index.php');
?>