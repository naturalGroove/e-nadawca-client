<?php

namespace Abryb\ENadawca\Type\GetUbezpieczeniaInfoResponse;

/**
 * Class representing GetUbezpieczeniaInfoResponseAType
 */
class GetUbezpieczeniaInfoResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     */
    private $poziomyUbezpieczenia = [
        
    ];

    /**
     * Adds as poziomyUbezpieczenia
     *
     * @return self
     * @param \Abryb\ENadawca\Type\UbezpieczeniaInfoType $poziomyUbezpieczenia
     */
    public function addToPoziomyUbezpieczenia(\Abryb\ENadawca\Type\UbezpieczeniaInfoType $poziomyUbezpieczenia)
    {
        $this->poziomyUbezpieczenia[] = $poziomyUbezpieczenia;
        return $this;
    }

    /**
     * isset poziomyUbezpieczenia
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPoziomyUbezpieczenia($index)
    {
        return isset($this->poziomyUbezpieczenia[$index]);
    }

    /**
     * unset poziomyUbezpieczenia
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPoziomyUbezpieczenia($index)
    {
        unset($this->poziomyUbezpieczenia[$index]);
    }

    /**
     * Gets as poziomyUbezpieczenia
     *
     * @return \Abryb\ENadawca\Type\UbezpieczeniaInfoType[]
     */
    public function getPoziomyUbezpieczenia()
    {
        return $this->poziomyUbezpieczenia;
    }

    /**
     * Sets a new poziomyUbezpieczenia
     *
     * @param \Abryb\ENadawca\Type\UbezpieczeniaInfoType[] $poziomyUbezpieczenia
     * @return self
     */
    public function setPoziomyUbezpieczenia(array $poziomyUbezpieczenia = null)
    {
        $this->poziomyUbezpieczenia = $poziomyUbezpieczenia;
        return $this;
    }
}

