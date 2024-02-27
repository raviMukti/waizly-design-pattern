<?php

namespace App\Game;

interface PlayFactory
{
    public function createLevel(): Level;

    public function createArena(): Arena;
}
