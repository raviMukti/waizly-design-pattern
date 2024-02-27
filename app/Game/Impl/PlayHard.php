<?php

namespace App\Game\Impl;
use App\Game\Arena;
use App\Game\Level;
use App\Game\PlayFactory;

class PlayHard implements PlayFactory
{

    public function createLevel(): Level
    {
        return new LevelHard();
    }

    public function createArena(): Arena
    {
        return new ArenaHard();
    }
}
