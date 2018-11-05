<?php
declare(strict_types=1);

namespace Neighborhoods\BakeryFitnessUseCase41\MV1\Oven;

use Neighborhoods\BakeryFitnessUseCase41\MV1\Oven\Pie\Dough;
use Neighborhoods\BakeryFitnessUseCase41\MV1\Oven\Pie\Filling;

class Pie
{
    public function prepare(): Pie
    {
        $dough = new Dough();
        $dough->knead();
        $dough->rollOut();

        $filling = new Filling();
        $filling->pour();

        return $this;
    }

    public function bake(): Pie
    {
        return $this;
    }

    public function cool(): Pie
    {
        return $this;
    }

    public function slice(): Pie
    {
        return $this;
    }

    public function serve()
    {
        return $this;
    }
}
