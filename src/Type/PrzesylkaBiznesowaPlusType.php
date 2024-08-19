<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaBiznesowaPlusType
 *
 *
 * XSD Type: przesylkaBiznesowaPlusType
 */
class PrzesylkaBiznesowaPlusType extends PrzesylkaRejestrowanaType
{
    /**
     * @var bool $posteRestante
     */
    protected $posteRestante = null;

    /**
     * @var int $masa
     */
    protected $masa = null;

    /**
     * @var string $gabaryt
     */
    protected $gabaryt = null;

    /**
     * @var int $wartosc
     */
    protected $wartosc = null;

    /**
     * @var int $kwotaTranzakcji
     */
    protected $kwotaTranzakcji = null;

    /**
     * @var bool $ostroznie
     */
    protected $ostroznie = null;

    /**
     * @var string $kategoria
     */
    protected $kategoria = null;

    /**
     * atrybut nieużywany, użyj potwierdzenieOdbioru
     *
     * @var int $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru = null;

    /**
     * @var string $eKontaktAdresata
     */
    protected $eKontaktAdresata = null;

    /**
     * @var string $eSposobPowiadomieniaAdresata
     */
    protected $eSposobPowiadomieniaAdresata = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var int $iloscDniOczekiwaniaNaWydanie
     */
    protected $iloscDniOczekiwaniaNaWydanie = null;

    /**
     * @var \DateTime $oczekiwanyTerminDoreczenia
     */
    protected $oczekiwanyTerminDoreczenia = null;

    /**
     * @var string $terminRodzajPlus
     */
    protected $terminRodzajPlus = null;

    /**
     * @var string $numerTransakcjiOdbioru
     */
    protected $numerTransakcjiOdbioru = null;

    /**
     * @var \Abryb\ENadawca\Type\PobranieType $pobranie
     */
    protected $pobranie = null;

    /**
     * Wystarczy przesłac obiekt z ustawionym id
     *  reszta pól moż ezostać pominięta (aby zmniejszyć ilośc danych
     *  do tansmisji)
     *
     * @var \Abryb\ENadawca\Type\PlacowkaPocztowaType $urzadWydaniaPrzesylki
     */
    protected $urzadWydaniaPrzesylki = null;

    /**
     * @var \Abryb\ENadawca\Type\SubPrzesylkaBiznesowaPlusType[] $subPrzesylka
     */
    protected $subPrzesylka = [
        
    ];

    /**
     * @var \DateTime $dataDrugiejProbyDoreczenia
     */
    protected $dataDrugiejProbyDoreczenia = null;

    /**
     * @var int $drugaProbaDoreczeniaPoLiczbieDni
     */
    protected $drugaProbaDoreczeniaPoLiczbieDni = null;

    /**
     * @var bool $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce
     */
    protected $sprawdzenieZawartosciPrzesylkiPrzezOdbiorce = null;

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     */
    protected $potwierdzenieOdbioru = null;

    /**
     * @var \Abryb\ENadawca\Type\DoreczenieBiznesowaType $doreczenie
     */
    protected $doreczenie = null;

    /**
     * @var \Abryb\ENadawca\Type\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     */
    protected $zwrotDokumentow = null;

    /**
     * Gets as posteRestante
     *
     * @return bool
     */
    public function getPosteRestante()
    {
        return $this->posteRestante;
    }

    /**
     * Sets a new posteRestante
     *
     * @param bool $posteRestante
     * @return self
     */
    public function setPosteRestante($posteRestante)
    {
        $this->posteRestante = $posteRestante;
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
     * Gets as gabaryt
     *
     * @return string
     */
    public function getGabaryt()
    {
        return $this->gabaryt;
    }

    /**
     * Sets a new gabaryt
     *
     * @param string $gabaryt
     * @return self
     */
    public function setGabaryt($gabaryt)
    {
        $this->gabaryt = $gabaryt;
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
     * Gets as kwotaTranzakcji
     *
     * @return int
     */
    public function getKwotaTranzakcji()
    {
        return $this->kwotaTranzakcji;
    }

    /**
     * Sets a new kwotaTranzakcji
     *
     * @param int $kwotaTranzakcji
     * @return self
     */
    public function setKwotaTranzakcji($kwotaTranzakcji)
    {
        $this->kwotaTranzakcji = $kwotaTranzakcji;
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
     * Gets as kategoria
     *
     * @return string
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Sets a new kategoria
     *
     * @param string $kategoria
     * @return self
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;
        return $this;
    }

    /**
     * Gets as iloscPotwierdzenOdbioru
     *
     * atrybut nieużywany, użyj potwierdzenieOdbioru
     *
     * @return int
     */
    public function getIloscPotwierdzenOdbioru()
    {
        return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * Sets a new iloscPotwierdzenOdbioru
     *
     * atrybut nieużywany, użyj potwierdzenieOdbioru
     *
     * @param int $iloscPotwierdzenOdbioru
     * @return self
     */
    public function setIloscPotwierdzenOdbioru($iloscPotwierdzenOdbioru)
    {
        $this->iloscPotwierdzenOdbioru = $iloscPotwierdzenOdbioru;
        return $this;
    }

    /**
     * Gets as eKontaktAdresata
     *
     * @return string
     */
    public function getEKontaktAdresata()
    {
        return $this->eKontaktAdresata;
    }

    /**
     * Sets a new eKontaktAdresata
     *
     * @param string $eKontaktAdresata
     * @return self
     */
    public function setEKontaktAdresata($eKontaktAdresata)
    {
        $this->eKontaktAdresata = $eKontaktAdresata;
        return $this;
    }

    /**
     * Gets as eSposobPowiadomieniaAdresata
     *
     * @return string
     */
    public function getESposobPowiadomieniaAdresata()
    {
        return $this->eSposobPowiadomieniaAdresata;
    }

    /**
     * Sets a new eSposobPowiadomieniaAdresata
     *
     * @param string $eSposobPowiadomieniaAdresata
     * @return self
     */
    public function setESposobPowiadomieniaAdresata($eSposobPowiadomieniaAdresata)
    {
        $this->eSposobPowiadomieniaAdresata = $eSposobPowiadomieniaAdresata;
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
     * Gets as iloscDniOczekiwaniaNaWydanie
     *
     * @return int
     */
    public function getIloscDniOczekiwaniaNaWydanie()
    {
        return $this->iloscDniOczekiwaniaNaWydanie;
    }

    /**
     * Sets a new iloscDniOczekiwaniaNaWydanie
     *
     * @param int $iloscDniOczekiwaniaNaWydanie
     * @return self
     */
    public function setIloscDniOczekiwaniaNaWydanie($iloscDniOczekiwaniaNaWydanie)
    {
        $this->iloscDniOczekiwaniaNaWydanie = $iloscDniOczekiwaniaNaWydanie;
        return $this;
    }

    /**
     * Gets as oczekiwanyTerminDoreczenia
     *
     * @return \DateTime
     */
    public function getOczekiwanyTerminDoreczenia()
    {
        return $this->oczekiwanyTerminDoreczenia;
    }

    /**
     * Sets a new oczekiwanyTerminDoreczenia
     *
     * @param \DateTime $oczekiwanyTerminDoreczenia
     * @return self
     */
    public function setOczekiwanyTerminDoreczenia(\DateTime $oczekiwanyTerminDoreczenia)
    {
        $this->oczekiwanyTerminDoreczenia = $oczekiwanyTerminDoreczenia;
        return $this;
    }

    /**
     * Gets as terminRodzajPlus
     *
     * @return string
     */
    public function getTerminRodzajPlus()
    {
        return $this->terminRodzajPlus;
    }

    /**
     * Sets a new terminRodzajPlus
     *
     * @param string $terminRodzajPlus
     * @return self
     */
    public function setTerminRodzajPlus($terminRodzajPlus)
    {
        $this->terminRodzajPlus = $terminRodzajPlus;
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
     * Gets as urzadWydaniaPrzesylki
     *
     * Wystarczy przesłac obiekt z ustawionym id
     *  reszta pól moż ezostać pominięta (aby zmniejszyć ilośc danych
     *  do tansmisji)
     *
     * @return \Abryb\ENadawca\Type\PlacowkaPocztowaType
     */
    public function getUrzadWydaniaPrzesylki()
    {
        return $this->urzadWydaniaPrzesylki;
    }

    /**
     * Sets a new urzadWydaniaPrzesylki
     *
     * Wystarczy przesłac obiekt z ustawionym id
     *  reszta pól moż ezostać pominięta (aby zmniejszyć ilośc danych
     *  do tansmisji)
     *
     * @param \Abryb\ENadawca\Type\PlacowkaPocztowaType $urzadWydaniaPrzesylki
     * @return self
     */
    public function setUrzadWydaniaPrzesylki(?\Abryb\ENadawca\Type\PlacowkaPocztowaType $urzadWydaniaPrzesylki = null)
    {
        $this->urzadWydaniaPrzesylki = $urzadWydaniaPrzesylki;
        return $this;
    }

    /**
     * Adds as subPrzesylka
     *
     * @return self
     * @param \Abryb\ENadawca\Type\SubPrzesylkaBiznesowaPlusType $subPrzesylka
     */
    public function addToSubPrzesylka(\Abryb\ENadawca\Type\SubPrzesylkaBiznesowaPlusType $subPrzesylka)
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
     * @return \Abryb\ENadawca\Type\SubPrzesylkaBiznesowaPlusType[]
     */
    public function getSubPrzesylka()
    {
        return $this->subPrzesylka;
    }

    /**
     * Sets a new subPrzesylka
     *
     * @param \Abryb\ENadawca\Type\SubPrzesylkaBiznesowaPlusType[] $subPrzesylka
     * @return self
     */
    public function setSubPrzesylka(array $subPrzesylka = null)
    {
        $this->subPrzesylka = $subPrzesylka;
        return $this;
    }

    /**
     * Gets as dataDrugiejProbyDoreczenia
     *
     * @return \DateTime
     */
    public function getDataDrugiejProbyDoreczenia()
    {
        return $this->dataDrugiejProbyDoreczenia;
    }

    /**
     * Sets a new dataDrugiejProbyDoreczenia
     *
     * @param \DateTime $dataDrugiejProbyDoreczenia
     * @return self
     */
    public function setDataDrugiejProbyDoreczenia(?\DateTime $dataDrugiejProbyDoreczenia = null)
    {
        $this->dataDrugiejProbyDoreczenia = $dataDrugiejProbyDoreczenia;
        return $this;
    }

    /**
     * Gets as drugaProbaDoreczeniaPoLiczbieDni
     *
     * @return int
     */
    public function getDrugaProbaDoreczeniaPoLiczbieDni()
    {
        return $this->drugaProbaDoreczeniaPoLiczbieDni;
    }

    /**
     * Sets a new drugaProbaDoreczeniaPoLiczbieDni
     *
     * @param int $drugaProbaDoreczeniaPoLiczbieDni
     * @return self
     */
    public function setDrugaProbaDoreczeniaPoLiczbieDni($drugaProbaDoreczeniaPoLiczbieDni)
    {
        $this->drugaProbaDoreczeniaPoLiczbieDni = $drugaProbaDoreczeniaPoLiczbieDni;
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
     * Gets as potwierdzenieOdbioru
     *
     * @return \Abryb\ENadawca\Type\PotwierdzenieOdbioruBiznesowaType
     */
    public function getPotwierdzenieOdbioru()
    {
        return $this->potwierdzenieOdbioru;
    }

    /**
     * Sets a new potwierdzenieOdbioru
     *
     * @param \Abryb\ENadawca\Type\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru
     * @return self
     */
    public function setPotwierdzenieOdbioru(?\Abryb\ENadawca\Type\PotwierdzenieOdbioruBiznesowaType $potwierdzenieOdbioru = null)
    {
        $this->potwierdzenieOdbioru = $potwierdzenieOdbioru;
        return $this;
    }

    /**
     * Gets as doreczenie
     *
     * @return \Abryb\ENadawca\Type\DoreczenieBiznesowaType
     */
    public function getDoreczenie()
    {
        return $this->doreczenie;
    }

    /**
     * Sets a new doreczenie
     *
     * @param \Abryb\ENadawca\Type\DoreczenieBiznesowaType $doreczenie
     * @return self
     */
    public function setDoreczenie(?\Abryb\ENadawca\Type\DoreczenieBiznesowaType $doreczenie = null)
    {
        $this->doreczenie = $doreczenie;
        return $this;
    }

    /**
     * Gets as zwrotDokumentow
     *
     * @return \Abryb\ENadawca\Type\ZwrotDokumentowBiznesowaType
     */
    public function getZwrotDokumentow()
    {
        return $this->zwrotDokumentow;
    }

    /**
     * Sets a new zwrotDokumentow
     *
     * @param \Abryb\ENadawca\Type\ZwrotDokumentowBiznesowaType $zwrotDokumentow
     * @return self
     */
    public function setZwrotDokumentow(?\Abryb\ENadawca\Type\ZwrotDokumentowBiznesowaType $zwrotDokumentow = null)
    {
        $this->zwrotDokumentow = $zwrotDokumentow;
        return $this;
    }
}

