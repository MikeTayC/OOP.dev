<?php

require('autoloader.php');

$jack = new CanadianPet('Jack');

$jack->restPet()->walkPet()->restPet();

$redDelicious = new Apple;

$jack->eatApple($redDelicious);

echo $jack->getEnergy();

