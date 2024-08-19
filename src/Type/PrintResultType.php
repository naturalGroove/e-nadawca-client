<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing PrintResultType
 *
 *
 * XSD Type: PrintResultType
 */
class PrintResultType
{
    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var string $print
     */
    protected $print = null;

    /**
     * Gets as guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * Gets as print
     *
     * @return string
     */
    public function getPrint()
    {
        return $this->print;
    }

    /**
     * Sets a new print
     *
     * @param string $print
     * @return self
     */
    public function setPrint($print)
    {
        $this->print = $print;
        return $this;
    }
}

