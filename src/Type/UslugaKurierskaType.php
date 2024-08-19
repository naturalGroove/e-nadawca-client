<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing UslugaKurierskaType
 *
 *
 * XSD Type: uslugaKurierskaType
 */
class UslugaKurierskaType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $zasadySpecjalne
     */
    protected $zasadySpecjalne = null;

    /**
     * @var int $masa
     */
    protected $masa = null;

    /**
     * @var int $wartosc
     */
    protected $wartosc = null;

    /**
     * @var bool $ponadgabaryt
     */
    protected $ponadgabaryt = null;

    /**
     * @var int $odleglosc
     */
    protected $odleglosc = null;

    /**
     * @var string $zawartosc
     */
    protected $zawartosc = null;

    /**
     * @var bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    protected $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var bool $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var string $uiszczaOplate
     */
    protected $uiszczaOplate = null;

    /**
     * @var string $termin
     */
    protected $termin = null;

    /**
     * @var string $opakowanie
     */
    protected $opakowanie = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    protected $numerTransakcjiOdbioru = null;

    /**
     * @var \Abryb\ENadawca\Type\PobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * @var \Abryb\ENadawca\Type\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     */
    protected $odbiorPrzesylkiOdNadawcy = null;

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

    /**
     * @var \Abryb\ENadawca\Type\UrzadWydaniaEPrzesylkiType $urzadWydaniaEPrzesylki
     */
    protected $urzadWydaniaEPrzesylki = null;

    /**
     * @var \Abryb\ENadawca\Type\SubUslugaKurierskaType[] $subPrzesylka
     */
    protected $subPrzesylka = [
        
    ];

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     */
    protected $potwierdzenieOdbioru = null;

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * @var \Abryb\ENadawca\Type\ZwrotDokumentowKurierskaType $zwrotDokumentow
     */
    protected $zwrotDokumentow = null;

    /**
     * @var int $idDokumentyZwrotneAdresy
     */
    protected $idDokumentyZwrotneAdresy = null;

    /**
     * @var \Abryb\ENadawca\Type\DoreczenieUslugaKurierskaType $doreczenie
     */
    protected $doreczenie = null;

    /**
     * @var \Abryb\ENadawca\Type\EPOType $epo
     */
    protected $epo = null;

    /**
     * @var \Abryb\ENadawca\Type\AdresType $adresDlaZwrotu
     */
    protected $adresDlaZwrotu = null;

    /**
     * Gets as zasadySpecjalne
     *
     * @return string
     */
    public function getZasadySpecjalne()
    {
        return $this->zasadySpecjalne;
    }

    /**
     * Sets a new zasadySpecjalne
     *
     * @param string $zasadySpecjalne
     * @return self
     */
    public function setZasadySpecjalne($zasadySpecjalne)
    {
        $this->zasadySpecjalne = $zasadySpecjalne;
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
     * Gets as ponadgabaryt
     *
     * @return bool
     */
    public function getPonadgabaryt()
    {
        return $this->ponadgabaryt;
    }

    /**
     * Sets a new ponadgabaryt
     *
     * @param bool $ponadgabaryt
     * @return self
     */
    public function setPonadgabaryt($ponadgabaryt)
    {
        $this->ponadgabaryt = $ponadgabaryt;
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
     * Gets as zawartosc
     *
     * @return string
     */
    public function getZawartosc()
    {
        return $this->zawartosc;
    }

    /**
     * Sets a new zawartosc
     *
     * @param string $zawartosc
     * @return self
     */
    public function setZawartosc($zawartosc)
    {
        $this->zawartosc = $zawartosc;
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

    /**
     * Gets as ostroznie
     *
     * @return bool
     */
    public function getOstroznie()
    {
        return $this->ostroznie;
    }

    /**
     * Sets a new ostroznie
     *
     * @param bool $ostroznie
     * @return self
     */
    public function setOstroznie($ostroznie)
    {
        $this->ostroznie = $ostroznie;
        return $this;
    }

    /**
     * Gets as uiszczaOplate
     *
     * @return string
     */
    public function getUiszczaOplate()
    {
        return $this->uiszczaOplate;
    }

    /**
     * Sets a new uiszczaOplate
     *
     * @param string $uiszczaOplate
     * @return self
     */
    public function setUiszczaOplate($uiszczaOplate)
    {
        $this->uiszczaOplate = $uiszczaOplate;
        return $this;
    }

    /**
     * Gets as termin
     *
     * @return string
     */
    public function getTermin()
    {
        return $this->termin;
    }

    /**
     * Sets a new termin
     *
     * @param string $termin
     * @return self
     */
    public function setTermin($termin)
    {
        $this->termin = $termin;
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
     * Gets as numerTransakcjiOdbioru
     *
     * @return string
     */
    public function getNumerTransakcjiOdbioru()
    {
        return $this->numerTransakcjiOdbioru;
    }

    /**
     * Sets a new numerTransakcjiOdbioru
     *
     * @param string $numerTransakcjiOdbioru
     * @return self
     */
    public function setNumerTransakcjiOdbioru($numerTransakcjiOdbioru)
    {
        $this->numerTransakcjiOdbioru = $numerTransakcjiOdbioru;
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

    /**
     * Gets as odbiorPrzesylkiOdNadawcy
     *
     * @return \Abryb\ENadawca\Type\OdbiorPrzesylkiOdNadawcyType
     */
    public function getOdbiorPrzesylkiOdNadawcy()
    {
        return $this->odbiorPrzesylkiOdNadawcy;
    }

    /**
     * Sets a new odbiorPrzesylkiOdNadawcy
     *
     * @param \Abryb\ENadawca\Type\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy
     * @return self
     */
    public function setOdbiorPrzesylkiOdNadawcy(?\Abryb\ENadawca\Type\OdbiorPrzesylkiOdNadawcyType $odbiorPrzesylkiOdNadawcy = null)
    {
        $this->odbiorPrzesylkiOdNadawcy = $odbiorPrzesylkiOdNadawcy;
        return $this;
    }

    /**
     * Gets as potwierdzenieDoreczenia
     *
     * @return \Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType
     */
    public function getPotwierdzenieDoreczenia()
    {
        return $this->potwierdzenieDoreczenia;
    }

    /**
     * Sets a new potwierdzenieDoreczenia
     *
     * @param \Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     * @return self
     */
    public function setPotwierdzenieDoreczenia(?\Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia = null)
    {
        $this->potwierdzenieDoreczenia = $potwierdzenieDoreczenia;
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
     * Adds as subPrzesylka
     *
     * @return self
     * @param \Abryb\ENadawca\Type\SubUslugaKurierskaType $subPrzesylka
     */
    public function addToSubPrzesylka(\Abryb\ENadawca\Type\SubUslugaKurierskaType $subPrzesylka)
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
     * @return \Abryb\ENadawca\Type\SubUslugaKurierskaType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \Abryb\ENadawca\Type\SubUslugaKurierskaType[] $subPrzesylka
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka = null)
    {
        $this->subPrzesylka = $subPrzesylka;
        return $this;
    }

    /**
     * Gets as potwierdzenieOdbioru
     *
     * @return \Abryb\ENadawca\Type\PotwierdzenieOdbioruKurierskaType
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Sets a new potwierdzenieOdbioru
     *
     * @param \Abryb\ENadawca\Type\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru
     * @return self
     */
    public function setPotwierdzenieOdbioru(?\Abryb\ENadawca\Type\PotwierdzenieOdbioruKurierskaType $potwierdzenieOdbioru = null)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
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
     * Gets as zwrotDokumentow
     *
     * @return \Abryb\ENadawca\Type\ZwrotDokumentowKurierskaType
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Sets a new zwrotDokumentow
     *
     * @param \Abryb\ENadawca\Type\ZwrotDokumentowKurierskaType $zwrotDokumentow
     * @return self
     */
    public function setZwrotDokumentow(?\Abryb\ENadawca\Type\ZwrotDokumentowKurierskaType $zwrotDokumentow = null)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        return $this;
    }

    /**
     * Gets as idDokumentyZwrotneAdresy
     *
     * @return int
     */
    public function getIdDokumentyZwrotneAdresy()
    {
        return $this->idDokumentyZwrotneAdresy;
    }

    /**
     * Sets a new idDokumentyZwrotneAdresy
     *
     * @param int $idDokumentyZwrotneAdresy
     * @return self
     */
    public function setIdDokumentyZwrotneAdresy($idDokumentyZwrotneAdresy)
    {
        $this->idDokumentyZwrotneAdresy = $idDokumentyZwrotneAdresy;
        return $this;
    }

    /**
     * Gets as doreczenie
     *
     * @return \Abryb\ENadawca\Type\DoreczenieUslugaKurierskaType
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Sets a new doreczenie
     *
     * @param \Abryb\ENadawca\Type\DoreczenieUslugaKurierskaType $doreczenie
     * @return self
     */
    public function setDoreczenie(?\Abryb\ENadawca\Type\DoreczenieUslugaKurierskaType $doreczenie = null)
    {
        $this->doreczenie = $doreczenie;
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
     * Gets as adresDlaZwrotu
     *
     * @return \Abryb\ENadawca\Type\AdresType
     */
    public function getAdresDlaZwrotu()
    {
        return $this->adresDlaZwrotu;
    }

    /**
     * Sets a new adresDlaZwrotu
     *
     * @param \Abryb\ENadawca\Type\AdresType $adresDlaZwrotu
     * @return self
     */
    public function setAdresDlaZwrotu(?\Abryb\ENadawca\Type\AdresType $adresDlaZwrotu = null)
    {
        $this->adresDlaZwrotu = $adresDlaZwrotu;
        return $this;
    }
}

