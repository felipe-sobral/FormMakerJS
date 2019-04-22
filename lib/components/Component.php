<?php

    /*
        "input": {
                  "shape": "input",
                  "id": "teste", 
                  "type": "text", 
                  "title": "Testando Formulario",
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
        private $attr;
        private $html;

        function __construct($attributes){
            $this->attr = $attributes;
        }

        function finish(){
            return "<div class='form-group'>".$this->html."</div>";
        }

    }