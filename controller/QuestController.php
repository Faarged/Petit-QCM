<?php
    include_once 'Connexion.php';
   

    class QuestController{


        public function show_qcm(){

            $connex = new Connexion();
            $co = $connex->openConnexion();

            $sql = "SELECT * FROM qcm";
            $req = $co->prepare($sql);
            $req->execute();
            $show = $req->fetchAll();
            return $show;
        }

        public function show_quizz($id){

            $connex = new Connexion();
            $co = $connex->openConnexion();

            $sql = "
            SELECT * FROM qcm, have, question, belong_to, reponse 
            WHERE qcm.id = have.id_qcm
            AND question.id = have.id
            AND question.id = belong_to.id_question
            AND reponse.id = belong_to.id
            AND qcm.id = :id
            ";
            $req = $co->prepare($sql);
            $req->execute(array(
                'id' => $id
            ));
            $show = $req->fetchAll();
            return $show;
        }

        public function createQcm($formArray){

            $titre = $_POST['titre'];

            $connex = new Connexion();
            $co = $connex->openConnexion();

            $sql = "INSERT INTO qcm(titre) VALUES(:titre)";

            $req = $co->prepare($sql);
            $req->execute(array(
                'titre' => $titre
            ));
            $sql2 = "SELECT * FROM qcm ORDER BY id DESC LIMIT 1";
            $sel = $co->prepare($sql2);
            $sel->execute();
            $q = $sel->fetch();
            return $q['id'];
        }

        


        public function addQuestion($formArray, $id){

            $question = $_POST['question'];
            $connex = new Connexion();
            $co = $connex->openConnexion();

            $sql = "INSERT INTO question(question) VALUES (:question)";

            $req = $co->prepare($sql);
            $req->execute(array(
                'question' => $question
            ));

            $sql2 = "SELECT * FROM question ORDER BY id DESC LIMIT 1";
            $recup = $co->prepare($sql2);
            $recup->execute();
            $idquestion = $recup->fetch();

            $sql3 = "INSERT INTO have(id_qcm, id) VALUES(:idqcm, :idquest)";
            $link = $co->prepare($sql3);
            $link->execute(array(
                'idqcm' => $id,
                'idquest' => $idquestion['id']
            ));

            $sql4 = "SELECT * FROM question ORDER BY id DESC LIMIT 1";
            $sel = $co->prepare($sql4);
            $sel->execute();
            $q = $sel->fetch();
            return $q['id'];
            
            $connex->closeConnexion();
        }

        public function addReponse($formArray, $id){

            $connex = new Connexion();
            $co = $connex->openConnexion();

            $rep = $_POST['reponse'];
            if(empty($_POST['valid'])){
                $valid = 0;
            }else{
                $valid = TRUE;
            }

            $sql = "INSERT INTO reponse(reponse, valid) VALUES (:rep, :val)";

            $req = $co->prepare($sql);
            $req->execute(array(
                'rep' => $rep,
                'val' => $valid
            ));

            $sql2 = "SELECT * FROM reponse ORDER BY id DESC LIMIT 1";
            $recup = $co->prepare($sql2);
            $recup->execute();
            $idreponse = $recup->fetch();

            $sql3 = "INSERT INTO belong_to(id_question, id) VALUES(:idquestion, :id)";
            $link = $co->prepare($sql3);
            $link->execute(array(
                'idquestion' => $id,
                'id' => $idreponse['id']
            ));

            /*$sql4 = "SELECT * FROM reponse ORDER BY id DESC LIMIT 1";
            $sel = $co->prepare($sql4);
            $sel->execute();
            $q = $sel->fetch();
            return $q['id'];*/
            return $id;
            
            $connex->closeConnexion();


        }

        public function delete($id){
            $connex = new Connexion();
            $co = $connex->openConnexion();

            $liensql = "DELETE FROM have WHERE id_qcm = :id";
            $req = $co->prepare($liensql);
            $req->execute(array(
                'id' => $id
            ));

            $sql = "DELETE FROM qcm WHERE id =:id";
            $sup = $co->prepare($sql);
            $sup->execute(array(
                'id' => $id
            ));
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
