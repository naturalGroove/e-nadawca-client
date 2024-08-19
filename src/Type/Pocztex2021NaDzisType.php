<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing Pocztex2021NaDzisType
 *
 *
 * XSD Type: pocztex2021NaDzisType
 */
class Pocztex2021NaDzisType extends Pocztex2021Type
{
    /**
     * @var \Abryb\ENadawca\Type\SubPocztex2021NaDzisType[] $subPrzesylka
     */
    protected $subPrzesylka = [
        
    ];

    /**
     * @var int $odleglosc
     */
    protected $odleglosc = null;

    /**
     * @var string $obszar
     */
    protected $obszar = null;

    /**
     * Adds as subPrzesylka
     *
     * @return self
     * @param \Abryb\ENadawca\Type\SubPocztex2021NaDzisType $subPrzesylka
     */
    public function addToSubPrzesylka(\Abryb\ENadawca\Type\SubPocztex2021NaDzisType $subPrzesylka)
    {
        $this->subPrzesylka[] = $subPrzesylka;
        return $this;
    }

    /**
     * isset subPrzesylka
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubPrzesylka($index)
    {
        return isset($this->subPrzesylka[$index]);
    }

    /**
     * unset subPrzesylka
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubPrzesylka($index)
    {
        unset($this->subPrzesylka[$index]);
    }

    /**
     * Gets as subPrzesylka
     *
     * @return \Abryb\ENadawca\Type\SubPocztex2021NaDzisType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \Abryb\ENadawca\Type\SubPocztex2021NaDzisType[] $subPrzesylka
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka = null)
    {
        $this->subPrzesylka = $subPrzesylka;
        return $this;
    }

    /**
     * Gets as odleglosc
     *
     * @return int
     */
    public function getOdleglosc()
    {
        return $this->odleglosc;
    }

    /**
     * Sets a new odleglosc
     *
     * @param int $odleglosc
     * @return self
     */
    public function setOdleglosc($odleglosc)
    {
        $this->odleglosc = $odleglosc;
        return $this;
    }

    /**
     * Gets as obszar
     *
     * @return string
     */
    public function getObszar()
    {
        return $this->obszar;
    }

    /**
     * Sets a new obszar
     *
     * @param string $obszar
     * @return self
     */
    public function setObszar($obszar)
    {
        $this->obszar = $obszar;
        return $this;
    }
}

