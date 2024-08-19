<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PlacowkaPocztowaType
 *
 *
 * XSD Type: placowkaPocztowaType
 */
class PlacowkaPocztowaType
{
    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $prefixNazwy
     */
    protected $prefixNazwy = null;

    /**
     * @var string $nazwa
     */
    protected $nazwa = null;

    /**
     * @var string $wojewodztwo
     */
    protected $wojewodztwo = null;

    /**
     * @var string $powiat
     */
    protected $powiat = null;

    /**
     * @var string $miejsce
     */
    protected $miejsce = null;

    /**
     * @var string $kodPocztowy
     */
    protected $kodPocztowy = null;

    /**
     * @var string $miejscowosc
     */
    protected $miejscowosc = null;

    /**
     * @var string $ulica
     */
    protected $ulica = null;

    /**
     * @var string $numerDomu
     */
    protected $numerDomu = null;

    /**
     * @var string $numerLokalu
     */
    protected $numerLokalu = null;

    /**
     * Pole dedykowane do wykorzystania na nalepkach
     *  adresowych przy określaniu punktu odbioru
     *
     * @var string $nazwaWydruk
     */
    protected $nazwaWydruk = null;

    /**
     * @var bool $punktWydaniaEPrzesylki
     */
    protected $punktWydaniaEPrzesylki = null;

    /**
     * @var bool $powiadomienieSMS
     */
    protected $powiadomienieSMS = null;

    /**
     * @var bool $punktWydaniaPrzesylkiBiznesowejPlus
     */
    protected $punktWydaniaPrzesylkiBiznesowejPlus = null;

    /**
     * @var bool $punktWydaniaPrzesylkiBiznesowej
     */
    protected $punktWydaniaPrzesylkiBiznesowej = null;

    /**
     * @var string $siecPlacowek
     */
    protected $siecPlacowek = null;

    /**
     * @var string $idZPO
     */
    protected $idZPO = null;

    /**
     * @var \Abryb\ENadawca\Type\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     */
    protected $lokalizacjaGeograficzna = null;

    /**
     * @var \Abryb\ENadawca\Type\GodzinyPracyType $godzinyPracy
     */
    protected $godzinyPracy = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var \Abryb\ENadawca\Type\DeliveryPathType $deliveryPath
     */
    protected $deliveryPath = null;

    /**
     * @var string $typ
     */
    protected $typ = null;

    /**
     * @var string[] $rodzajPlatnosci
     */
    protected $rodzajPlatnosci = [
        
    ];

    /**
     * @var string $funkcja
     */
    protected $funkcja = null;

    /**
     * @var int $maksymalnaKwotaPobrania
     */
    protected $maksymalnaKwotaPobrania = null;

    /**
     * Gets as id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param int $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as prefixNazwy
     *
     * @return string
     */
    public function getPrefixNazwy()
    {
        return $this->prefixNazwy;
    }

    /**
     * Sets a new prefixNazwy
     *
     * @param string $prefixNazwy
     * @return self
     */
    public function setPrefixNazwy($prefixNazwy)
    {
        $this->prefixNazwy = $prefixNazwy;
        return $this;
    }

    /**
     * Gets as nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Sets a new nazwa
     *
     * @param string $nazwa
     * @return self
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;
        return $this;
    }

    /**
     * Gets as wojewodztwo
     *
     * @return string
     */
    public function getWojewodztwo()
    {
        return $this->wojewodztwo;
    }

    /**
     * Sets a new wojewodztwo
     *
     * @param string $wojewodztwo
     * @return self
     */
    public function setWojewodztwo($wojewodztwo)
    {
        $this->wojewodztwo = $wojewodztwo;
        return $this;
    }

    /**
     * Gets as powiat
     *
     * @return string
     */
    public function getPowiat()
    {
        return $this->powiat;
    }

    /**
     * Sets a new powiat
     *
     * @param string $powiat
     * @return self
     */
    public function setPowiat($powiat)
    {
        $this->powiat = $powiat;
        return $this;
    }

    /**
     * Gets as miejsce
     *
     * @return string
     */
    public function getMiejsce()
    {
        return $this->miejsce;
    }

    /**
     * Sets a new miejsce
     *
     * @param string $miejsce
     * @return self
     */
    public function setMiejsce($miejsce)
    {
        $this->miejsce = $miejsce;
        return $this;
    }

    /**
     * Gets as kodPocztowy
     *
     * @return string
     */
    public function getKodPocztowy()
    {
        return $this->kodPocztowy;
    }

    /**
     * Sets a new kodPocztowy
     *
     * @param string $kodPocztowy
     * @return self
     */
    public function setKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy = $kodPocztowy;
        return $this;
    }

    /**
     * Gets as miejscowosc
     *
     * @return string
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Sets a new miejscowosc
     *
     * @param string $miejscowosc
     * @return self
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;
        return $this;
    }

    /**
     * Gets as ulica
     *
     * @return string
     */
    public function getUlica()
    {
        return $this->ulica;
    }

    /**
     * Sets a new ulica
     *
     * @param string $ulica
     * @return self
     */
    public function setUlica($ulica)
    {
        $this->ulica = $ulica;
        return $this;
    }

    /**
     * Gets as numerDomu
     *
     * @return string
     */
    public function getNumerDomu()
    {
        return $this->numerDomu;
    }

    /**
     * Sets a new numerDomu
     *
     * @param string $numerDomu
     * @return self
     */
    public function setNumerDomu($numerDomu)
    {
        $this->numerDomu = $numerDomu;
        return $this;
    }

    /**
     * Gets as numerLokalu
     *
     * @return string
     */
    public function getNumerLokalu()
    {
        return $this->numerLokalu;
    }

    /**
     * Sets a new numerLokalu
     *
     * @param string $numerLokalu
     * @return self
     */
    public function setNumerLokalu($numerLokalu)
    {
        $this->numerLokalu = $numerLokalu;
        return $this;
    }

    /**
     * Gets as nazwaWydruk
     *
     * Pole dedykowane do wykorzystania na nalepkach
     *  adresowych przy określaniu punktu odbioru
     *
     * @return string
     */
    public function getNazwaWydruk()
    {
        return $this->nazwaWydruk;
    }

    /**
     * Sets a new nazwaWydruk
     *
     * Pole dedykowane do wykorzystania na nalepkach
     *  adresowych przy określaniu punktu odbioru
     *
     * @param string $nazwaWydruk
     * @return self
     */
    public function setNazwaWydruk($nazwaWydruk)
    {
        $this->nazwaWydruk = $nazwaWydruk;
        return $this;
    }

    /**
     * Gets as punktWydaniaEPrzesylki
     *
     * @return bool
     */
    public function getPunktWydaniaEPrzesylki()
    {
        return $this->punktWydaniaEPrzesylki;
    }

    /**
     * Sets a new punktWydaniaEPrzesylki
     *
     * @param bool $punktWydaniaEPrzesylki
     * @return self
     */
    public function setPunktWydaniaEPrzesylki($punktWydaniaEPrzesylki)
    {
        $this->punktWydaniaEPrzesylki = $punktWydaniaEPrzesylki;
        return $this;
    }

    /**
     * Gets as powiadomienieSMS
     *
     * @return bool
     */
    public function getPowiadomienieSMS()
    {
        return $this->powiadomienieSMS;
    }

    /**
     * Sets a new powiadomienieSMS
     *
     * @param bool $powiadomienieSMS
     * @return self
     */
    public function setPowiadomienieSMS($powiadomienieSMS)
    {
        $this->powiadomienieSMS = $powiadomienieSMS;
        return $this;
    }

    /**
     * Gets as punktWydaniaPrzesylkiBiznesowejPlus
     *
     * @return bool
     */
    public function getPunktWydaniaPrzesylkiBiznesowejPlus()
    {
        return $this->punktWydaniaPrzesylkiBiznesowejPlus;
    }

    /**
     * Sets a new punktWydaniaPrzesylkiBiznesowejPlus
     *
     * @param bool $punktWydaniaPrzesylkiBiznesowejPlus
     * @return self
     */
    public function setPunktWydaniaPrzesylkiBiznesowejPlus($punktWydaniaPrzesylkiBiznesowejPlus)
    {
        $this->punktWydaniaPrzesylkiBiznesowejPlus = $punktWydaniaPrzesylkiBiznesowejPlus;
        return $this;
    }

    /**
     * Gets as punktWydaniaPrzesylkiBiznesowej
     *
     * @return bool
     */
    public function getPunktWydaniaPrzesylkiBiznesowej()
    {
        return $this->punktWydaniaPrzesylkiBiznesowej;
    }

    /**
     * Sets a new punktWydaniaPrzesylkiBiznesowej
     *
     * @param bool $punktWydaniaPrzesylkiBiznesowej
     * @return self
     */
    public function setPunktWydaniaPrzesylkiBiznesowej($punktWydaniaPrzesylkiBiznesowej)
    {
        $this->punktWydaniaPrzesylkiBiznesowej = $punktWydaniaPrzesylkiBiznesowej;
        return $this;
    }

    /**
     * Gets as siecPlacowek
     *
     * @return string
     */
    public function getSiecPlacowek()
    {
        return $this->siecPlacowek;
    }

    /**
     * Sets a new siecPlacowek
     *
     * @param string $siecPlacowek
     * @return self
     */
    public function setSiecPlacowek($siecPlacowek)
    {
        $this->siecPlacowek = $siecPlacowek;
        return $this;
    }

    /**
     * Gets as idZPO
     *
     * @return string
     */
    public function getIdZPO()
    {
        return $this->idZPO;
    }

    /**
     * Sets a new idZPO
     *
     * @param string $idZPO
     * @return self
     */
    public function setIdZPO($idZPO)
    {
        $this->idZPO = $idZPO;
        return $this;
    }

    /**
     * Gets as lokalizacjaGeograficzna
     *
     * @return \Abryb\ENadawca\Type\LokalizacjaGeograficznaType
     */
    public function getLokalizacjaGeograficzna()
    {
        return $this->lokalizacjaGeograficzna;
    }

    /**
     * Sets a new lokalizacjaGeograficzna
     *
     * @param \Abryb\ENadawca\Type\LokalizacjaGeograficznaType $lokalizacjaGeograficzna
     * @return self
     */
    public function setLokalizacjaGeograficzna(?\Abryb\ENadawca\Type\LokalizacjaGeograficznaType $lokalizacjaGeograficzna = null)
    {
        $this->lokalizacjaGeograficzna = $lokalizacjaGeograficzna;
        return $this;
    }

    /**
     * Gets as godzinyPracy
     *
     * @return \Abryb\ENadawca\Type\GodzinyPracyType
     */
    public function getGodzinyPracy()
    {
        return $this->godzinyPracy;
    }

    /**
     * Sets a new godzinyPracy
     *
     * @param \Abryb\ENadawca\Type\GodzinyPracyType $godzinyPracy
     * @return self
     */
    public function setGodzinyPracy(?\Abryb\ENadawca\Type\GodzinyPracyType $godzinyPracy = null)
    {
        $this->godzinyPracy = $godzinyPracy;
        return $this;
    }

    /**
     * Gets as opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Sets a new opis
     *
     * @param string $opis
     * @return self
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;
        return $this;
    }

    /**
     * Gets as deliveryPath
     *
     * @return \Abryb\ENadawca\Type\DeliveryPathType
     */
    public function getDeliveryPath()
    {
        return $this->deliveryPath;
    }

    /**
     * Sets a new deliveryPath
     *
     * @param \Abryb\ENadawca\Type\DeliveryPathType $deliveryPath
     * @return self
     */
    public function setDeliveryPath(?\Abryb\ENadawca\Type\DeliveryPathType $deliveryPath = null)
    {
        $this->deliveryPath = $deliveryPath;
        return $this;
    }

    /**
     * Gets as typ
     *
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Sets a new typ
     *
     * @param string $typ
     * @return self
     */
    public function setTyp($typ)
    {
        $this->typ = $typ;
        return $this;
    }

    /**
     * Adds as rodzajPlatnosci
     *
     * @return self
     * @param string $rodzajPlatnosci
     */
    public function addToRodzajPlatnosci($rodzajPlatnosci)
    {
        $this->rodzajPlatnosci[] = $rodzajPlatnosci;
        return $this;
    }

    /**
     * isset rodzajPlatnosci
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRodzajPlatnosci($index)
    {
        return isset($this->rodzajPlatnosci[$index]);
    }

    /**
     * unset rodzajPlatnosci
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRodzajPlatnosci($index)
    {
        unset($this->rodzajPlatnosci[$index]);
    }

    /**
     * Gets as rodzajPlatnosci
     *
     * @return string[]
     */
    public function getRodzajPlatnosci()
    {
        return $this->rodzajPlatnosci;
    }

    /**
     * Sets a new rodzajPlatnosci
     *
     * @param string $rodzajPlatnosci
     * @return self
     */
    public function setRodzajPlatnosci(array $rodzajPlatnosci = null)
    {
        $this->rodzajPlatnosci = $rodzajPlatnosci;
        return $this;
    }

    /**
     * Gets as funkcja
     *
     * @return string
     */
    public function getFunkcja()
    {
        return $this->funkcja;
    }

    /**
     * Sets a new funkcja
     *
     * @param string $funkcja
     * @return self
     */
    public function setFunkcja($funkcja)
    {
        $this->funkcja = $funkcja;
        return $this;
    }

    /**
     * Gets as maksymalnaKwotaPobrania
     *
     * @return int
     */
    public function getMaksymalnaKwotaPobrania()
    {
        return $this->maksymalnaKwotaPobrania;
    }

    /**
     * Sets a new maksymalnaKwotaPobrania
     *
     * @param int $maksymalnaKwotaPobrania
     * @return self
     */
    public function setMaksymalnaKwotaPobrania($maksymalnaKwotaPobrania)
    {
        $this->maksymalnaKwotaPobrania = $maksymalnaKwotaPobrania;
        return $this;
    }
}

