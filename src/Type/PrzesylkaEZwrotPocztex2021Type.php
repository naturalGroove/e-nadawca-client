<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrzesylkaEZwrotPocztex2021Type
 *
 *
 * XSD Type: przesylkaEZwrotPocztex2021Type
 */
class PrzesylkaEZwrotPocztex2021Type extends PrzesylkaRejestrowanaType
{
    /**
     * @var string $numerNadaniaZwrot
     */
    protected $numerNadaniaZwrot = null;

    /**
     * @var int $idSklepEZwrot
     */
    protected $idSklepEZwrot = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * Gets as numerNadaniaZwrot
     *
     * @return string
     */
    public function getNumerNadaniaZwrot()
    {
        return $this->numerNadaniaZwrot;
    }

    /**
     * Sets a new numerNadaniaZwrot
     *
     * @param string $numerNadaniaZwrot
     * @return self
     */
    public function setNumerNadaniaZwrot($numerNadaniaZwrot)
    {
        $this->numerNadaniaZwrot = $numerNadaniaZwrot;
        return $this;
    }

    /**
     * Gets as idSklepEZwrot
     *
     * @return int
     */
    public function getIdSklepEZwrot()
    {
        return $this->idSklepEZwrot;
    }

    /**
     * Sets a new idSklepEZwrot
     *
     * @param int $idSklepEZwrot
     * @return self
     */
    public function setIdSklepEZwrot($idSklepEZwrot)
    {
        $this->idSklepEZwrot = $idSklepEZwrot;
        return $this;
    }

    /**
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }
}

