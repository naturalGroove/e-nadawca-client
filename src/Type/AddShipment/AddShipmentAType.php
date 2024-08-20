<?php

namespace Abryb\ENadawca\Type\AddShipment;

/**
 * Class representing AddShipmentAType
 */
class AddShipmentAType
{
    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaType[] $przesylki
     */
    public $przesylki = [
        
    ];

    /**
     * @var int $idBufor
     */
    public $idBufor = null;

    /**
     * Adds as przesylki
     *
     * @return self
     * @param \Abryb\ENadawca\Type\PrzesylkaType $przesylki
     */
    public function addToPrzesylki(\Abryb\ENadawca\Type\PrzesylkaType $przesylki)
    {
        $this->przesylki[] = $przesylki;
        return $this;
    }

    /**
     * isset przesylki
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrzesylki($index)
    {
        return isset($this->przesylki[$index]);
    }

    /**
     * unset przesylki
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrzesylki($index)
    {
        unset($this->przesylki[$index]);
    }

    /**
     * Gets as przesylki
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaType[]
     */
    public function getPrzesylki()
    {
        return $this->przesylki;
    }

    /**
     * Sets a new przesylki
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaType[] $przesylki
     * @return self
     */
    public function setPrzesylki(array $przesylki)
    {
        $this->przesylki = $przesylki;
        return $this;
    }

    /**
     * Gets as idBufor
     *
     * @return int
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Sets a new idBufor
     *
     * @param int $idBufor
     * @return self
     */
    public function setIdBufor($idBufor)
    {
        $this->idBufor = $idBufor;
        return $this;
    }
}

