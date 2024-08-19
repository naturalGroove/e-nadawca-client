<?php

namespace Abryb\ENadawca\Type\GetPlacowkaPocztowaResponse;

/**
 * Class representing GetPlacowkaPocztowaResponseAType
 */
class GetPlacowkaPocztowaResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\PlacowkaPocztowaType[] $placowka
     */
    private $placowka = [
        
    ];

    /**
     * Adds as placowka
     *
     * @return self
     * @param \Abryb\ENadawca\Type\PlacowkaPocztowaType $placowka
     */
    public function addToPlacowka(\Abryb\ENadawca\Type\PlacowkaPocztowaType $placowka)
    {
        $this->placowka[] = $placowka;
        return $this;
    }

    /**
     * isset placowka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPlacowka($index)
    {
        return isset($this->placowka[$index]);
    }

    /**
     * unset placowka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPlacowka($index)
    {
        unset($this->placowka[$index]);
    }

    /**
     * Gets as placowka
     *
     * @return \Abryb\ENadawca\Type\PlacowkaPocztowaType[]
     */
    public function getPlacowka()
    {
        return $this->placowka;
    }

    /**
     * Sets a new placowka
     *
     * @param \Abryb\ENadawca\Type\PlacowkaPocztowaType[] $placowka
     * @return self
     */
    public function setPlacowka(array $placowka)
    {
        $this->placowka = $placowka;
        return $this;
    }
}

