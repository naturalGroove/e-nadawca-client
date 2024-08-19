<?php

namespace Abryb\ENadawca\Type\SetAktywnaKarta;

/**
 * Class representing SetAktywnaKartaAType
 */
class SetAktywnaKartaAType
{
    /**
     * @var int $idKarta
     */
    private $idKarta = null;

    /**
     * Gets as idKarta
     *
     * @return int
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int $idKarta
     * @return self
     */
    public function setIdKarta($idKarta)
    {
        $this->idKarta = $idKarta;
        return $this;
    }
}

