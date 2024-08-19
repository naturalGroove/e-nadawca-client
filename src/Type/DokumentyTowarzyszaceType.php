<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing DokumentyTowarzyszaceType
 *
 *
 * XSD Type: DokumentyTowarzyszaceType
 */
class DokumentyTowarzyszaceType
{
    /**
     * @var string $rodzaj
     */
    protected $rodzaj = null;

    /**
     * @var string $numer
     */
    protected $numer = null;

    /**
     * Gets as rodzaj
     *
     * @return string
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Sets a new rodzaj
     *
     * @param string $rodzaj
     * @return self
     */
    public function setRodzaj($rodzaj)
    {
        $this->rodzaj = $rodzaj;
        return $this;
    }

    /**
     * Gets as numer
     *
     * @return string
     */
    public function getNumer()
    {
        return $this->numer;
    }

    /**
     * Sets a new numer
     *
     * @param string $numer
     * @return self
     */
    public function setNumer($numer)
    {
        $this->numer = $numer;
        return $this;
    }
}

