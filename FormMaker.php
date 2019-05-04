<?php

    require_once "lib/Controller.php";

    class FormMaker {

        private $form;
        private $html;
        
        public function __construct($json) {
            
            $this->form = json_decode($json);

        }

        private function produce($components){

            $components = New Controller($components);
            return $components->html();
    
        }

        public function make(){

            try {
                $this->html = "<form id='{$this->form->id}'>";
                $this->html .= $this->produce($this->form->components);
                $this->html .= "</form>";
            } catch (Exception $e){
                return false;
            }

            return $this;
        }

        public function print(){
            echo $this->html;
        }

        
    }