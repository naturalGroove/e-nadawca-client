<?php

namespace Abryb\ENadawca\Type\GetAddresLabelCompact;

/**
 * Class representing GetAddresLabelCompactAType
 */
class GetAddresLabelCompactAType
{
    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope = null;

    /**
     * Gets as idEnvelope
     *
     * @return int
     */
    public function getIdEnvelope()
    {
        return $this->idEnvelope;
    }

    /**
     * Sets a new idEnvelope
     *
     * @param int $idEnvelope
     * @return self
     */
    public function setIdEnvelope($idEnvelope)
    {
        $this->idEnvelope = $idEnvelope;
        return $this;
    }
}

