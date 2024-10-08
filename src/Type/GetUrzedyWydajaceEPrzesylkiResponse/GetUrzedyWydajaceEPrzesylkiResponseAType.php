<?php

namespace Abryb\ENadawca\Type\GetUrzedyWydajaceEPrzesylkiResponse;

/**
 * Class representing GetUrzedyWydajaceEPrzesylkiResponseAType
 */
class GetUrzedyWydajaceEPrzesylkiResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = [
        
    ];

    /**
     * Adds as urzadWydaniaEPrzesylki
     *
     * @return self
     * @param \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    public function addToUrzadWydaniaEPrzesylki(\Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki)
    {
        $this->urzadWydaniaEPrzesylki[] = $urzadWydaniaEPrzesylki;
        return $this;
    }

    /**
     * isset urzadWydaniaEPrzesylki
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUrzadWydaniaEPrzesylki($index)
    {
        return isset($this->urzadWydaniaEPrzesylki[$index]);
    }

    /**
     * unset urzadWydaniaEPrzesylki
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUrzadWydaniaEPrzesylki($index)
    {
        unset($this->urzadWydaniaEPrzesylki[$index]);
    }

    /**
     * Gets as urzadWydaniaEPrzesylki
     *
     * @return \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType[]
     */
    public function getUrzadWydaniaEPrzesylki()
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * Sets a new urzadWydaniaEPrzesylki
     *
     * @param \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType[] $urzadWydaniaEPrzesylki
     * @return self
     */
    public function setUrzadWydaniaEPrzesylki(array $urzadWydaniaEPrzesylki)
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        return $this;
    }
}

