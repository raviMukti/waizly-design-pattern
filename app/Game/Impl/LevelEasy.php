<?php

namespace App\Game\Impl;
use App\Game\Level;

class LevelEasy implements Level
{
    public function start()
    {
        echo "Easy level started.".PHP_EOL;
    }
}
