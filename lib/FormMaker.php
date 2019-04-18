<?php

    /*

        JSON

        '{ 
            "id": "formulario",
            "framework": "bootstrap",
            "input": {
                        "id": "teste", 
                        "type": "text", 
                        "title": "Testando Formulario"
                     }
                     
            "components": {
                            "input": {
                                        "id": "teste", 
                                        "type": "text", 
                                        "title": "Testando Formulario"
                                    }
                          }
        }'

    */

    class FormMaker {

        private $obj;

        function __construct($json) {
            
            $this->obj = json_decode($json);

        }

        function make(){

            $arch = $this->obj;
            $fm;

        }

        
    }