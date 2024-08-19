<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ZwrotDokumentowKurierskaType
 *
 *
 * XSD Type: zwrotDokumentowKurierskaType
 */
class ZwrotDokumentowKurierskaType
{
    /**
     * @var string $rodzajPocztex
     */
    protected $rodzajPocztex = null;

    /**
     * @var \Abryb\ENadawca\Type\RodzajListType $rodzajList
     */
    protected $rodzajList = null;

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

