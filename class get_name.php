<?php 

class fruit{

   public $name;
   public $color;

   public function get_name()
   {
     return  $this->name;
   }

}

$banana = new fruit();
$banana->name= "banana";
echo $banana->get_name();

?>
//no param pass// return function // echo function// 