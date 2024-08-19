<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ZwrotDokumentowType
 *
 *
 * XSD Type: zwrotDokumentowType
 */
class ZwrotDokumentowType
{
    /**
     * @var int $odleglosc
     */
    protected $odleglosc = null;

    /**
     * @var string $rodzajPocztex
     */
    protected $rodzajPocztex = null;

    /**
     * @var \Abryb\ENadawca\Type\RodzajListType $rodzajList
     */
    protected $rodzajList = null;

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
     * Gets as rodzajPocztex
     *
     * @return string
     */
    public function getRodzajPocztex()
    {
        return $this->rodzajPocztex;
    }

    /**
     * Sets a new rodzajPocztex
     *
     * @param string $rodzajPocztex
     * @return self
     */
    public function setRodzajPocztex($rodzajPocztex)
    {
        $this->rodzajPocztex = $rodzajPocztex;
        return $this;
    }

    /**
     * Gets as rodzajList
     *
     * @return \Abryb\ENadawca\Type\RodzajListType
     */
    public function getRodzajList()
    {
        return $this->rodzajList;
    }

    /**
     * Sets a new rodzajList
     *
     * @param \Abryb\ENadawca\Type\RodzajListType $rodzajList
     * @return self
     */
    public function setRodzajList(?\Abryb\ENadawca\Type\RodzajListType $rodzajList = null)
    {
        $this->rodzajList = $rodzajList;
        return $this;
    }
}

