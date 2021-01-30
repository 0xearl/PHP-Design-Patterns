<?php 

interface TrainFactory {

    public function createTrainA() : AbstractTrainA;

    public function createTrainB() : AbstractTrainB;

}