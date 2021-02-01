<?php
include "Circle.php";
include "Comparable.php";
class ComparableCircle extends Circle implements Comparable{
    public function __construct($name, $radius)
    {
        parent::__construct($name, $radius);
    }
    public function compareTo($circleTwo)
    {
        $circleTwoRadius = $circleTwo->getRadius();
        if ($this->getRadius() > $circleTwoRadius){
            return 1;
        }elseif ($this->getRadius() < $circleTwoRadius){
            return -1;
        }else{
            return 0;
        }


        // TODO: Implement compareTo() method.
    }
}