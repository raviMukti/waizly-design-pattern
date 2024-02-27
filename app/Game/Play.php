<?php

namespace App\Game;

class Play
{
    protected $level;

    protected $arena;

    public function __construct(Level $level, Arena $arena)
    {
        $this->level = $level;
        $this->arena = $arena;
    }

    public function start()
    {
        $this->level->start();
        $this->arena->start();
    }
}
