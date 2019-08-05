<?php
    class Question{
        private $question;
        private $reponses;
        private $explication;

        public function __construct() {
            $this->questions = array();
            $this->appreciation = array();
        }
          
        public function setQuestion($question) {
           $this->questions[] = $question;
           return $this;
        }

        public function setReponse($reponse){
            $this->reponses[] = $reponse;
            return $this;
        }

        public function setExplications($explication){
            $this->explication = $explication;
            return $this;
        }

        public function getQuestion(){
            return $this->question;
        }

        public function getReponses(){
            return $this->reponses;
        }

        public function getExplication(){
            return $this->explication;
        }
    }
?>