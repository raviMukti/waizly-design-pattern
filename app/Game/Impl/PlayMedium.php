<?php

namespace App\Game\Impl;
use App\Game\Arena;
use App\Game\Level;
use App\Game\PlayFactory;

class PlayMedium implements PlayFactory
{

    public function createLevel(): Level
    {
        return new LevelMedium();
    }

    public function createArena(): Arena
    {
        return new ArenaMedium();
    }
}
