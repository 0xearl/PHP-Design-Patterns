<?php 

require_once('TrainFactory.php');

class BombardierTrainFactory implements TrainFactory 
{
    
    public function createTrainA() : AbstractTrainA
    {
        return new BombardierTrainA();
    }

    public function createTrainB() : AbstractTrainB
    {
        return new BombardierTrainb();
    }

}