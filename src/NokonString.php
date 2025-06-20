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

    /*
     * Makes the string all uppercase
     */
    public function toUpperCase(): NokonString
    {
        $this->value = strtoupper($this->value);
        return $this;
    }

    /*
     * Makes the string all lowercase
     */
    public function toLowerCase(): NokonString
    {
        $this->value = strtolower($this->value);
        return $this;
    }

    /*
     * Left pad string
     */
    public function leftPad(int $length, string $padString): NokonString
    {
        $this->value = str_pad($this->value, $length, $padString, STR_PAD_LEFT);
        return $this;
    }



}