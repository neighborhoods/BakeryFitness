<?php
declare(strict_types=1);

namespace Neighborhoods\BakeryFitnessUseCase41\MV1\Oven;

use Neighborhoods\BakeryFitnessUseCase41\MV1\Oven\Scone\Dough;

class Scone
{
    public function prepare(): Scone
    {
        $dough = new Dough();
        $dough->knead();
        $dough->rollOut();
        $dough->cut();

        return $this;
    }

    public function bake(): Scone
    {
        return $this;
    }

    public function cool(): Scone
    {
        return $this;
    }

    public function serve(): Scone
    {
        return $this;
    }
}
