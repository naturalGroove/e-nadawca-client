<?php

namespace Abryb\ENadawca\Type\GetReklamacje;

/**
 * Class representing GetReklamacjeAType
 */
class GetReklamacjeAType
{
    /**
     * @var \DateTime $dataRozpatrzenia
     */
    protected $dataRozpatrzenia = null;

    /**
     * @var string $guidPrzesylki
     */
    protected $guidPrzesylki = null;

    /**
     * @var \Abryb\ENadawca\Type\DataZlozeniaType $dataZlozenia
     */
    protected $dataZlozenia = null;

    /**
     * Gets as dataRozpatrzenia
     *
     * @return \DateTime
     */
    public function getDataRozpatrzenia()
    {
        return $this->dataRozpatrzenia;
    }

    /**
     * Sets a new dataRozpatrzenia
     *
     * @param \DateTime $dataRozpatrzenia
     * @return self
     */
    public function setDataRozpatrzenia(?\DateTime $dataRozpatrzenia = null)
    {
        $this->dataRozpatrzenia = $dataRozpatrzenia;
        return $this;
    }

    /**
     * Gets as guidPrzesylki
     *
     * @return string
     */
    public function getGuidPrzesylki()
    {
        return $this->guidPrzesylki;
    }

    /**
     * Sets a new guidPrzesylki
     *
     * @param string $guidPrzesylki
     * @return self
     */
    public function setGuidPrzesylki($guidPrzesylki)
    {
        $this->guidPrzesylki = $guidPrzesylki;
        return $this;
    }

    /**
     * Gets as dataZlozenia
     *
     * @return \Abryb\ENadawca\Type\DataZlozeniaType
     */
    public function getDataZlozenia()
    {
        return $this->dataZlozenia;
    }

    /**
     * Sets a new dataZlozenia
     *
     * @param \Abryb\ENadawca\Type\DataZlozeniaType $dataZlozenia
     * @return self
     */
    public function setDataZlozenia(?\Abryb\ENadawca\Type\DataZlozeniaType $dataZlozenia = null)
    {
        $this->dataZlozenia = $dataZlozenia;
        return $this;
    }
}

