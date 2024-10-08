<?php

namespace Abryb\ENadawca\Type\GetKarty;

/**
 * Class representing GetKartyAType
 */
class GetKartyAType
{
    /**
     * @var int[] $idKarta
     */
    protected $idKarta = [
        
    ];

    /**
     * Adds as idKarta
     *
     * @return self
     * @param int $idKarta
     */
    public function addToIdKarta($idKarta)
    {
        $this->idKarta[] = $idKarta;
        return $this;
    }

    /**
     * isset idKarta
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIdKarta($index)
    {
        return isset($this->idKarta[$index]);
    }

    /**
     * unset idKarta
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIdKarta($index)
    {
        unset($this->idKarta[$index]);
    }

    /**
     * Gets as idKarta
     *
     * @return int[]
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int[] $idKarta
     * @return self
     */
    public function setIdKarta(array $idKarta = null)
    {
        $this->idKarta = $idKarta;
        return $this;
    }
}

