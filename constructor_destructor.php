<?php

class student{
    public $name;
    public $color;

    public function __construct($n)
    {
       echo $this->name = $n;
    }
}

new student("shakil"); // auto call when you creat a object

?>

