<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing UbezpieczeniaInfoType
 *
 *
 * XSD Type: ubezpieczeniaInfoType
 */
class UbezpieczeniaInfoType
{
    /**
     * @var string $typPrzesylki
     */
    protected $typPrzesylki = null;

    /**
     * @var float $kwota
     */
    protected $kwota = null;

    /**
     * Gets as typPrzesylki
     *
     * @return string
     */
    public function getTypPrzesylki()
    {
        return $this->typPrzesylki;
    }

    /**
     * Sets a new typPrzesylki
     *
     * @param string $typPrzesylki
     * @return self
     */
    public function setTypPrzesylki($typPrzesylki)
    {
        $this->typPrzesylki = $typPrzesylki;
        return $this;
    }

    /**
     * Gets as kwota
     *
     * @return float
     */
    public function getKwota()
    {
        return $this->kwota;
    }

    /**
     * Sets a new kwota
     *
     * @param float $kwota
     * @return self
     */
    public function setKwota($kwota)
    {
        $this->kwota = $kwota;
        return $this;
    }
}

