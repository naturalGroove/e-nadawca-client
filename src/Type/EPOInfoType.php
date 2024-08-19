<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing EPOInfoType
 *
 *
 * XSD Type: EPOInfoType
 */
class EPOInfoType
{
    /**
     * @var \Abryb\ENadawca\Type\AwizoPrzesylkiType $awizoPrzesylki
     */
    protected $awizoPrzesylki = null;

    /**
     * @var \Abryb\ENadawca\Type\DoreczeniePrzesylkiType $doreczeniePrzesylki
     */
    protected $doreczeniePrzesylki = null;

    /**
     * @var \Abryb\ENadawca\Type\ZwrotPrzesylkiType $zwrotPrzesylki
     */
    protected $zwrotPrzesylki = null;

    /**
     * Gets as awizoPrzesylki
     *
     * @return \Abryb\ENadawca\Type\AwizoPrzesylkiType
     */
    public function getAwizoPrzesylki()
    {
        return $this->awizoPrzesylki;
    }

    /**
     * Sets a new awizoPrzesylki
     *
     * @param \Abryb\ENadawca\Type\AwizoPrzesylkiType $awizoPrzesylki
     * @return self
     */
    public function setAwizoPrzesylki(?\Abryb\ENadawca\Type\AwizoPrzesylkiType $awizoPrzesylki = null)
    {
        $this->awizoPrzesylki = $awizoPrzesylki;
        return $this;
    }

    /**
     * Gets as doreczeniePrzesylki
     *
     * @return \Abryb\ENadawca\Type\DoreczeniePrzesylkiType
     */
    public function getDoreczeniePrzesylki()
    {
        return $this->doreczeniePrzesylki;
    }

    /**
     * Sets a new doreczeniePrzesylki
     *
     * @param \Abryb\ENadawca\Type\DoreczeniePrzesylkiType $doreczeniePrzesylki
     * @return self
     */
    public function setDoreczeniePrzesylki(?\Abryb\ENadawca\Type\DoreczeniePrzesylkiType $doreczeniePrzesylki = null)
    {
        $this->doreczeniePrzesylki = $doreczeniePrzesylki;
        return $this;
    }

    /**
     * Gets as zwrotPrzesylki
     *
     * @return \Abryb\ENadawca\Type\ZwrotPrzesylkiType
     */
    public function getZwrotPrzesylki()
    {
        return $this->zwrotPrzesylki;
    }

    /**
     * Sets a new zwrotPrzesylki
     *
     * @param \Abryb\ENadawca\Type\ZwrotPrzesylkiType $zwrotPrzesylki
     * @return self
     */
    public function setZwrotPrzesylki(?\Abryb\ENadawca\Type\ZwrotPrzesylkiType $zwrotPrzesylki = null)
    {
        $this->zwrotPrzesylki = $zwrotPrzesylki;
        return $this;
    }
}

