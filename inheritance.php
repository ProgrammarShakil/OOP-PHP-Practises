<?php 
class parents{
    public $name;
    public $name2;
    public $color;

    public function it_will_be_inherit($name)
    {
     return  $this->name = $name;
    }
}

class son extends parents{
    // public function inherited($name){
    //     return $this->name2=$name;
    // }
    
}

$parents = new son();
echo $parents->it_will_be_inherit("baba_ma"); // inherited properties + method
// echo $parents->inherited("baba_ma");  // inherited just properties



?>