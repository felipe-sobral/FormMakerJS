<?php

    /*
        "input": {
                    "shape": "input",
                    "id": "teste", 
                    "type": "text", 
                    "label": "Testando Formulario",
                    "placeholder": "TESTANDOOOO",
                    "help": "Campo ajuda"
                }

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
    */

    class Component {
        private $comp;

        function __construct($component){

            $this->comp = $component;

        }

        private function properties($type){

            switch($type){
                case "text":
                    return ["placeholder", "id", "style", "value", "type"];

                case "number":
                    return ["placeholder", "id", "style", "value", "min", "max", "type"];

                default:
                    echo "$type não existe!";
                    return;
            }

        }

        private function label(){
            return "<label for='{$this->comp->id}'>{$this->comp->label}</label>";
        }

        private function input(){
            $properties = $this->properties($this->comp->type);

            $html = "<input class='form-control'";

            foreach($this->comp as $property => $value){
                if(in_array($property, $properties)){
                    $html .= " $property='$value' ";
                }
            }

            return $html.">";
        }

        private function shape(){
            
            switch($this->comp->shape){

                case "input":
                    return $this->input();

                default:
                    echo "Shape não suportado";
                    return;

            }

        }

        private function help(){
            return "<small class='form-text text-muted'>{$this->comp->label}</small>";
        }

        
        public function html(){

            $html = "<div class='form-group'>";

            $html .= $this->label();
            $html .= $this->shape();
            $html .= $this->help();

            return $html."</div>";

        }


    }