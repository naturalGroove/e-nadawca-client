<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PotwierdzenieOdbioruPocztex2021Type
 *
 *
 * XSD Type: potwierdzenieOdbioruPocztex2021Type
 */
class PotwierdzenieOdbioruPocztex2021Type
{
    /**
     * @var int $ilosc
     */
    protected $ilosc = null;

    /**
     * @var string $sposobPotwierdzeniaOdbioru
     */
    protected $sposobPotwierdzeniaOdbioru = null;

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

    /**
     * Gets as sposobPotwierdzeniaOdbioru
     *
     * @return string
     */
    public function getSposobPotwierdzeniaOdbioru()
    {
        return $this->sposobPotwierdzeniaOdbioru;
    }

    /**
     * Sets a new sposobPotwierdzeniaOdbioru
     *
     * @param string $sposobPotwierdzeniaOdbioru
     * @return self
     */
    public function setSposobPotwierdzeniaOdbioru($sposobPotwierdzeniaOdbioru)
    {
        $this->sposobPotwierdzeniaOdbioru = $sposobPotwierdzeniaOdbioru;
        return $this;
    }
}

