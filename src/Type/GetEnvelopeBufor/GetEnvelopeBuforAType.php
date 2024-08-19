<?php

namespace Abryb\ENadawca\Type\GetEnvelopeBufor;

/**
 * Class representing GetEnvelopeBuforAType
 */
class GetEnvelopeBuforAType
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

