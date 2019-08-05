<?php
    require_once 'Connexion.php';

    class QuestController{

        

        public function addQuestion($formArray){

            $question = $_POST['question'];

            $connex = new Connexion();
            $co = $connex->openConnexion();

            $sql = "INSERT INTO question(question) VALUES (:question)";

            $co->prepare($sql);
            $co->execute(array(
                'question' => $question
            ));
            
            $connex->closeConnexion();
        }

        public function deleteQuestion($id){

            $connex = new Connexion();
            $co = $connex->openConnexion();

            $sql = 'DELETE FROM qcm WHERE id = :id'
            $co->prepare($sql);
            $co->execute(array(
                'id' => $id
            ));

            $connex->closeConnexion();
        }


    }
 ?>
