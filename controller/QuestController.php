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

            //recherche id des réponses à supprimer
            $reponses = 'SELECT id FROM reponse, belong_to WHERE id_question = :id';
            $co->prepare($reponse);
            $rep = $co->execute(array(
                'id' => $id
            ));
            $result = $rep->fetchAll(PDO::FETCH_ASSOC);
            //supprime lien entre question et réponse
            $liensql = 'DELETE FROM belong_to WHERE id_question = :id';
            $co->prepare($liensql);
            $co->execute(array(
                'id' => $id
            ));
            //supprime lien entre question et qcm
            $lien2sql = 'DELETE FROM have WHERE id = :id';
            $co->prepare($lien2sql);
            $co->execute(array(
                'id' => $id
            ));
            //supprime la question
            $sql = 'DELETE FROM question WHERE id = :id';
            $co->prepare($sql);
            $co->execute(array(
                'id' => $id
            ));

            foreach($result as $r =>$v){

            $repsql = 'DELETE FROM reponse 
            WHERE id = :id';
            $co->prepare($repsql);
            $co->execute(array(
                'id' => $v
            ));

            }

            $connex->closeConnexion();
        }


    }
 ?>
