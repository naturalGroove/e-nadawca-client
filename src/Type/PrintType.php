<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrintType
 *
 *
 * XSD Type: PrintType
 */
class PrintType
{
    /**
     * @var string $kind
     */
    protected $kind = null;

    /**
     * @var string $method
     */
    protected $method = null;

    /**
     * @var string $format
     */
    protected $format = null;

    /**
     * @var string $resolution
     */
    protected $resolution = null;

    /**
     * Gets as kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * Sets a new kind
     *
     * @param string $kind
     * @return self
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
        return $this;
    }

    /**
     * Gets as method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * @param string $method
     * @return self
     */
    public function setMethod($method)
    {
        $this->method = $method;
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

    /**
     * Gets as resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Sets a new resolution
     *
     * @param string $resolution
     * @return self
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;
        return $this;
    }
}

