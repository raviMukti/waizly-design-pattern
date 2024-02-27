<?php

namespace App\Game\Impl;
use App\Game\Arena;

class ArenaHard implements Arena
{
    public function start()
    {
        echo "Hard arena started.".PHP_EOL;
    }
}
