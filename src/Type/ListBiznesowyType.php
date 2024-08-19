<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ListBiznesowyType
 *
 *
 * XSD Type: listBiznesowyType
 */
class ListBiznesowyType extends PrzesylkaNieRejestrowanaType
{
    /**
     * @var int $masa
     */
    protected $masa = null;

    /**
     * Gets as masa
     *
     * @return int
     */
    public function getMasa()
    {
        return $this->masa;
    }

    /**
     * Sets a new masa
     *
     * @param int $masa
     * @return self
     */
    public function setMasa($masa)
    {
        $this->masa = $masa;
        return $this;
    }
}

