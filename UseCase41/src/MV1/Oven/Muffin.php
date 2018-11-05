<?php
declare(strict_types=1);

namespace Neighborhoods\BakeryFitnessUseCase41\MV1\Oven;

use Neighborhoods\BakeryFitnessUseCase41\MV1\Oven\Muffin\Batter;

class Muffin
{
    public function prepare(): Muffin
    {
        $batter = new Batter();
        $batter->pour();

        return $this;
    }

    public function bake(): Muffin
    {
        return $this;
    }

    public function cool(): Muffin
    {
        return $this;
    }

    public function serve(): Muffin
    {
        return $this;
    }
}
