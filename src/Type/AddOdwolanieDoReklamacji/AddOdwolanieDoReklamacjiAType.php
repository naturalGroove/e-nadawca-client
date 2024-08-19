<?php

namespace Abryb\ENadawca\Type\AddOdwolanieDoReklamacji;

/**
 * Class representing AddOdwolanieDoReklamacjiAType
 */
class AddOdwolanieDoReklamacjiAType
{
    /**
     * @var \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[] $reklamacja
     */
    private $reklamacja = [
        
    ];

    /**
     * Adds as reklamacja
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType $reklamacja
     */
    public function addToReklamacja(\Abryb\ENadawca\Type\ReklamowanaPrzesylkaType $reklamacja)
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
     * @return \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[]
     */
    public function getReklamacja()
    {
        return $this->reklamacja;
    }

    /**
     * Sets a new reklamacja
     *
     * @param \Abryb\ENadawca\Type\ReklamowanaPrzesylkaType[] $reklamacja
     * @return self
     */
    public function setReklamacja(array $reklamacja)
    {
        $this->reklamacja = $reklamacja;
        return $this;
    }
}

