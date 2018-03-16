<?php

namespace Nfq\Academy\Homework;

class ClassA
{
    private $username;
    private $name;

    public function login(string $username, string $password)
    {
      $this->username = $username;
      $this->password = $password;
    }
    public function getUser()
    {
        echo "Welcome " . $this->username;
    }
}
