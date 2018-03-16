<?php

use Nfq\Academy\Homework\ClassA;
use Nfq\Academy\Homework\Subpackage\ClassB;
use Symfony\Component\Yaml\ClassC;

require_once __DIR__.'/bootstrap.php';

$a = new ClassA;
$a->login("Martynas", "abc123");
$a->getUser();

echo "</br>";

$b = new ClassB();
$b->setUserStatus("Verified User");
$b->getUserStatus();

echo "</br>";

$c = new ClassC();
$c->addPoints(55)
  ->addPoints(6)
  ->usePoints(88)
  ->usePoints(12)
  ->usePoints(22)
  ->getPointsBalance()
  ->usePoints(23);
