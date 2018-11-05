<?php
declare(strict_types=1);

namespace Neighborhoods\BakeryFitnessUseCase41\MV1\Oven\Muffin;

class Batter
{
    public function prepare(): Batter
    {
        return $this;
    }

    public function pour(): Batter
    {
        return $this;
    }
}
