<?php

namespace Nfq\Academy\Homework;

class ClassA
{
    public $email;
    public $name;

    public function __construct(string $email, string $name)
    {
      $this->email = $email;
      $this->name = $name;
    }
    public function getUser()
    {
        echo "Welcome " . $this->name . " Your email: " . $this->email;
    }
}
