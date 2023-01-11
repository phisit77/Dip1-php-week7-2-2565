<?php
    class Person{
        public $name = "Elon Mask", $age = 50; //property

        function __construct($n, $a)
        {
            $this->name = $n;
            $this->age = $a;
        }
        function show(){
            print ($this->name . $this->age);
        }
    }

    $obj1 = new Person("Nam Sukanya",19);
    // $obj1->name = "Nam Sukanya </br>";
    // $obj1->age = 19;
    $obj1->show();
?>