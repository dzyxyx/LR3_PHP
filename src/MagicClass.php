<?php

namespace App;

class MagicClass {
    public function __construct(){
        echo "__construct был вызван\n";
    }


    public function __destruct(){
        echo "__destruct был вызван\n";
    }


    public function __call($name, $arguments)
    {
        echo "__call был вызван для метода '{$name}' с аргументами: " . implode(", ", $arguments). "\n";
    }


    public function __get($name){
        echo "__get был вызван для свойства '{$name}'\n";
    }


    public function __set($name, $value){
        echo "__set был вызван для свойства '{$name}' со значением '{$value}'\n";
    }


    public function __isset($name){
        echo "__isset был вызван для свойства '{$name}'\n";
        return false;
    }


    public function __unset($name){
        echo "__unset был вызван для свойства '{$name}'\n";
    }


    public function __toString(){
        return "__toString был вызван\n";
    }


    public function __invoke(){
        echo "__invoke был вызван\n";
    }


    public static function __callStatic($name, $arguments){
        echo "__callStatic был вызван для метода '{$name}' с аргументами: " . implode(", ", $arguments) . "\n";
    }

}

?>