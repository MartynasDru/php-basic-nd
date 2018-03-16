<?php

namespace Nfq\Academy\Homework\Subpackage;

class ClassB
{
    private $userStatus;

    public function setUserStatus(string $userStatus)
    {
      $this->userStatus = $userStatus;
    }
    public function getUserStatus()
    {
        echo "You`re " . $this->userStatus;
    }
}
