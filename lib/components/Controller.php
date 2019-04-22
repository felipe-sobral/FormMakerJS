<?php

    require_once "lib/components/Component.php";
    require_once "lib/components/Input.php";

    //$valid_components = ["input", "text-area", "select"];

    class Controller{
        private $valid_components = ["input"];
        private $components;

        public function __construct($components){

            $this->components = $components;

        }

        private function do($shape, $attributes){

            return $shape($attributes);

        }

        private function go(){
            $html = "";

            foreach($this->components as $shape => $attributes){

                if(in_array($shape, $this->valid_components)){
                    $html .= $this->do($shape, $attributes);
                }

            }

            return $html;
        }


        public function html(){

            $result = $this->go();
            return $result;

        }

    }

