<?php 
require_once('StoveInterface.php');

class GasPoweredStoveProduct implements StoveInterface {

    public function operate() : string 
    {
        return "Gas Powered Stove";
    }

}