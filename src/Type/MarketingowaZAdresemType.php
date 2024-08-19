<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing MarketingowaZAdresemType
 *
 *
 * XSD Type: marketingowaZAdresemType
 */
class MarketingowaZAdresemType extends PrzesylkaType
{
    /**
     * @var \Abryb\ENadawca\Type\AdresType $adres
     */
    protected $adres = null;

    /**
     * @var int $masa
     */
    protected $masa = null;

    /**
     * @var string $gabaryt
     */
    protected $gabaryt = null;

    /**
     * Gets as adres
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Sets a new adres
     *
     * @param \Abryb\ENadawca\Type\AdresType $adres
     * @return self
     */
    public function setAdres(\Abryb\ENadawca\Type\AdresType $adres)
    {
        $this->adres = $adres;
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
}

