<?php 
class Teacher{
    public $name;
    public $salary;

    public function __construct($n,$s)
    {
        $this->name = $n;
        $this->salary = $s;
    }

    public function info()
    {
       echo $this->name;
       echo $this->salary;
    }
}

class Headmaster extends Teacher{
    public $extra = 10000;

    public function info()
    {
            $this->extra += $this->salary;
       echo $this->name;
       echo $this->extra;
    }
}

$teacher = new Teacher("rohim "," 20000");
$teacher->info();
$headmaster = new Headmaster(" kuddus "," 20000");
$headmaster->info();


?>