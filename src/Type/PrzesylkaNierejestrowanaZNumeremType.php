<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaNierejestrowanaZNumeremType
 *
 *
 * XSD Type: przesylkaNierejestrowanaZNumeremType
 */
class PrzesylkaNierejestrowanaZNumeremType extends PrzesylkaRejestrowanaType
{
    /**
     * @var bool $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var bool $miejscowa
     */
    protected $miejscowa = null;

    /**
     * @var int $masa
     */
    protected $masa = null;

    /**
     * @var bool $obszarMiasto
     */
    protected $obszarMiasto = null;

    /**
     * @var string $kategoria
     */
    protected $kategoria = null;

    /**
     * @var string $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @var string $serwis
     */
    protected $serwis = null;

    /**
     * Gets as posteRestante
     *
     * @return bool
     */
    public function getPosteRestante()
    {
        return $this->posteRestante;
    }

    /**
     * Sets a new posteRestante
     *
     * @param bool $posteRestante
     * @return self
     */
    public function setPosteRestante($posteRestante)
    {
        $this->posteRestante = $posteRestante;
        return $this;
    }

    /**
     * Gets as miejscowa
     *
     * @return bool
     */
    public function getMiejscowa()
    {
        return $this->miejscowa;
    }

    /**
     * Sets a new miejscowa
     *
     * @param bool $miejscowa
     * @return self
     */
    public function setMiejscowa($miejscowa)
    {
        $this->miejscowa = $miejscowa;
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
     * Gets as obszarMiasto
     *
     * @return bool
     */
    public function getObszarMiasto()
    {
        return $this->obszarMiasto;
    }

    /**
     * Sets a new obszarMiasto
     *
     * @param bool $obszarMiasto
     * @return self
     */
    public function setObszarMiasto($obszarMiasto)
    {
        $this->obszarMiasto = $obszarMiasto;
        return $this;
    }

    /**
     * Gets as kategoria
     *
     * @return string
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Sets a new kategoria
     *
     * @param string $kategoria
     * @return self
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;
        return $this;
    }

    /**
     * Gets as gabaryt
     *
     * @return string
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Sets a new gabaryt
     *
     * @param string $gabaryt
     * @return self
     */
    public function setGabaryt($gabaryt)
    {
        $this->gabaryt = $gabaryt;
        return $this;
    }

    /**
     * Gets as serwis
     *
     * @return string
     */
    public function getSerwis()
    {
        return $this->serwis;
    }

    /**
     * Sets a new serwis
     *
     * @param string $serwis
     * @return self
     */
    public function setSerwis($serwis)
    {
        $this->serwis = $serwis;
        return $this;
    }
}

