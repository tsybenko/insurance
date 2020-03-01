<?php

namespace Insurance;

use Insurance\Strategies\Touring;

class Travel extends Product
{
    protected function getPackages(): array
    {
        return [
            'touring' => Touring::class
        ];
    }
}