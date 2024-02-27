<?php

namespace App\Game\Impl;
use App\Game\Level;

class LevelHard implements Level
{
    public function start()
    {
        echo "Hard level started.".PHP_EOL;
    }
}
