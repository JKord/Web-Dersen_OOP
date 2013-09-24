<?php
require_once __DIR__.'/../autoload.php';

use Body\Brain;
use Body\JimmyNetronBrain;

$brain = new Brain();

echo 'Say: You stupid!<br>';
$brain->getEar()->hearSomething('stupid');

echo '<br>';
echo 'Say: 	Pardon me!. You cool!<br>';
$brain->getEar()->hearSomething('cool');

echo '<br>';
$brain->getEye()->seeSomething('apple');

echo '<br>';
$jNBrain = new JimmyNetronBrain();
$jNBrain->mentalCharge();
