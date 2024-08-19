<?php

namespace Abryb\ENadawca\Type\GetEnvelopeContentFullResponse;

/**
 * Class representing GetEnvelopeContentFullResponseAType
 */
class GetEnvelopeContentFullResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaFullType[] $przesylka
     */
    private $przesylka = [
        
    ];

    /**
     * Adds as przesylka
     *
     * @return self
     * @param \Abryb\ENadawca\Type\PrzesylkaFullType $przesylka
     */
    public function addToPrzesylka(\Abryb\ENadawca\Type\PrzesylkaFullType $przesylka)
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
     * @return \Abryb\ENadawca\Type\PrzesylkaFullType[]
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaFullType[] $przesylka
     * @return self
     */
    public function setPrzesylka(array $przesylka = null)
    {
        $this->przesylka = $przesylka;
        return $this;
    }
}

