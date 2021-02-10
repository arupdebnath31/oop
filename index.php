<?php

    //scope resulation..!!

    class Firstclass {
        const EXAMPLE = "YOU CANT CHANGE THIS..";

        public static function test(){
            $testing = "This is a test dunction running";
            return $testing;
        }
    }

    $a =Firstclass::test();
    echo $a;



    class secondclass extends Firstclass {
        public static $staticpro = "a static property";

        public static function anothertest(){
            echo "";
        }
    }
?>