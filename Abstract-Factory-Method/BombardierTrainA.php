<?php 

require_once('AbstractTrainA.php');

class BombardierTrainA implements AbstractTrainA
{
    public function someFunction() : string
    {
        return "I'm a BombardierTrainA";
    }
}