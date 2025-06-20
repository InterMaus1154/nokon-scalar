<?php

namespace Nokon\NokonScalarTool;

class NokonString extends ScalarBuilder
{
    protected function __construct(mixed $value)
    {
        parent::__construct($value);
    }

    /*
     * Return the string value
     */
    public function get(): string
    {
        return (string)$this->value;
    }

    public function toUpperCase(): NokonString
    {
        $this->value = strtoupper($this->value);
        return $this;
    }

}