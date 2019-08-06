<?
    require_once '../controller/QuestController';
    $controller = new QuestController();

    $result = $controller->addQuestion($_POST);
    header('Location: ../index.php');

?>