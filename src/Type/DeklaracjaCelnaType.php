<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing DeklaracjaCelnaType
 *
 *
 * XSD Type: deklaracjaCelnaType
 */
class DeklaracjaCelnaType
{
    /**
     * @var bool $podarunek
     */
    protected $podarunek = null;

    /**
     * @var bool $dokument
     */
    protected $dokument = null;

    /**
     * @var bool $probkaHandlowa
     */
    protected $probkaHandlowa = null;

    /**
     * @var bool $zwrotTowaru
     */
    protected $zwrotTowaru = null;

    /**
     * @var bool $towary
     */
    protected $towary = null;

    /**
     * @var bool $inny
     */
    protected $inny = null;

    /**
     * @var string $wyjasnienie
     */
    protected $wyjasnienie = null;

    /**
     * @var string $oplatyPocztowe
     */
    protected $oplatyPocztowe = null;

    /**
     * @var string $uwagi
     */
    protected $uwagi = null;

    /**
     * @var string $licencja
     */
    protected $licencja = null;

    /**
     * @var string $swiadectwo
     */
    protected $swiadectwo = null;

    /**
     * @var string $faktura
     */
    protected $faktura = null;

    /**
     * @var string $numerReferencyjnyImportera
     */
    protected $numerReferencyjnyImportera = null;

    /**
     * @var string $numerTelefonuImportera
     */
    protected $numerTelefonuImportera = null;

    /**
     * @var string $waluta
     */
    protected $waluta = null;

    /**
     * @var \Abryb\ENadawca\Type\SzczegolyDeklaracjiCelnejType[] $szczegoly
     */
    protected $szczegoly = [
        
    ];

    /**
     * Gets as podarunek
     *
     * @return bool
     */
    public function getPodarunek()
    {
        return $this->podarunek;
    }

    /**
     * Sets a new podarunek
     *
     * @param bool $podarunek
     * @return self
     */
    public function setPodarunek($podarunek)
    {
        $this->podarunek = $podarunek;
        return $this;
    }

    /**
     * Gets as dokument
     *
     * @return bool
     */
    public function getDokument()
    {
        return $this->dokument;
    }

    /**
     * Sets a new dokument
     *
     * @param bool $dokument
     * @return self
     */
    public function setDokument($dokument)
    {
        $this->dokument = $dokument;
        return $this;
    }

    /**
     * Gets as probkaHandlowa
     *
     * @return bool
     */
    public function getProbkaHandlowa()
    {
        return $this->probkaHandlowa;
    }

    /**
     * Sets a new probkaHandlowa
     *
     * @param bool $probkaHandlowa
     * @return self
     */
    public function setProbkaHandlowa($probkaHandlowa)
    {
        $this->probkaHandlowa = $probkaHandlowa;
        return $this;
    }

    /**
     * Gets as zwrotTowaru
     *
     * @return bool
     */
    public function getZwrotTowaru()
    {
        return $this->zwrotTowaru;
    }

    /**
     * Sets a new zwrotTowaru
     *
     * @param bool $zwrotTowaru
     * @return self
     */
    public function setZwrotTowaru($zwrotTowaru)
    {
        $this->zwrotTowaru = $zwrotTowaru;
        return $this;
    }

    /**
     * Gets as towary
     *
     * @return bool
     */
    public function getTowary()
    {
        return $this->towary;
    }

    /**
     * Sets a new towary
     *
     * @param bool $towary
     * @return self
     */
    public function setTowary($towary)
    {
        $this->towary = $towary;
        return $this;
    }

    /**
     * Gets as inny
     *
     * @return bool
     */
    public function getInny()
    {
        return $this->inny;
    }

    /**
     * Sets a new inny
     *
     * @param bool $inny
     * @return self
     */
    public function setInny($inny)
    {
        $this->inny = $inny;
        return $this;
    }

    /**
     * Gets as wyjasnienie
     *
     * @return string
     */
    public function getWyjasnienie()
    {
        return $this->wyjasnienie;
    }

    /**
     * Sets a new wyjasnienie
     *
     * @param string $wyjasnienie
     * @return self
     */
    public function setWyjasnienie($wyjasnienie)
    {
        $this->wyjasnienie = $wyjasnienie;
        return $this;
    }

    /**
     * Gets as oplatyPocztowe
     *
     * @return string
     */
    public function getOplatyPocztowe()
    {
        return $this->oplatyPocztowe;
    }

    /**
     * Sets a new oplatyPocztowe
     *
     * @param string $oplatyPocztowe
     * @return self
     */
    public function setOplatyPocztowe($oplatyPocztowe)
    {
        $this->oplatyPocztowe = $oplatyPocztowe;
        return $this;
    }

    /**
     * Gets as uwagi
     *
     * @return string
     */
    public function getUwagi()
    {
        return $this->uwagi;
    }

    /**
     * Sets a new uwagi
     *
     * @param string $uwagi
     * @return self
     */
    public function setUwagi($uwagi)
    {
        $this->uwagi = $uwagi;
        return $this;
    }

    /**
     * Gets as licencja
     *
     * @return string
     */
    public function getLicencja()
    {
        return $this->licencja;
    }

    /**
     * Sets a new licencja
     *
     * @param string $licencja
     * @return self
     */
    public function setLicencja($licencja)
    {
        $this->licencja = $licencja;
        return $this;
    }

    /**
     * Gets as swiadectwo
     *
     * @return string
     */
    public function getSwiadectwo()
    {
        return $this->swiadectwo;
    }

    /**
     * Sets a new swiadectwo
     *
     * @param string $swiadectwo
     * @return self
     */
    public function setSwiadectwo($swiadectwo)
    {
        $this->swiadectwo = $swiadectwo;
        return $this;
    }

    /**
     * Gets as faktura
     *
     * @return string
     */
    public function getFaktura()
    {
        return $this->faktura;
    }

    /**
     * Sets a new faktura
     *
     * @param string $faktura
     * @return self
     */
    public function setFaktura($faktura)
    {
        $this->faktura = $faktura;
        return $this;
    }

    /**
     * Gets as numerReferencyjnyImportera
     *
     * @return string
     */
    public function getNumerReferencyjnyImportera()
    {
        return $this->numerReferencyjnyImportera;
    }

    /**
     * Sets a new numerReferencyjnyImportera
     *
     * @param string $numerReferencyjnyImportera
     * @return self
     */
    public function setNumerReferencyjnyImportera($numerReferencyjnyImportera)
    {
        $this->numerReferencyjnyImportera = $numerReferencyjnyImportera;
        return $this;
    }

    /**
     * Gets as numerTelefonuImportera
     *
     * @return string
     */
    public function getNumerTelefonuImportera()
    {
        return $this->numerTelefonuImportera;
    }

    /**
     * Sets a new numerTelefonuImportera
     *
     * @param string $numerTelefonuImportera
     * @return self
     */
    public function setNumerTelefonuImportera($numerTelefonuImportera)
    {
        $this->numerTelefonuImportera = $numerTelefonuImportera;
        return $this;
    }

    /**
     * Gets as waluta
     *
     * @return string
     */
    public function getWaluta()
    {
        return $this->waluta;
    }

    /**
     * Sets a new waluta
     *
     * @param string $waluta
     * @return self
     */
    public function setWaluta($waluta)
    {
        $this->waluta = $waluta;
        return $this;
    }

    /**
     * Adds as szczegoly
     *
     * @return self
     * @param \Abryb\ENadawca\Type\SzczegolyDeklaracjiCelnejType $szczegoly
     */
    public function addToSzczegoly(\Abryb\ENadawca\Type\SzczegolyDeklaracjiCelnejType $szczegoly)
    {
        $this->szczegoly[] = $szczegoly;
        return $this;
    }

    /**
     * isset szczegoly
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSzczegoly($index)
    {
        return isset($this->szczegoly[$index]);
    }

    /**
     * unset szczegoly
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSzczegoly($index)
    {
        unset($this->szczegoly[$index]);
    }

    /**
     * Gets as szczegoly
     *
     * @return \Abryb\ENadawca\Type\SzczegolyDeklaracjiCelnejType[]
     */
    public function getSzczegoly()
    {
        return $this->szczegoly;
    }

    /**
     * Sets a new szczegoly
     *
     * @param \Abryb\ENadawca\Type\SzczegolyDeklaracjiCelnejType[] $szczegoly
     * @return self
     */
    public function setSzczegoly(array $szczegoly)
    {
        $this->szczegoly = $szczegoly;
        return $this;
    }
}

