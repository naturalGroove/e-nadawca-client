<?php

namespace Abryb\ENadawca\Type\GetUrzedyNadaniaResponse;

/**
 * Class representing GetUrzedyNadaniaResponseAType
 */
class GetUrzedyNadaniaResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\UrzadNadaniaFullType[] $urzedyNadania
     */
    protected $urzedyNadania = [
        
    ];

    /**
     * Adds as urzedyNadania
     *
     * @return self
     * @param \Abryb\ENadawca\Type\UrzadNadaniaFullType $urzedyNadania
     */
    public function addToUrzedyNadania(\Abryb\ENadawca\Type\UrzadNadaniaFullType $urzedyNadania)
    {
        $this->urzedyNadania[] = $urzedyNadania;
        return $this;
    }

    /**
     * isset urzedyNadania
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUrzedyNadania($index)
    {
        return isset($this->urzedyNadania[$index]);
    }

    /**
     * unset urzedyNadania
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUrzedyNadania($index)
    {
        unset($this->urzedyNadania[$index]);
    }

    /**
     * Gets as urzedyNadania
     *
     * @return \Abryb\ENadawca\Type\UrzadNadaniaFullType[]
     */
    public function getUrzedyNadania()
    {
        return $this->urzedyNadania;
    }

    /**
     * Sets a new urzedyNadania
     *
     * @param \Abryb\ENadawca\Type\UrzadNadaniaFullType[] $urzedyNadania
     * @return self
     */
    public function setUrzedyNadania(array $urzedyNadania = null)
    {
        $this->urzedyNadania = $urzedyNadania;
        return $this;
    }
}

