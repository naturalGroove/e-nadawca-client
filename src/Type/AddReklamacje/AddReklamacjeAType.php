<?php

namespace Abryb\ENadawca\Type\AddReklamacje;

/**
 * Class representing AddReklamacjeAType
 */
class AddReklamacjeAType
{
    /**
     * @var \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     */
    private $reklamowanaPrzesylka = [
        
    ];

    /**
     * Adds as reklamowanaPrzesylka
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType $reklamowanaPrzesylka
     */
    public function addToReklamowanaPrzesylka(\Abryb\ENadawca\Type\ReklamowanaPrzesylkaType $reklamowanaPrzesylka)
    {
        $this->reklamowanaPrzesylka[] = $reklamowanaPrzesylka;
        return $this;
    }

    /**
     * isset reklamowanaPrzesylka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReklamowanaPrzesylka($index)
    {
        return isset($this->reklamowanaPrzesylka[$index]);
    }

    /**
     * unset reklamowanaPrzesylka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReklamowanaPrzesylka($index)
    {
        unset($this->reklamowanaPrzesylka[$index]);
    }

    /**
     * Gets as reklamowanaPrzesylka
     *
     * @return \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[]
     */
    public function getReklamowanaPrzesylka()
    {
        return $this->reklamowanaPrzesylka;
    }

    /**
     * Sets a new reklamowanaPrzesylka
     *
     * @param \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[] $reklamowanaPrzesylka
     * @return self
     */
    public function setReklamowanaPrzesylka(array $reklamowanaPrzesylka)
    {
        $this->reklamowanaPrzesylka = $reklamowanaPrzesylka;
        return $this;
    }
}

