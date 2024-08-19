<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing Pocztex2021KurierType
 *
 *
 * XSD Type: pocztex2021KurierType
 */
class Pocztex2021KurierType extends Pocztex2021Type
{
    /**
     * @var \Abryb\ENadawca\Type\SubPocztex2021KurierType[] $subPrzesylka
     */
    protected $subPrzesylka = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\PunktOdbioruType $punktOdbioru
     */
    protected $punktOdbioru = null;

    /**
     * @var \Abryb\ENadawca\Type\PunktNadaniaType $punktNadania
     */
    protected $punktNadania = null;

    /**
     * @var bool $kopertaPocztex
     */
    protected $kopertaPocztex = null;

    /**
     * @var string $godzinaDoreczenia
     */
    protected $godzinaDoreczenia = null;

    /**
     * @var \DateTime $doreczenieWeWskazanymDniu
     */
    protected $doreczenieWeWskazanymDniu = null;

    /**
     * Adds as subPrzesylka
     *
     * @return self
     * @param \Abryb\ENadawca\Type\SubPocztex2021KurierType $subPrzesylka
     */
    public function addToSubPrzesylka(\Abryb\ENadawca\Type\SubPocztex2021KurierType $subPrzesylka)
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
     * @return \Abryb\ENadawca\Type\SubPocztex2021KurierType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \Abryb\ENadawca\Type\SubPocztex2021KurierType[] $subPrzesylka
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka = null)
    {
        $this->subPrzesylka = $subPrzesylka;
        return $this;
    }

    /**
     * Gets as punktOdbioru
     *
     * @return \Abryb\ENadawca\Type\PunktOdbioruType
     */
    public function getPunktOdbioru()
    {
        return $this->punktOdbioru;
    }

    /**
     * Sets a new punktOdbioru
     *
     * @param \Abryb\ENadawca\Type\PunktOdbioruType $punktOdbioru
     * @return self
     */
    public function setPunktOdbioru(?\Abryb\ENadawca\Type\PunktOdbioruType $punktOdbioru = null)
    {
        $this->punktOdbioru = $punktOdbioru;
        return $this;
    }

    /**
     * Gets as punktNadania
     *
     * @return \Abryb\ENadawca\Type\PunktNadaniaType
     */
    public function getPunktNadania()
    {
        return $this->punktNadania;
    }

    /**
     * Sets a new punktNadania
     *
     * @param \Abryb\ENadawca\Type\PunktNadaniaType $punktNadania
     * @return self
     */
    public function setPunktNadania(?\Abryb\ENadawca\Type\PunktNadaniaType $punktNadania = null)
    {
        $this->punktNadania = $punktNadania;
        return $this;
    }

    /**
     * Gets as kopertaPocztex
     *
     * @return bool
     */
    public function getKopertaPocztex()
    {
        return $this->kopertaPocztex;
    }

    /**
     * Sets a new kopertaPocztex
     *
     * @param bool $kopertaPocztex
     * @return self
     */
    public function setKopertaPocztex($kopertaPocztex)
    {
        $this->kopertaPocztex = $kopertaPocztex;
        return $this;
    }

    /**
     * Gets as godzinaDoreczenia
     *
     * @return string
     */
    public function getGodzinaDoreczenia()
    {
        return $this->godzinaDoreczenia;
    }

    /**
     * Sets a new godzinaDoreczenia
     *
     * @param string $godzinaDoreczenia
     * @return self
     */
    public function setGodzinaDoreczenia($godzinaDoreczenia)
    {
        $this->godzinaDoreczenia = $godzinaDoreczenia;
        return $this;
    }

    /**
     * Gets as doreczenieWeWskazanymDniu
     *
     * @return \DateTime
     */
    public function getDoreczenieWeWskazanymDniu()
    {
        return $this->doreczenieWeWskazanymDniu;
    }

    /**
     * Sets a new doreczenieWeWskazanymDniu
     *
     * @param \DateTime $doreczenieWeWskazanymDniu
     * @return self
     */
    public function setDoreczenieWeWskazanymDniu(?\DateTime $doreczenieWeWskazanymDniu = null)
    {
        $this->doreczenieWeWskazanymDniu = $doreczenieWeWskazanymDniu;
        return $this;
    }
}

