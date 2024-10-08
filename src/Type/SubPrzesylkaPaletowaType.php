<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing SubPrzesylkaPaletowaType
 *
 *
 * XSD Type: subPrzesylkaPaletowaType
 */
class SubPrzesylkaPaletowaType extends PrzesylkaType
{
    /**
     * @var string $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var int $masa
     */
    protected $masa = null;

    /**
     * @var \Abryb\ENadawca\Type\PaletaType $paleta
     */
    protected $paleta = null;

    /**
     * Gets as zawartosc
     *
     * @return string
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Sets a new zawartosc
     *
     * @param string $zawartosc
     * @return self
     */
    public function setZawartosc($zawartosc)
    {
        $this->zawartosc = $zawartosc;
        return $this;
    }

    /**
     * Gets as masa
     *
     * @return int
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Sets a new masa
     *
     * @param int $masa
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;
        return $this;
    }

    /**
     * Gets as paleta
     *
     * @return \Abryb\ENadawca\Type\PaletaType
     */
    public function getPaleta()
    {
        return $this->paleta;
    }

    /**
     * Sets a new paleta
     *
     * @param \Abryb\ENadawca\Type\PaletaType $paleta
     * @return self
     */
    public function setPaleta(\Abryb\ENadawca\Type\PaletaType $paleta)
    {
        $this->paleta = $paleta;
        return $this;
    }
}

