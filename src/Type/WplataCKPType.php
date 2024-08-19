<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing WplataCKPType
 *
 *
 * XSD Type: wplataCKPType
 */
class WplataCKPType
{
    /**
     * @var string $unikalnyIdentyfikatorWplaty
     */
    protected $unikalnyIdentyfikatorWplaty = null;

    /**
     * @var string $numerNadania
     */
    protected $numerNadania = null;

    /**
     * Kwota w groszach
     *
     * @var int $kwota
     */
    protected $kwota = null;

    /**
     * @var \DateTime $dataPobrania
     */
    protected $dataPobrania = null;

    /**
     * @var \DateTime $dataPrzelewu
     */
    protected $dataPrzelewu = null;

    /**
     * @var int $idUmowy
     */
    protected $idUmowy = null;

    /**
     * @var string $tytulPrzelewuZbiorczego
     */
    protected $tytulPrzelewuZbiorczego = null;

    /**
     * @var string $tytulPobrania
     */
    protected $tytulPobrania = null;

    /**
     * Gets as unikalnyIdentyfikatorWplaty
     *
     * @return string
     */
    public function getUnikalnyIdentyfikatorWplaty()
    {
        return $this->unikalnyIdentyfikatorWplaty;
    }

    /**
     * Sets a new unikalnyIdentyfikatorWplaty
     *
     * @param string $unikalnyIdentyfikatorWplaty
     * @return self
     */
    public function setUnikalnyIdentyfikatorWplaty($unikalnyIdentyfikatorWplaty)
    {
        $this->unikalnyIdentyfikatorWplaty = $unikalnyIdentyfikatorWplaty;
        return $this;
    }

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;
        return $this;
    }

    /**
     * Gets as kwota
     *
     * Kwota w groszach
     *
     * @return int
     */
    public function getKwota()
    {
        return $this->kwota;
    }

    /**
     * Sets a new kwota
     *
     * Kwota w groszach
     *
     * @param int $kwota
     * @return self
     */
    public function setKwota($kwota)
    {
        $this->kwota = $kwota;
        return $this;
    }

    /**
     * Gets as dataPobrania
     *
     * @return \DateTime
     */
    public function getDataPobrania()
    {
        return $this->dataPobrania;
    }

    /**
     * Sets a new dataPobrania
     *
     * @param \DateTime $dataPobrania
     * @return self
     */
    public function setDataPobrania(\DateTime $dataPobrania)
    {
        $this->dataPobrania = $dataPobrania;
        return $this;
    }

    /**
     * Gets as dataPrzelewu
     *
     * @return \DateTime
     */
    public function getDataPrzelewu()
    {
        return $this->dataPrzelewu;
    }

    /**
     * Sets a new dataPrzelewu
     *
     * @param \DateTime $dataPrzelewu
     * @return self
     */
    public function setDataPrzelewu(\DateTime $dataPrzelewu)
    {
        $this->dataPrzelewu = $dataPrzelewu;
        return $this;
    }

    /**
     * Gets as idUmowy
     *
     * @return int
     */
    public function getIdUmowy()
    {
        return $this->idUmowy;
    }

    /**
     * Sets a new idUmowy
     *
     * @param int $idUmowy
     * @return self
     */
    public function setIdUmowy($idUmowy)
    {
        $this->idUmowy = $idUmowy;
        return $this;
    }

    /**
     * Gets as tytulPrzelewuZbiorczego
     *
     * @return string
     */
    public function getTytulPrzelewuZbiorczego()
    {
        return $this->tytulPrzelewuZbiorczego;
    }

    /**
     * Sets a new tytulPrzelewuZbiorczego
     *
     * @param string $tytulPrzelewuZbiorczego
     * @return self
     */
    public function setTytulPrzelewuZbiorczego($tytulPrzelewuZbiorczego)
    {
        $this->tytulPrzelewuZbiorczego = $tytulPrzelewuZbiorczego;
        return $this;
    }

    /**
     * Gets as tytulPobrania
     *
     * @return string
     */
    public function getTytulPobrania()
    {
        return $this->tytulPobrania;
    }

    /**
     * Sets a new tytulPobrania
     *
     * @param string $tytulPobrania
     * @return self
     */
    public function setTytulPobrania($tytulPobrania)
    {
        $this->tytulPobrania = $tytulPobrania;
        return $this;
    }
}

