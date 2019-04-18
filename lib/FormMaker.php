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


    // CONTINUAR AQUI
    class Input {
        private $html;

        private function label($text){

        }

        function __construct($input){
            
            $html = "<div class='form-group'>
                        <label for='{$input->id}'>Email address</label>
                        <input type='{$input->type}' class='form-control' id='{$input->id}' aria-describedby='emailHelp' placeholder='Enter email'>
                        <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
                    </div>";

        }
    }

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
                $input = New Input($obj);
                return $input->produce();

            } catch(Exception $e){
                return false;
            }
            
        }

        public function make(){

            $arch = $this->obj;

            $this->html .= "<form id='{$this->id}'>";

            foreach($arch->components as $component){
                $this->html .= $this->produce($component);
            }

            $this->html .= "</form>";

        }

        public function print(){
            echo $this->html;
        }

        
    }