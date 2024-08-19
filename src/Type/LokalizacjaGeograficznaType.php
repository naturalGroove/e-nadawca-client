<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing LokalizacjaGeograficznaType
 *
 *
 * XSD Type: lokalizacjaGeograficznaType
 */
class LokalizacjaGeograficznaType
{
    /**
     * @var \Abryb\ENadawca\Type\WspolrzednaGeograficznaType $dlugosc
     */
    protected $dlugosc = null;

    /**
     * @var \Abryb\ENadawca\Type\WspolrzednaGeograficznaType $szerokosc
     */
    protected $szerokosc = null;

    /**
     * Gets as dlugosc
     *
     * @return \Abryb\ENadawca\Type\WspolrzednaGeograficznaType
     */
    public function getDlugosc()
    {
        return $this->dlugosc;
    }

    /**
     * Sets a new dlugosc
     *
     * @param \Abryb\ENadawca\Type\WspolrzednaGeograficznaType $dlugosc
     * @return self
     */
    public function setDlugosc(\Abryb\ENadawca\Type\WspolrzednaGeograficznaType $dlugosc)
    {
        $this->dlugosc = $dlugosc;
        return $this;
    }

    /**
     * Gets as szerokosc
     *
     * @return \Abryb\ENadawca\Type\WspolrzednaGeograficznaType
     */
    public function getSzerokosc()
    {
        return $this->szerokosc;
    }

    /**
     * Sets a new szerokosc
     *
     * @param \Abryb\ENadawca\Type\WspolrzednaGeograficznaType $szerokosc
     * @return self
     */
    public function setSzerokosc(\Abryb\ENadawca\Type\WspolrzednaGeograficznaType $szerokosc)
    {
        $this->szerokosc = $szerokosc;
        return $this;
    }
}

