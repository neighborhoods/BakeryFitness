<?php
declare(strict_types=1);

namespace Neighborhoods\BakeryFitnessUseCase41\MV1\Oven\Pie;

class Filling
{
    protected $fillingOptions = [
        'apple',
        'blueberry',
        'cherry',
        'pumpkin',
        'pecan'
    ];

    public function prepare(): Filling
    {
        return $this;
    }

    public function pour(): Filling
    {
        return $this;
    }
}
