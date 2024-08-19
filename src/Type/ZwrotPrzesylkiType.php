<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ZwrotPrzesylkiType
 *
 *
 * XSD Type: zwrotPrzesylkiType
 */
class ZwrotPrzesylkiType
{
    /**
     * @var string $przyczyna
     */
    protected $przyczyna = null;

    /**
     * @var \DateTime $data
     */
    protected $data = null;

    /**
     * Dodatkowy opisowy powód zwrotu przesyłki
     *
     * @var string $przyczynaZwrotuDodatkowa
     */
    protected $przyczynaZwrotuDodatkowa = null;

    /**
     * Gets as przyczyna
     *
     * @return string
     */
    public function getPrzyczyna()
    {
        return $this->przyczyna;
    }

    /**
     * Sets a new przyczyna
     *
     * @param string $przyczyna
     * @return self
     */
    public function setPrzyczyna($przyczyna)
    {
        $this->przyczyna = $przyczyna;
        return $this;
    }

    /**
     * Gets as data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param \DateTime $data
     * @return self
     */
    public function setData(\DateTime $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as przyczynaZwrotuDodatkowa
     *
     * Dodatkowy opisowy powód zwrotu przesyłki
     *
     * @return string
     */
    public function getPrzyczynaZwrotuDodatkowa()
    {
        return $this->przyczynaZwrotuDodatkowa;
    }

    /**
     * Sets a new przyczynaZwrotuDodatkowa
     *
     * Dodatkowy opisowy powód zwrotu przesyłki
     *
     * @param string $przyczynaZwrotuDodatkowa
     * @return self
     */
    public function setPrzyczynaZwrotuDodatkowa($przyczynaZwrotuDodatkowa)
    {
        $this->przyczynaZwrotuDodatkowa = $przyczynaZwrotuDodatkowa;
        return $this;
    }
}

