<?php 

require_once('AbstractTrainB.php');

class BombardierTrainB implements AbstractTrainB
{
    public function someFunction() : string
    {
        return "I'm A BombardierTrainB";
    }

    public function anotherFunction(AbstractTrainA $collaborator) : string
    {
        return "I'm A BombardierTrainB Collaborating with {$collaborator->someFunction()}";
    }
}