<?php

namespace App\Game\Impl;
use App\Game\Arena;

class ArenaEasy implements Arena
{
    public function start()
    {
        echo "Easy arena started.".PHP_EOL;
    }
}
