<?php
    include_once 'Connexion.php';
    include_once '../modele/Qcm.php';
    include_once '../modele/Question.php';
    include_once '../modele/Reponse.php';

    class QuestController{

        public function createQcm($formArray){

            $titre = $_POST['titre'];

            $connex = new Connexion();
            $co = $connex->openConnexion();

            $sql = "INSERT INTO qcm(titre) VALUES(:titre)";

            $req = $co->prepare($sql);
            $req->execute(array(
                'titre' => $titre
            ));
            return $id = $co->lastInsertId();
        }

        

        /*public function keepId(){
            $connex = new Connexion();
            $co = $connex->openConnexion();
            return $id = $co->lastInsertId();
        }*/

        public function addQuestion($formArray){

            $question = $_POST['question'];

            $connex = new Connexion();
            $co = $connex->openConnexion();

            $sql = "INSERT INTO question(question) VALUES (:question)";

            $req = $co->prepare($sql);
            $req->execute(array(
                'question' => $question
            ));
            
            $connex->closeConnexion();
        }

        public function addReponse($formArray){

            $connex = new Connexion();
            $co = $connex->openConnexion();

            $rep = $_POST['reponse'];
            $valid = $_POST['valid'];

            $sql = "INSERT INTO reponse(reponse, valid) VALUES (:rep, :val)";

            $req = $co->prepare($sql);
            $req->execute(array(
                'rep' => $rep,
                'val' => $valid
            ));
            
            $connex->closeConnexion();


        }

        public function deleteQuestion($id){

            $connex = new Connexion();
            $co = $connex->openConnexion();

            //recherche id des réponses à supprimer
            $reponses = 'SELECT reponse.id FROM reponse, belong_to WHERE id_question = :id';
            $req = $co->prepare($reponse);
            $req->execute(array(
                'id' => $id
            ));
            $result = $rep->fetchAll(PDO::FETCH_ASSOC);

            //supprime lien entre question et réponse
            $liensql = 'DELETE FROM belong_to WHERE id_question = :id';
            $rep = $co->prepare($liensql);
            $rep->execute(array(
                'id' => $id
            ));

            //supprime lien entre question et qcm
            $lien2sql = 'DELETE FROM have WHERE id = :id';
            $sup = $co->prepare($lien2sql);
            $sup->execute(array(
                'id' => $id
            ));

            //supprime la question
            $sql = 'DELETE FROM question WHERE id = :id';
            $erase = $co->prepare($sql);
            $erase->execute(array(
                'id' => $id
            ));

            foreach($result as $r =>$v){

            $repsql = 'DELETE FROM reponse 
            WHERE id = :id';
            $bye = $co->prepare($repsql);
            $bye->execute(array(
                'id' => $v
            ));

            }

            $connex->closeConnexion();
        }

        


    }
 ?>
