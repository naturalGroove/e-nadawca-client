<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing AdresKorespondencyjnyType
 *
 *
 * XSD Type: adresKorespondencyjny
 */
class AdresKorespondencyjnyType extends AdresType
{
    /**
     * Identyfikator adresu korespondencyjnego
     *
     * @var int $id
     */
    protected $id = null;

    /**
     * Gets as id
     *
     * Identyfikator adresu korespondencyjnego
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * Identyfikator adresu korespondencyjnego
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
}

