<?php

namespace Abryb\ENadawca\Type\GetEnvelopeContentShortResponse;

/**
 * Class representing GetEnvelopeContentShortResponseAType
 */
class GetEnvelopeContentShortResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaShortType[] $przesylka
     */
    protected $przesylka = [
        
    ];

    /**
     * Adds as przesylka
     *
     * @return self
     * @param \Abryb\ENadawca\Type\PrzesylkaShortType $przesylka
     */
    public function addToPrzesylka(\Abryb\ENadawca\Type\PrzesylkaShortType $przesylka)
    {
        $this->przesylka[] = $przesylka;
        return $this;
    }

    /**
     * isset przesylka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrzesylka($index)
    {
        return isset($this->przesylka[$index]);
    }

    /**
     * unset przesylka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrzesylka($index)
    {
        unset($this->przesylka[$index]);
    }

    /**
     * Gets as przesylka
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaShortType[]
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaShortType[] $przesylka
     * @return self
     */
    public function setPrzesylka(array $przesylka = null)
    {
        $this->przesylka = $przesylka;
        return $this;
    }
}

