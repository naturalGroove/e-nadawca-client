<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing EMSType
 *
 *
 * XSD Type: EMSType
 */
class EMSType extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $typOpakowania
     */
    protected $typOpakowania = null;

    /**
     * @var int $masa
     */
    protected $masa = null;

    /**
     * @var bool $zalaczoneDokumenty
     */
    protected $zalaczoneDokumenty = null;

    /**
     * @var string $numerPrzesylkiKlienta
     */
    protected $numerPrzesylkiKlienta = null;

    /**
     * @var \Abryb\ENadawca\Type\UbezpieczenieType $ubezpieczenie
     */
    protected $ubezpieczenie = null;

    /**
     * Deklaracja celna - "deprecated"
     *  - zalecane
     *  jest ustawianie
     *  elementu deklaracjaCelna2
     *
     * @var \Abryb\ENadawca\Type\DeklaracjaCelnaType $deklaracjaCelna
     */
    protected $deklaracjaCelna = null;

    /**
     * @var \Abryb\ENadawca\Type\PotwierdzenieDoreczeniaType $potwierdzenieDoreczenia
     */
    protected $potwierdzenieDoreczenia = null;

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
     * Gets as typOpakowania
     *
     * @return string
     */
    public function getTypOpakowania()
    {
        return $this->typOpakowania;
    }

    /**
     * Sets a new typOpakowania
     *
     * @param string $typOpakowania
     * @return self
     */
    public function setTypOpakowania($typOpakowania)
    {
        $this->typOpakowania = $typOpakowania;
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
     * Gets as zalaczoneDokumenty
     *
     * @return bool
     */
    public function getZalaczoneDokumenty()
    {
        return $this->zalaczoneDokumenty;
    }

    /**
     * Sets a new zalaczoneDokumenty
     *
     * @param bool $zalaczoneDokumenty
     * @return self
     */
    public function setZalaczoneDokumenty($zalaczoneDokumenty)
    {
        $this->zalaczoneDokumenty = $zalaczoneDokumenty;
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
     * Gets as deklaracjaCelna
     *
     * Deklaracja celna - "deprecated"
     *  - zalecane
     *  jest ustawianie
     *  elementu deklaracjaCelna2
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
     * Deklaracja celna - "deprecated"
     *  - zalecane
     *  jest ustawianie
     *  elementu deklaracjaCelna2
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

