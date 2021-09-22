<?php 
class fruit {
    public $name;
    public $color;

    public function set_name($name)
    {
      return  $this->name = $name;

    }

}

$banana = new fruit();
echo $banana->set_name("banana");


//param pass // return function // echo function //
?>