<?php
class House
{
    public $town;
    public $street;

    public function __construct($town, $street)
    {
        $this->town = $town;
        $this->street = $street;
    }

    public function getAddress()
    {
        return  $this->town;
        $this->street;
    }
}
