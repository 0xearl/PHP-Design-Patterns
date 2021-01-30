<?php 

require_once('TrainFactory.php');

class BulletTrainFactory implements TrainFactory
{

    public function createTrainA() : AbstractTrainA 
    {
        return new BulletTrainA();
    }

    public function createTrainB() : AbstractTrainB
    {
        return new BulletTrainB();
    }

}