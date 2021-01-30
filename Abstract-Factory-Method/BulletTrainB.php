<?php 

require_once('AbstractTrainB.php');

class BulletTrainB implements AbstractTrainB 
{
    public function someFunction() : string 
    {
        return "I'm a BulletTrainB";
    }

    public function anotherFunction(AbstractTrainA $collaborator) : string
    {
        return "I'm A BulletTrainB collaborating with {$collaborator->someFunction()}";
    }

}