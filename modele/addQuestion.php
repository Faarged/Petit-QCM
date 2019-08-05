<?
    require_once '../controller/QuestController';
    $controller = new QuestController();

    $request = $controller->add($_POST);
    header('Location: ../index.php');

?>