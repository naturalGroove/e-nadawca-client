<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ParcelContentType
 *
 *
 * XSD Type: parcelContentType
 */
class ParcelContentType
{
    /**
     * @var int $idParcelContent
     */
    protected $idParcelContent = null;

    /**
     * @var int $order
     */
    protected $order = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * GUID elementu parcelContent. Wartość
     *  wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     *
     * @var string $guid
     */
    protected $guid = null;

    /**
     * Gets as idParcelContent
     *
     * @return int
     */
    public function getIdParcelContent()
    {
        return $this->idParcelContent;
    }

    /**
     * Sets a new idParcelContent
     *
     * @param int $idParcelContent
     * @return self
     */
    public function setIdParcelContent($idParcelContent)
    {
        $this->idParcelContent = $idParcelContent;
        return $this;
    }

    /**
     * Gets as order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Sets a new order
     *
     * @param int $order
     * @return self
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

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

    /**
     * Gets as guid
     *
     * GUID elementu parcelContent. Wartość
     *  wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * GUID elementu parcelContent. Wartość
     *  wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     *
     * @param string $guid
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }
}

