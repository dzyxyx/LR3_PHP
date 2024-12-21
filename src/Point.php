<?php

namespace App;

class Point{
    private $x;
    private $y;

    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function moveX($delta){
        $this->x += $delta;
    }

    public function moveY($delta){
        $this->y += $delta;
    }

    public function getCoordinates(){
        return ["x" => $this->x, "y" => $this->y];
    }
}

?>