<?php

namespace Symfony\Component\Yaml;

class ClassC
{
    private $points;

    public function addPoints(int $points)
    {
      $this->points += $points;
      return $this;
    }

    public function usePoints(int $points)
    {
      $this->points -= $points;
      return $this;
    }

    public function getPointsBalance()
    {
        echo "Current amount of points you have: " . $this->points;
        return $this;
    }
}
