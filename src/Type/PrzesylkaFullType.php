<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaFullType
 *
 *
 * XSD Type: przesylkaFullType
 */
class PrzesylkaFullType
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaShortType $przesylkaShort
     */
    protected $przesylkaShort = null;

    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaType $przesylkaFull
     */
    protected $przesylkaFull = null;

    /**
     * Gets as przesylkaShort
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaShortType
     */
    public function getPrzesylkaShort()
    {
        return $this->przesylkaShort;
    }

    /**
     * Sets a new przesylkaShort
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaShortType $przesylkaShort
     * @return self
     */
    public function setPrzesylkaShort(\Abryb\ENadawca\Type\PrzesylkaShortType $przesylkaShort)
    {
        $this->przesylkaShort = $przesylkaShort;
        return $this;
    }

    /**
     * Gets as przesylkaFull
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaType
     */
    public function getPrzesylkaFull()
    {
        return $this->przesylkaFull;
    }

    /**
     * Sets a new przesylkaFull
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaType $przesylkaFull
     * @return self
     */
    public function setPrzesylkaFull(\Abryb\ENadawca\Type\PrzesylkaType $przesylkaFull)
    {
        $this->przesylkaFull = $przesylkaFull;
        return $this;
    }
}

