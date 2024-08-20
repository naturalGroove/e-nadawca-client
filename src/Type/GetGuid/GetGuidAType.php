<?php

namespace Abryb\ENadawca\Type\GetGuid;

/**
 * Class representing GetGuidAType
 */
class GetGuidAType
{
    /**
     * @var int $ilosc
     */
    protected $ilosc = null;

    /**
     * Gets as ilosc
     *
     * @return int
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Sets a new ilosc
     *
     * @param int $ilosc
     * @return self
     */
    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;
        return $this;
    }
}

