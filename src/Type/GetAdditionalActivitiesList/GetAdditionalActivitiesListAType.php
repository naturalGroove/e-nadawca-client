<?php

namespace Abryb\ENadawca\Type\GetAdditionalActivitiesList;

/**
 * Class representing GetAdditionalActivitiesListAType
 */
class GetAdditionalActivitiesListAType
{
    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

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

