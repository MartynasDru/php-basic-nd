<?php

use Nfq\Academy\Homework\ClassA;
use Nfq\Academy\Homework\Subpackage\ClassB;
use Symfony\Component\Yaml\ClassC;

require_once __DIR__.'/bootstrap.php';

$a = new ClassA("martynas@druteika.com", "Martynas");
$a->getUser();

echo "</br>";

$b = new ClassB(52);
$b->calculateSquare();

echo "</br>";

$c = new ClassC("Autoloading@gmail.com", "Autoloading");
$c->getUser();
