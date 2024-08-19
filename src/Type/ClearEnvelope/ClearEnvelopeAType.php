<?php

namespace Abryb\ENadawca\Type\ClearEnvelope;

/**
 * Class representing ClearEnvelopeAType
 */
class ClearEnvelopeAType
{
    /**
     * @var int $idBufor
     */
    private $idBufor = null;

    /**
     * Gets as idBufor
     *
     * @return int
     */
    public function getIdBufor()
    {
        return $this->idBufor;
    }

    /**
     * Sets a new idBufor
     *
     * @param int $idBufor
     * @return self
     */
    public function setIdBufor($idBufor)
    {
        $this->idBufor = $idBufor;
        return $this;
    }
}

