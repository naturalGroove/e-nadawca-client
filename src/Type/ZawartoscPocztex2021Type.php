<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ZawartoscPocztex2021Type
 *
 *
 * XSD Type: zawartoscPocztex2021Type
 */
class ZawartoscPocztex2021Type
{
    /**
     * @var string $zawartoscSpecjalna
     */
    protected $zawartoscSpecjalna = null;

    /**
     * @var string $zawartoscInna
     */
    protected $zawartoscInna = null;

    /**
     * Gets as zawartoscSpecjalna
     *
     * @return string
     */
    public function getZawartoscSpecjalna()
    {
        return $this->zawartoscSpecjalna;
    }

    /**
     * Sets a new zawartoscSpecjalna
     *
     * @param string $zawartoscSpecjalna
     * @return self
     */
    public function setZawartoscSpecjalna($zawartoscSpecjalna)
    {
        $this->zawartoscSpecjalna = $zawartoscSpecjalna;
        return $this;
    }

    /**
     * Gets as zawartoscInna
     *
     * @return string
     */
    public function getZawartoscInna()
    {
        return $this->zawartoscInna;
    }

    /**
     * Sets a new zawartoscInna
     *
     * @param string $zawartoscInna
     * @return self
     */
    public function setZawartoscInna($zawartoscInna)
    {
        $this->zawartoscInna = $zawartoscInna;
        return $this;
    }
}

