<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaProceduralnaType
 *
 *
 * XSD Type: przesylkaProceduralnaType
 */
class PrzesylkaProceduralnaType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $serwis
     */
    protected $serwis = null;

    /**
     * @var string $numerNadaniaPowrot1
     */
    protected $numerNadaniaPowrot1 = null;

    /**
     * @var string $numerNadaniaPowrot2
     */
    protected $numerNadaniaPowrot2 = null;

    /**
     * @var int $idPrzesylkaZawartosc
     */
    protected $idPrzesylkaZawartosc = null;

    /**
     * @var int $idListaCzynnosci
     */
    protected $idListaCzynnosci = null;

    /**
     * @var int $masa
     */
    protected $masa = null;

    /**
     * @var string $opakowanie
     */
    protected $opakowanie = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var int $wartosc
     */
    protected $wartosc = null;

    /**
     * @var int $idAdresPrzesylkaPowrot
     */
    protected $idAdresPrzesylkaPowrot = null;

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var \Abryb\ENadawca\Type\EPOType $epo
     */
    protected $epo = null;

    /**
     * @var \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @var \Abryb\ENadawca\Type\PobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * Gets as serwis
     *
     * @return string
     */
    public function getSerwis()
    {
        return $this->serwis;
    }

    /**
     * Sets a new serwis
     *
     * @param string $serwis
     * @return self
     */
    public function setSerwis($serwis)
    {
        $this->serwis = $serwis;
        return $this;
    }

    /**
     * Gets as numerNadaniaPowrot1
     *
     * @return string
     */
    public function getNumerNadaniaPowrot1()
    {
        return $this->numerNadaniaPowrot1;
    }

    /**
     * Sets a new numerNadaniaPowrot1
     *
     * @param string $numerNadaniaPowrot1
     * @return self
     */
    public function setNumerNadaniaPowrot1($numerNadaniaPowrot1)
    {
        $this->numerNadaniaPowrot1 = $numerNadaniaPowrot1;
        return $this;
    }

    /**
     * Gets as numerNadaniaPowrot2
     *
     * @return string
     */
    public function getNumerNadaniaPowrot2()
    {
        return $this->numerNadaniaPowrot2;
    }

    /**
     * Sets a new numerNadaniaPowrot2
     *
     * @param string $numerNadaniaPowrot2
     * @return self
     */
    public function setNumerNadaniaPowrot2($numerNadaniaPowrot2)
    {
        $this->numerNadaniaPowrot2 = $numerNadaniaPowrot2;
        return $this;
    }

    /**
     * Gets as idPrzesylkaZawartosc
     *
     * @return int
     */
    public function getIdPrzesylkaZawartosc()
    {
        return $this->idPrzesylkaZawartosc;
    }

    /**
     * Sets a new idPrzesylkaZawartosc
     *
     * @param int $idPrzesylkaZawartosc
     * @return self
     */
    public function setIdPrzesylkaZawartosc($idPrzesylkaZawartosc)
    {
        $this->idPrzesylkaZawartosc = $idPrzesylkaZawartosc;
        return $this;
    }

    /**
     * Gets as idListaCzynnosci
     *
     * @return int
     */
    public function getIdListaCzynnosci()
    {
        return $this->idListaCzynnosci;
    }

    /**
     * Sets a new idListaCzynnosci
     *
     * @param int $idListaCzynnosci
     * @return self
     */
    public function setIdListaCzynnosci($idListaCzynnosci)
    {
        $this->idListaCzynnosci = $idListaCzynnosci;
        return $this;
    }

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

    /**
     * Gets as opakowanie
     *
     * @return string
     */
    public function getOpakowanie()
    {
        return $this->opakowanie;
    }

    /**
     * Sets a new opakowanie
     *
     * @param string $opakowanie
     * @return self
     */
    public function setOpakowanie($opakowanie)
    {
        $this->opakowanie = $opakowanie;
        return $this;
    }

    /**
     * Gets as numerPrzesylkiKlienta
     *
     * @return string
     */
    public function getNumerPrzesylkiKlienta()
    {
        return $this->numerPrzesylkiKlienta;
    }

    /**
     * Sets a new numerPrzesylkiKlienta
     *
     * @param string $numerPrzesylkiKlienta
     * @return self
     */
    public function setNumerPrzesylkiKlienta($numerPrzesylkiKlienta)
    {
        $this->numerPrzesylkiKlienta = $numerPrzesylkiKlienta;
        return $this;
    }

    /**
     * Gets as wartosc
     *
     * @return int
     */
    public function getWartosc()
    {
        return $this->wartosc;
    }

    /**
     * Sets a new wartosc
     *
     * @param int $wartosc
     * @return self
     */
    public function setWartosc($wartosc)
    {
        $this->wartosc = $wartosc;
        return $this;
    }

    /**
     * Gets as idAdresPrzesylkaPowrot
     *
     * @return int
     */
    public function getIdAdresPrzesylkaPowrot()
    {
        return $this->idAdresPrzesylkaPowrot;
    }

    /**
     * Sets a new idAdresPrzesylkaPowrot
     *
     * @param int $idAdresPrzesylkaPowrot
     * @return self
     */
    public function setIdAdresPrzesylkaPowrot($idAdresPrzesylkaPowrot)
    {
        $this->idAdresPrzesylkaPowrot = $idAdresPrzesylkaPowrot;
        return $this;
    }

    /**
     * Gets as ubezpieczenie
     *
     * @return \Abryb\ENadawca\Type\UbezpieczenieType
     */
    public function getUbezpieczenie()
    {
        return $this->ubezpieczenie;
    }

    /**
     * Sets a new ubezpieczenie
     *
     * @param \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     * @return self
     */
    public function setUbezpieczenie(?\Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie = null)
    {
        $this->ubezpieczenie = $ubezpieczenie;
        return $this;
    }

    /**
     * Gets as epo
     *
     * @return \Abryb\ENadawca\Type\EPOType
     */
    public function getEpo()
    {
        return $this->epo;
    }

    /**
     * Sets a new epo
     *
     * @param \Abryb\ENadawca\Type\EPOType $epo
     * @return self
     */
    public function setEpo(?\Abryb\ENadawca\Type\EPOType $epo = null)
    {
        $this->epo = $epo;
        return $this;
    }

    /**
     * Gets as urzadWydaniaEPrzesylki
     *
     * @return \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType
     */
    public function getUrzadWydaniaEPrzesylki()
    {
        return $this->urzadWydaniaEPrzesylki;
    }

    /**
     * Sets a new urzadWydaniaEPrzesylki
     *
     * @param \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     * @return self
     */
    public function setUrzadWydaniaEPrzesylki(?\Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki = null)
    {
        $this->urzadWydaniaEPrzesylki = $urzadWydaniaEPrzesylki;
        return $this;
    }

    /**
     * Gets as pobranie
     *
     * @return \Abryb\ENadawca\Type\PobranieType
     */
    public function getPobranie()
    {
        return $this->pobranie;
    }

    /**
     * Sets a new pobranie
     *
     * @param \Abryb\ENadawca\Type\PobranieType $pobranie
     * @return self
     */
    public function setPobranie(?\Abryb\ENadawca\Type\PobranieType $pobranie = null)
    {
        $this->pobranie = $pobranie;
        return $this;
    }
}

