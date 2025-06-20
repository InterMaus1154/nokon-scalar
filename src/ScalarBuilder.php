<?php

namespace Nokon\NokonScalarTool;

use InvalidArgumentException;

abstract class ScalarBuilder
{
    public function __construct(protected mixed $value)
    {
        if(!is_scalar($value)){
            throw new InvalidArgumentException("Scalar value required. Provided: ". gettype($value));
        }
    }

    public static function build(mixed $value): static
    {
        return new static($value);
    }

    public function value(): mixed
    {
        return $this->value;
    }
}