<?php 


class A{
    public $a;
    public function functionName()
    {
        echo $this->a;
    }
}


class B{
    public $a;
    public function functionName()
    {
        echo $this->a;
    }
}

$A = new A();
$B = new B();

var_dump( $A instanceof A);  // true
var_dump( $B instanceof A); // false



?>