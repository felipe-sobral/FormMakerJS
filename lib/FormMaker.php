<?php

    /*

        JSON

        '{ 
            "id": "formulario",                 
            "components": {
                            "input": {
                                     "shape": "input",
                                     "id": "teste", 
                                     "type": "text", 
                                     "title": "Testando Formulario",
                                     "placeholder": "TESTANDOOOO",
                                     "help": "Campo ajuda"
                                    }
                          }
        }'

    */
    require_once "lib/components/Controller.php";

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

            $arch = $this->form;

            try {
                $this->html = "<form id='{$arch->id}'>";
                $this->html .= $this->produce($arch->components);
                $this->html .= "</form>";
            } catch (Exception $e){
                return false;
            }

        }

        public function print(){
            echo $this->html;
        }

        
    }