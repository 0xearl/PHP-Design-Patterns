<?php 
require_once('StoveInterface.php');

class ElectricPoweredStoveProduct implements StoveInterface 
{

    public function operate() : string 
    {
        return "Electric Powered Stove";
    }

}