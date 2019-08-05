<?php
    class Qcm{
        private $questions;
        private $appreciations;

        public function __construct() {
            $this->questions = array();
            $this->appreciations = array();
        }
          
        public function setQuestion($question) {
            $this->questions[] = $question;
            return $this;
        }

        public function setappreciation($appreciation){
            //à comprendre
        }

        
    }
?>