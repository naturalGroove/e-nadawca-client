<?php

namespace Abryb\ENadawca\Type\GetParcelContentList;

/**
 * Class representing GetParcelContentListAType
 */
class GetParcelContentListAType
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

