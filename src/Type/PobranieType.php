<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PobranieType
 *
 *
 * XSD Type: pobranieType
 */
class PobranieType
{
    /**
     * @var string $sposobPobrania
     */
    protected $sposobPobrania = null;

    /**
     * @var int $kwotaPobrania
     */
    protected $kwotaPobrania = null;

    /**
     * @var string $nrb
     */
    protected $nrb = null;

    /**
     * @var string $tytulem
     */
    protected $tytulem = null;

    /**
     * @var bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    protected $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * Gets as sposobPobrania
     *
     * @return string
     */
    public function getSposobPobrania()
    {
        return $this->sposobPobrania;
    }

    /**
     * Sets a new sposobPobrania
     *
     * @param string $sposobPobrania
     * @return self
     */
    public function setSposobPobrania($sposobPobrania)
    {
        $this->sposobPobrania = $sposobPobrania;
        return $this;
    }

    /**
     * Gets as kwotaPobrania
     *
     * @return int
     */
    public function getKwotaPobrania()
    {
        return $this->kwotaPobrania;
    }

    /**
     * Sets a new kwotaPobrania
     *
     * @param int $kwotaPobrania
     * @return self
     */
    public function setKwotaPobrania($kwotaPobrania)
    {
        $this->kwotaPobrania = $kwotaPobrania;
        return $this;
    }

    /**
     * Gets as nrb
     *
     * @return string
     */
    public function getNrb()
    {
        return $this->nrb;
    }

    /**
     * Sets a new nrb
     *
     * @param string $nrb
     * @return self
     */
    public function setNrb($nrb)
    {
        $this->nrb = $nrb;
        return $this;
    }

    /**
     * Gets as tytulem
     *
     * @return string
     */
    public function getTytulem()
    {
        return $this->tytulem;
    }

    /**
     * Sets a new tytulem
     *
     * @param string $tytulem
     * @return self
     */
    public function setTytulem($tytulem)
    {
        $this->tytulem = $tytulem;
        return $this;
    }

    /**
     * Gets as sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @return bool
     */
    public function getSprawdzenieZawartosciPrzesylkiPrzezOdbiorce()
    {
        return $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
    }

    /**
     * Sets a new sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     *
     * @param bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     * @return self
     */
    public function setSprawdzenieZawartosciPrzesylkiPrzezOdbiorce($sprawdzenieZawartosciPrzesylkiPrzezOdbiorce)
    {
        $this->sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce;
        return $this;
    }
}

