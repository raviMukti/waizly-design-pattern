<?php

namespace App\Game\Impl;
use App\Game\Level;

class LevelMedium implements Level
{
    public function start()
    {
        echo "Medium level started.".PHP_EOL;
    }
}
