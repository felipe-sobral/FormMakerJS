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
    require_once "lib/component.php";

    class FormMaker {

        private $id;
        private $obj;
        private $html = "";

        function __construct($json) {
            
            $this->obj = json_decode($json);
            $this->id = $this->obj->id;

        }

        private function produce($obj){

            try{

                $obj->id = $this->id."-".$obj->id;
                $cp = New Component($obj);
                return $cp->html();

            } catch(Exception $e){
                return false;
            }
            
        }

        public function make(){

            $arch = $this->obj;

            $this->html = "<form id='{$this->id}'>";

            foreach($arch->components as $component){
                $this->html .= $this->produce($component);
            }

            $this->html .= "</form>";

        }

        public function print(){
            echo $this->html;
        }

        
    }