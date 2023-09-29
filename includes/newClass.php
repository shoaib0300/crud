<?php

    class employee{
        public $name;
        public $age;
        public $salary;

        function __construct($name, $age, $salary){
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }
        function info(){
            echo "<h3>This is Employee Details</h3> <br>";
            echo "This is the name ". $this->name . "<br>";
            echo "This is the age ". $this->age . "<br>";
            echo "This is the Salary ". $this->salary . "<br>";
        }

    }
    class Manager extends employee {
        public $ta = 1232;
        public $mobile = 651;

        function info(){
            $tota_salary = $this->salary + $this->ta + $this->mobile;
            echo "<h3>This is Manager Details</h3> <br>";
            echo "This is the name ". $this->name . "<br>";
            echo "This is the age ". $this->age . "<br>";
            echo "This is the Salary ". $tota_salary . "\n";
        }
    }

