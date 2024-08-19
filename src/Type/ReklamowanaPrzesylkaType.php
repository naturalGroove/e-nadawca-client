<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ReklamowanaPrzesylkaType
 *
 *
 * XSD Type: reklamowanaPrzesylkaType
 */
class ReklamowanaPrzesylkaType
{
    /**
     * @var \DateTime $dataNadania
     */
    protected $dataNadania = null;

    /**
     * @var int $urzadNadania
     */
    protected $urzadNadania = null;

    /**
     * @var string $powodReklamacjiOpis
     */
    protected $powodReklamacjiOpis = null;

    /**
     * @var int $odszkodowanie
     */
    protected $odszkodowanie = null;

    /**
     * @var int $oplata
     */
    protected $oplata = null;

    /**
     * @var int $oczekiwaneOdszkodowanie
     */
    protected $oczekiwaneOdszkodowanie = null;

    /**
     * @var \Abryb\ENadawca\Type\PrzesylkaType $przesylka
     */
    protected $przesylka = null;

    /**
     * @var \Abryb\ENadawca\Type\PowodReklamacjiType $powodReklamacji
     */
    protected $powodReklamacji = null;

    /**
     * @var string $nrb
     */
    protected $nrb = null;

    /**
     * @var string $numerFaktury
     */
    protected $numerFaktury = null;

    /**
     * @var bool $ezgoda
     */
    protected $ezgoda = null;

    /**
     * Gets as dataNadania
     *
     * @return \DateTime
     */
    public function getDataNadania()
    {
        return $this->dataNadania;
    }

    /**
     * Sets a new dataNadania
     *
     * @param \DateTime $dataNadania
     * @return self
     */
    public function setDataNadania(\DateTime $dataNadania)
    {
        $this->dataNadania = $dataNadania;
        return $this;
    }

    /**
     * Gets as urzadNadania
     *
     * @return int
     */
    public function getUrzadNadania()
    {
        return $this->urzadNadania;
    }

    /**
     * Sets a new urzadNadania
     *
     * @param int $urzadNadania
     * @return self
     */
    public function setUrzadNadania($urzadNadania)
    {
        $this->urzadNadania = $urzadNadania;
        return $this;
    }

    /**
     * Gets as powodReklamacjiOpis
     *
     * @return string
     */
    public function getPowodReklamacjiOpis()
    {
        return $this->powodReklamacjiOpis;
    }

    /**
     * Sets a new powodReklamacjiOpis
     *
     * @param string $powodReklamacjiOpis
     * @return self
     */
    public function setPowodReklamacjiOpis($powodReklamacjiOpis)
    {
        $this->powodReklamacjiOpis = $powodReklamacjiOpis;
        return $this;
    }

    /**
     * Gets as odszkodowanie
     *
     * @return int
     */
    public function getOdszkodowanie()
    {
        return $this->odszkodowanie;
    }

    /**
     * Sets a new odszkodowanie
     *
     * @param int $odszkodowanie
     * @return self
     */
    public function setOdszkodowanie($odszkodowanie)
    {
        $this->odszkodowanie = $odszkodowanie;
        return $this;
    }

    /**
     * Gets as oplata
     *
     * @return int
     */
    public function getOplata()
    {
        return $this->oplata;
    }

    /**
     * Sets a new oplata
     *
     * @param int $oplata
     * @return self
     */
    public function setOplata($oplata)
    {
        $this->oplata = $oplata;
        return $this;
    }

    /**
     * Gets as oczekiwaneOdszkodowanie
     *
     * @return int
     */
    public function getOczekiwaneOdszkodowanie()
    {
        return $this->oczekiwaneOdszkodowanie;
    }

    /**
     * Sets a new oczekiwaneOdszkodowanie
     *
     * @param int $oczekiwaneOdszkodowanie
     * @return self
     */
    public function setOczekiwaneOdszkodowanie($oczekiwaneOdszkodowanie)
    {
        $this->oczekiwaneOdszkodowanie = $oczekiwaneOdszkodowanie;
        return $this;
    }

    /**
     * Gets as przesylka
     *
     * @return \Abryb\ENadawca\Type\PrzesylkaType
     */
    public function getPrzesylka()
    {
        return $this->przesylka;
    }

    /**
     * Sets a new przesylka
     *
     * @param \Abryb\ENadawca\Type\PrzesylkaType $przesylka
     * @return self
     */
    public function setPrzesylka(\Abryb\ENadawca\Type\PrzesylkaType $przesylka)
    {
        $this->przesylka = $przesylka;
        return $this;
    }

    /**
     * Gets as powodReklamacji
     *
     * @return \Abryb\ENadawca\Type\PowodReklamacjiType
     */
    public function getPowodReklamacji()
    {
        return $this->powodReklamacji;
    }

    /**
     * Sets a new powodReklamacji
     *
     * @param \Abryb\ENadawca\Type\PowodReklamacjiType $powodReklamacji
     * @return self
     */
    public function setPowodReklamacji(\Abryb\ENadawca\Type\PowodReklamacjiType $powodReklamacji)
    {
        $this->powodReklamacji = $powodReklamacji;
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
     * Gets as numerFaktury
     *
     * @return string
     */
    public function getNumerFaktury()
    {
        return $this->numerFaktury;
    }

    /**
     * Sets a new numerFaktury
     *
     * @param string $numerFaktury
     * @return self
     */
    public function setNumerFaktury($numerFaktury)
    {
        $this->numerFaktury = $numerFaktury;
        return $this;
    }

    /**
     * Gets as ezgoda
     *
     * @return bool
     */
    public function getEzgoda()
    {
        return $this->ezgoda;
    }

    /**
     * Sets a new ezgoda
     *
     * @param bool $ezgoda
     * @return self
     */
    public function setEzgoda($ezgoda)
    {
        $this->ezgoda = $ezgoda;
        return $this;
    }
}

