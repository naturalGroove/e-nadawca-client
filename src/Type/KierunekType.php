<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing KierunekType
 *
 *
 * XSD Type: kierunekType
 */
class KierunekType
{
    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $opis
     */
    protected $opis = null;

    /**
     * @var string $pna
     */
    protected $pna = null;

    /**
     * @var string[] $kodPocztowy
     */
    protected $kodPocztowy = [
        
    ];

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
     * Gets as pna
     *
     * @return string
     */
    public function getPna()
    {
        return $this->pna;
    }

    /**
     * Sets a new pna
     *
     * @param string $pna
     * @return self
     */
    public function setPna($pna)
    {
        $this->pna = $pna;
        return $this;
    }

    /**
     * Adds as kodPocztowy
     *
     * @return self
     * @param string $kodPocztowy
     */
    public function addToKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy[] = $kodPocztowy;
        return $this;
    }

    /**
     * isset kodPocztowy
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKodPocztowy($index)
    {
        return isset($this->kodPocztowy[$index]);
    }

    /**
     * unset kodPocztowy
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKodPocztowy($index)
    {
        unset($this->kodPocztowy[$index]);
    }

    /**
     * Gets as kodPocztowy
     *
     * @return string[]
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
    public function setKodPocztowy(array $kodPocztowy = null)
    {
        $this->kodPocztowy = $kodPocztowy;
        return $this;
    }
}

