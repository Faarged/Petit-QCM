<?php

    include_once '../controller/Connexion.php';

    class Qcm{
        private $titre;
        
        public function getAll(){
            $connex = new Connexion();
            $co = $connex->openConnexion();

            $sql = "SELECT * FROM qcm";

            $req = $co->prepare($sql);
            $req->execute();
        }

        public function getId(){

        }
        

        
    }
?>