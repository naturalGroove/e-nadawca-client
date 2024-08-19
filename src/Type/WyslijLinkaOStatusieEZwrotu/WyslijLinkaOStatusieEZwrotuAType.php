<?php

namespace Abryb\ENadawca\Type\WyslijLinkaOStatusieEZwrotu;

/**
 * Class representing WyslijLinkaOStatusieEZwrotuAType
 */
class WyslijLinkaOStatusieEZwrotuAType
{
    /**
     * @var string[] $guidZgodaEZwrot
     */
    private $guidZgodaEZwrot = [
        
    ];

    /**
     * Adds as guidZgodaEZwrot
     *
     * @return self
     * @param string $guidZgodaEZwrot
     */
    public function addToGuidZgodaEZwrot($guidZgodaEZwrot)
    {
        $this->guidZgodaEZwrot[] = $guidZgodaEZwrot;
        return $this;
    }

    /**
     * isset guidZgodaEZwrot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuidZgodaEZwrot($index)
    {
        return isset($this->guidZgodaEZwrot[$index]);
    }

    /**
     * unset guidZgodaEZwrot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuidZgodaEZwrot($index)
    {
        unset($this->guidZgodaEZwrot[$index]);
    }

    /**
     * Gets as guidZgodaEZwrot
     *
     * @return string[]
     */
    public function getGuidZgodaEZwrot()
    {
        return $this->guidZgodaEZwrot;
    }

    /**
     * Sets a new guidZgodaEZwrot
     *
     * @param string $guidZgodaEZwrot
     * @return self
     */
    public function setGuidZgodaEZwrot(array $guidZgodaEZwrot)
    {
        $this->guidZgodaEZwrot = $guidZgodaEZwrot;
        return $this;
    }
}

