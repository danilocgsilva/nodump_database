<?php

declare(strict_types=1);

namespace Danilocgsilva\Nodump;

class Field
{
    public function __construct(
        public readonly string $name, 
        public readonly string $type, 
        public readonly string|int|float|null $value
    ) {}
}