<?php 

interface AbstractTrainB 
{
    public function someFunction() : string;

    public function anotherFunction(AbstractTrainA $collaborator) : string;

}