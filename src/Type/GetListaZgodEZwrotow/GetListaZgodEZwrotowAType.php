<?php

namespace Abryb\ENadawca\Type\GetListaZgodEZwrotow;

/**
 * Class representing GetListaZgodEZwrotowAType
 */
class GetListaZgodEZwrotowAType
{
    /**
     * @var string $status
     */
    private $status = null;

    /**
     * @var int $idShop
     */
    private $idShop = null;

    /**
     * Gets as status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as idShop
     *
     * @return int
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Sets a new idShop
     *
     * @param int $idShop
     * @return self
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;
        return $this;
    }
}

