<?php

    require_once "Component.php";

    class Controller{
        private $components;

        public function __construct($components){
            $this->components = $components;
        }

        private function go(){
            $html = "";

            foreach($this->components as $id => $attributes){

                $html .= Component::html($id, $attributes);
                
            }

            return $html;
        }


        public function html(){
            $result = $this->go();
            return $result;
        }

    }

