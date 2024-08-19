<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PaczkaZagranicznaType
 *
 *
 * XSD Type: paczkaZagranicznaType
 */
class PaczkaZagranicznaType extends PrzesylkaRejestrowanaType
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
     * @var int $wartosc
     */
    protected $wartosc = null;

    /**
     * @var string $kategoria
     */
    protected $kategoria = null;

    /**
     * @var int $iloscPotwierdzenOdbioru
     */
    protected $iloscPotwierdzenOdbioru = null;

    /**
     * @var bool $utrudnionaManipulacja
     */
    protected $utrudnionaManipulacja = null;

    /**
     * @var bool $ekspres
     */
    protected $ekspres = null;

    /**
     * atrybut przestarzały (deprecated), należy
     *  używać typu
     *  deklaracjaCelna2Type i elementu
     *  numerReferencyjnyCelny
     *
     * @var string $numerReferencyjnyCelny
     */
    protected $numerReferencyjnyCelny = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var \Abryb\ENadawca\Type\ZwrotType $zwrot
     */
    protected $zwrot = null;

    /**
     * @var \Abryb\ENadawca\Type\DeklaracjaCelnaType $deklaracjaCelna
     */
    protected $deklaracjaCelna = null;

    /**
     * @var \Abryb\ENadawca\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     */
    protected $deklaracjaCelna2 = null;

    /**
     * @var string $sposobNadaniaInterconnect
     */
    protected $sposobNadaniaInterconnect = null;

    /**
     * @var \Abryb\ENadawca\Type\SposobDoreczeniaType $sposobDoreczenia
     */
    protected $sposobDoreczenia = null;

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
     * @return int
     */
    public function getIloscPotwierdzenOdbioru()
    {
        return $this->iloscPotwierdzenOdbioru;
    }

    /**
     * Sets a new iloscPotwierdzenOdbioru
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
     * Gets as utrudnionaManipulacja
     *
     * @return bool
     */
    public function getUtrudnionaManipulacja()
    {
        return $this->utrudnionaManipulacja;
    }

    /**
     * Sets a new utrudnionaManipulacja
     *
     * @param bool $utrudnionaManipulacja
     * @return self
     */
    public function setUtrudnionaManipulacja($utrudnionaManipulacja)
    {
        $this->utrudnionaManipulacja = $utrudnionaManipulacja;
        return $this;
    }

    /**
     * Gets as ekspres
     *
     * @return bool
     */
    public function getEkspres()
    {
        return $this->ekspres;
    }

    /**
     * Sets a new ekspres
     *
     * @param bool $ekspres
     * @return self
     */
    public function setEkspres($ekspres)
    {
        $this->ekspres = $ekspres;
        return $this;
    }

    /**
     * Gets as numerReferencyjnyCelny
     *
     * atrybut przestarzały (deprecated), należy
     *  używać typu
     *  deklaracjaCelna2Type i elementu
     *  numerReferencyjnyCelny
     *
     * @return string
     */
    public function getNumerReferencyjnyCelny()
    {
        return $this->numerReferencyjnyCelny;
    }

    /**
     * Sets a new numerReferencyjnyCelny
     *
     * atrybut przestarzały (deprecated), należy
     *  używać typu
     *  deklaracjaCelna2Type i elementu
     *  numerReferencyjnyCelny
     *
     * @param string $numerReferencyjnyCelny
     * @return self
     */
    public function setNumerReferencyjnyCelny($numerReferencyjnyCelny)
    {
        $this->numerReferencyjnyCelny = $numerReferencyjnyCelny;
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
     * Gets as zwrot
     *
     * @return \Abryb\ENadawca\Type\ZwrotType
     */
    public function getZwrot()
    {
        return $this->zwrot;
    }

    /**
     * Sets a new zwrot
     *
     * @param \Abryb\ENadawca\Type\ZwrotType $zwrot
     * @return self
     */
    public function setZwrot(?\Abryb\ENadawca\Type\ZwrotType $zwrot = null)
    {
        $this->zwrot = $zwrot;
        return $this;
    }

    /**
     * Gets as deklaracjaCelna
     *
     * @return \Abryb\ENadawca\Type\DeklaracjaCelnaType
     */
    public function getDeklaracjaCelna()
    {
        return $this->deklaracjaCelna;
    }

    /**
     * Sets a new deklaracjaCelna
     *
     * @param \Abryb\ENadawca\Type\DeklaracjaCelnaType $deklaracjaCelna
     * @return self
     */
    public function setDeklaracjaCelna(?\Abryb\ENadawca\Type\DeklaracjaCelnaType $deklaracjaCelna = null)
    {
        $this->deklaracjaCelna = $deklaracjaCelna;
        return $this;
    }

    /**
     * Gets as deklaracjaCelna2
     *
     * @return \Abryb\ENadawca\Type\DeklaracjaCelna2Type
     */
    public function getDeklaracjaCelna2()
    {
        return $this->deklaracjaCelna2;
    }

    /**
     * Sets a new deklaracjaCelna2
     *
     * @param \Abryb\ENadawca\Type\DeklaracjaCelna2Type $deklaracjaCelna2
     * @return self
     */
    public function setDeklaracjaCelna2(?\Abryb\ENadawca\Type\DeklaracjaCelna2Type $deklaracjaCelna2 = null)
    {
        $this->deklaracjaCelna2 = $deklaracjaCelna2;
        return $this;
    }

    /**
     * Gets as sposobNadaniaInterconnect
     *
     * @return string
     */
    public function getSposobNadaniaInterconnect()
    {
        return $this->sposobNadaniaInterconnect;
    }

    /**
     * Sets a new sposobNadaniaInterconnect
     *
     * @param string $sposobNadaniaInterconnect
     * @return self
     */
    public function setSposobNadaniaInterconnect($sposobNadaniaInterconnect)
    {
        $this->sposobNadaniaInterconnect = $sposobNadaniaInterconnect;
        return $this;
    }

    /**
     * Gets as sposobDoreczenia
     *
     * @return \Abryb\ENadawca\Type\SposobDoreczeniaType
     */
    public function getSposobDoreczenia()
    {
        return $this->sposobDoreczenia;
    }

    /**
     * Sets a new sposobDoreczenia
     *
     * @param \Abryb\ENadawca\Type\SposobDoreczeniaType $sposobDoreczenia
     * @return self
     */
    public function setSposobDoreczenia(?\Abryb\ENadawca\Type\SposobDoreczeniaType $sposobDoreczenia = null)
    {
        $this->sposobDoreczenia = $sposobDoreczenia;
        return $this;
    }
}

