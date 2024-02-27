<?php

namespace App\Game\Impl;
use App\Game\Arena;

class ArenaMedium implements Arena
{
    public function start()
    {
        echo "Medium arena started.".PHP_EOL;
    }
}
