<?php

namespace Symfony\Component\Yaml;

class ClassC
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
        echo "Welcome " . $this->name . " Your email in Class C: " . $this->email;
    }
}
