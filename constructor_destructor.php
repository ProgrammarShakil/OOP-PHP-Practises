<?php

class student{
    public $name;
    public $color;

    public function __construct($n)
    {
       echo $this->name = $n;
    }
    public function __destruct()
     // when all funtion will be execute in this file then __destruct will be auto executed
     // if we need to auto close anything when all work has been done...we can use destruct...
     // as like we need to close connection , when we done all works...
    {
       echo " All Work has been done {$this->name}";
   

    }
}

new student("shakil"); // auto call when you creat a object

?>

