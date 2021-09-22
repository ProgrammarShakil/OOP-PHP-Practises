<?php 

class fruit{

    public $name;
    public $color;

    public function this()
    {
        return $this->name ;
    }
}


class machine{

    public $name;
    public $color;

    public function this()
    {
        return $this->name ;
    }
}



$banana = new fruit();
$banana->name="benana";
echo $banana->this();

echo "<br/>";

$engine = new machine();
$engine->name="engine";
echo $engine->this();


// this for current class objects
// only available inside methods

?>