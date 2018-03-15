<?php

namespace Nfq\Academy\Homework\Subpackage;

class ClassB
{
    public $number;
    public function __construct(int $number)
    {
      $this->number = $number;
    }
    public function calculateSquare()
    {
        echo pow($this->number, 2);
    }
}
