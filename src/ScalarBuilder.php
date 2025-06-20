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

    /**
     * Creates a new instance of the caller
     * @param mixed $value
     * @return static
     */
    public static function build(mixed $value): static
    {
        return new static($value);
    }

    /**
     * Return the value of the instance
     * @return mixed
     */
    public function value(): mixed
    {
        return $this->value;
    }

    /**
     * Converts the instance's value to a string
     * @return string
     */
    public function toString(): string
    {
        return (string)$this->value;
    }

    /**
     * Convert's the instance's value to a string and returns a NokonString instance
     * @return NokonString
     */
    public function toNokonString(): NokonString
    {
        return NokonString::build((string)$this->value);
    }

}