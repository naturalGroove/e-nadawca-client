<?php

namespace Abryb\ENadawca\Type\MoveShipments;

/**
 * Class representing MoveShipmentsAType
 */
class MoveShipmentsAType
{
    /**
     * @var int $idBuforFrom
     */
    private $idBuforFrom = null;

    /**
     * @var int $idBuforTo
     */
    private $idBuforTo = null;

    /**
     * @var string[] $guid
     */
    private $guid = [
        
    ];

    /**
     * Gets as idBuforFrom
     *
     * @return int
     */
    public function getIdBuforFrom()
    {
        return $this->idBuforFrom;
    }

    /**
     * Sets a new idBuforFrom
     *
     * @param int $idBuforFrom
     * @return self
     */
    public function setIdBuforFrom($idBuforFrom)
    {
        $this->idBuforFrom = $idBuforFrom;
        return $this;
    }

    /**
     * Gets as idBuforTo
     *
     * @return int
     */
    public function getIdBuforTo()
    {
        return $this->idBuforTo;
    }

    /**
     * Sets a new idBuforTo
     *
     * @param int $idBuforTo
     * @return self
     */
    public function setIdBuforTo($idBuforTo)
    {
        $this->idBuforTo = $idBuforTo;
        return $this;
    }

    /**
     * Adds as guid
     *
     * @return self
     * @param string $guid
     */
    public function addToGuid($guid)
    {
        $this->guid[] = $guid;
        return $this;
    }

    /**
     * isset guid
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuid($index)
    {
        return isset($this->guid[$index]);
    }

    /**
     * unset guid
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuid($index)
    {
        unset($this->guid[$index]);
    }

    /**
     * Gets as guid
     *
     * @return string[]
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     * @return self
     */
    public function setGuid(array $guid)
    {
        $this->guid = $guid;
        return $this;
    }
}

