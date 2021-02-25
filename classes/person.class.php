<?php
class Person
{
    public $name;
    public $age;
    public function __construct($name, $age)

    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getname()
    {
        return $this->name;
    }

    public function  getage()
    {
        return $this->age;
    }
}
