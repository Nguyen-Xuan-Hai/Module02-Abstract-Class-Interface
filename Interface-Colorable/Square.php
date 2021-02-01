<?php
include_once "Rectangle.php";
include_once "interfaceColorable.php";
class Square extends Rectangle implements Colorable
{
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }

    public function howToColor()
    {
        // TODO: Implement howToColor() method.
        return "Color all four sides...";
    }

}