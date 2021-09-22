<?php 
class parents{
    public $name;
    public $name2;
    public $age;

    public function it_will_be_inherit($name,$age)
    {
     echo  $this->name = $name;
     echo  $this->age = $age;
    }
}

class son extends parents{
    // public function inherited($name){
    //     return $this->name2=$name;
    // }
    public $plus;
    public function it_will_be_inherited($name,$age,$plus)
    
    {
     echo  $this->name = $name;
     echo  $this->age = $age;
     echo  $this->plus = $plus;
    }
    
}

   $parents = new parents();
   $parents->it_will_be_inherit("baba_ma"," 35");  // inherited properties + method
   $son = new son();
   $son->it_will_be_inherited(" son"," 45",30);     // inherited properties + method

// echo $parents->inherited("baba_ma");                       // inherited just properties





?>