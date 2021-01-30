<?php 

require_once('AbstractTrainA.php');


class BulletTrainA implements AbstractTrainA
{
    public function someFunction() : string
    {
        return "I'm a BulletTrainA";
    }
}