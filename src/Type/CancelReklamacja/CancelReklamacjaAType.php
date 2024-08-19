<?php

namespace Abryb\ENadawca\Type\CancelReklamacja;

/**
 * Class representing CancelReklamacjaAType
 */
class CancelReklamacjaAType
{
    /**
     * @var int $idRelkamacja
     */
    private $idRelkamacja = null;

    /**
     * Gets as idRelkamacja
     *
     * @return int
     */
    public function getIdRelkamacja()
    {
        return $this->idRelkamacja;
    }

    /**
     * Sets a new idRelkamacja
     *
     * @param int $idRelkamacja
     * @return self
     */
    public function setIdRelkamacja($idRelkamacja)
    {
        $this->idRelkamacja = $idRelkamacja;
        return $this;
    }
}

