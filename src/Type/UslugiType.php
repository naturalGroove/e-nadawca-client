<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing UslugiType
 *
 *
 * XSD Type: uslugiType
 */
class UslugiType
{
    /**
     * @var string $id
     */
    protected $id = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Sets a new opis
     *
     * @param string $opis
     * @return self
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
        return $this;
    }
}

