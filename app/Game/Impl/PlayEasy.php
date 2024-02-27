<?php

namespace App\Game\Impl;
use App\Game\Arena;
use App\Game\Level;
use App\Game\PlayFactory;

class PlayEasy implements PlayFactory
{

    public function createLevel(): Level
    {
        return new LevelEasy();
    }

    public function createArena(): Arena
    {
        return new ArenaEasy();
    }
}
