<?php

namespace Nokon\NokonScalarTool;

class NokonString extends ScalarBuilder
{
    protected function __construct(mixed $value)
    {
        parent::__construct($value);
    }

    /**
     * Returns the value of the instance
     * @return string current value
     */
    public function get(): string
    {
        return (string)$this->value;
    }

    /**
     * Makes the string all upper case
     * @return $this current instance
     */
    public function toUpperCase(): NokonString
    {
        $this->value = strtoupper($this->value);
        return $this;
    }

    /**
     * Makes the string all lower case
     * @return $this current instance
     */
    public function toLowerCase(): NokonString
    {
        $this->value = strtolower($this->value);
        return $this;
    }

    /**
     * Left pad string
     * @param int $length desired length of the string
     * @param string $padString filling string
     * @return $this current instance
     */
    public function leftPad(int $length, string $padString): NokonString
    {
        $this->value = str_pad($this->value, $length, $padString, STR_PAD_LEFT);
        return $this;
    }

    /**
     * Right pad string
     * @param int $length desired length of the string
     * @param string $padString filling string
     * @return $this current string
     */
    public function rightPad(int $length, string $padString): NokonString
    {
        $this->value = str_pad($this->value, $length, $padString, STR_PAD_RIGHT);
        return $this;
    }


}