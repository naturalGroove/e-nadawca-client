<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing AddressLabelContentType
 *
 *
 * XSD Type: addressLabelContent
 */
class AddressLabelContentType
{
    /**
     * @var string $nrNadania
     */
    protected $nrNadania = null;

    /**
     * @var string $guid
     */
    protected $guid = null;

    /**
     * @var string $pdfContent
     */
    protected $pdfContent = null;

    /**
     * Gets as nrNadania
     *
     * @return string
     */
    public function getNrNadania()
    {
        return $this->nrNadania;
    }

    /**
     * Sets a new nrNadania
     *
     * @param string $nrNadania
     * @return self
     */
    public function setNrNadania($nrNadania)
    {
        $this->nrNadania = $nrNadania;
        return $this;
    }

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
     * Gets as pdfContent
     *
     * @return string
     */
    public function getPdfContent()
    {
        return $this->pdfContent;
    }

    /**
     * Sets a new pdfContent
     *
     * @param string $pdfContent
     * @return self
     */
    public function setPdfContent($pdfContent)
    {
        $this->pdfContent = $pdfContent;
        return $this;
    }
}

