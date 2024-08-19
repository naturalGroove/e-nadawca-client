<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ProduktInKartaType
 *
 *
 * XSD Type: produktInKartaType
 */
class ProduktInKartaType
{
    /**
     * @var string $symbolIWD
     */
    protected $symbolIWD = null;

    /**
     * @var string $nazwaWyswietlana
     */
    protected $nazwaWyswietlana = null;

    /**
     * @var string $nazwaProduktu
     */
    protected $nazwaProduktu = null;

    /**
     * Gets as symbolIWD
     *
     * @return string
     */
    public function getSymbolIWD()
    {
        return $this->symbolIWD;
    }

    /**
     * Sets a new symbolIWD
     *
     * @param string $symbolIWD
     * @return self
     */
    public function setSymbolIWD($symbolIWD)
    {
        $this->symbolIWD = $symbolIWD;
        return $this;
    }

    /**
     * Gets as nazwaWyswietlana
     *
     * @return string
     */
    public function getNazwaWyswietlana()
    {
        return $this->nazwaWyswietlana;
    }

    /**
     * Sets a new nazwaWyswietlana
     *
     * @param string $nazwaWyswietlana
     * @return self
     */
    public function setNazwaWyswietlana($nazwaWyswietlana)
    {
        $this->nazwaWyswietlana = $nazwaWyswietlana;
        return $this;
    }

    /**
     * Gets as nazwaProduktu
     *
     * @return string
     */
    public function getNazwaProduktu()
    {
        return $this->nazwaProduktu;
    }

    /**
     * Sets a new nazwaProduktu
     *
     * @param string $nazwaProduktu
     * @return self
     */
    public function setNazwaProduktu($nazwaProduktu)
    {
        $this->nazwaProduktu = $nazwaProduktu;
        return $this;
    }
}

