<?php

    class Component {
        static private $attr;

        static private function input(){
            $html = "<div class='form-group'> <input ";

            foreach(self::$attr as $attribute => $value){
                $html .= " $attribute='$value' ";
            }
            
            return $html."> </div>";
        }

        static function html($id, $attributes){
            $attributes->id = $id;
            
            $shape = $attributes->shape;
            unset($attributes->shape);
            self::$attr = $attributes;

            return self::$shape();

        }

    }