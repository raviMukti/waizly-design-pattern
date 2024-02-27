<?php

namespace App\Game;

class Play
{
    protected $level;

    protected $arena;

    public function __construct(PlayFactory $playFactory)
    {
        $this->level = $playFactory->createLevel();
        $this->arena = $playFactory->createArena();
    }

    public function start()
    {
        $this->level->start();
        $this->arena->start();
    }
}
