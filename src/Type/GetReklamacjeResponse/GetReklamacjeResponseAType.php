<?php

namespace Abryb\ENadawca\Type\GetReklamacjeResponse;

/**
 * Class representing GetReklamacjeResponseAType
 */
class GetReklamacjeResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\ReklamacjaRozpatrzonaType[] $reklamacja
     */
    protected $reklamacja = [
        
    ];

    /**
     * Adds as reklamacja
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ReklamacjaRozpatrzonaType $reklamacja
     */
    public function addToReklamacja(\Abryb\ENadawca\Type\ReklamacjaRozpatrzonaType $reklamacja)
    {
        $this->reklamacja[] = $reklamacja;
        return $this;
    }

    /**
     * isset reklamacja
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReklamacja($index)
    {
        return isset($this->reklamacja[$index]);
    }

    /**
     * unset reklamacja
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReklamacja($index)
    {
        unset($this->reklamacja[$index]);
    }

    /**
     * Gets as reklamacja
     *
     * @return \Abryb\ENadawca\Type\ReklamacjaRozpatrzonaType[]
     */
    public function getReklamacja()
    {
        return $this->reklamacja;
    }

    /**
     * Sets a new reklamacja
     *
     * @param \Abryb\ENadawca\Type\ReklamacjaRozpatrzonaType[] $reklamacja
     * @return self
     */
    public function setReklamacja(array $reklamacja = null)
    {
        $this->reklamacja = $reklamacja;
        return $this;
    }
}

