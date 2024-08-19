<?php

namespace Abryb\ENadawca\Type\GetEZDO;

/**
 * Class representing GetEZDOAType
 */
class GetEZDOAType
{
    /**
     * @var int $idEZDOPakiet
     */
    private $idEZDOPakiet = null;

    /**
     * Gets as idEZDOPakiet
     *
     * @return int
     */
    public function getIdEZDOPakiet()
    {
        return $this->idEZDOPakiet;
    }

    /**
     * Sets a new idEZDOPakiet
     *
     * @param int $idEZDOPakiet
     * @return self
     */
    public function setIdEZDOPakiet($idEZDOPakiet)
    {
        $this->idEZDOPakiet = $idEZDOPakiet;
        return $this;
    }
}

