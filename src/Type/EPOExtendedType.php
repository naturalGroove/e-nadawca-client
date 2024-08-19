<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing EPOExtendedType
 *
 * atrybut zasadySpecjalne zostanie usunięty z
 *  EPOExtendedType do końca 2016 roku
 * XSD Type: EPOExtendedType
 */
class EPOExtendedType extends EPOType
{
    /**
     * @var string $zasadySpecjalne
     */
    protected $zasadySpecjalne = null;

    /**
     * Gets as zasadySpecjalne
     *
     * @return string
     */
    public function getZasadySpecjalne()
    {
        return $this->zasadySpecjalne;
    }

    /**
     * Sets a new zasadySpecjalne
     *
     * @param string $zasadySpecjalne
     * @return self
     */
    public function setZasadySpecjalne($zasadySpecjalne)
    {
        $this->zasadySpecjalne = $zasadySpecjalne;
        return $this;
    }
}

