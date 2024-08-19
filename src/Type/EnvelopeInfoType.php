<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing EnvelopeInfoType
 *
 *
 * XSD Type: envelopeInfoType
 */
class EnvelopeInfoType
{
    /**
     * @var int $idEnvelope
     */
    protected $idEnvelope = null;

    /**
     * @var string $envelopeStatus
     */
    protected $envelopeStatus = null;

    /**
     * @var \DateTime $dataTransmisji
     */
    protected $dataTransmisji = null;

    /**
     * @var \Abryb\ENadawca\Type\ErrorType[] $error
     */
    protected $error = [
        
    ];

    /**
     * @var string[] $envelopeFilename
     */
    protected $envelopeFilename = [
        
    ];

    /**
     * Gets as idEnvelope
     *
     * @return int
     */
    public function getIdEnvelope()
    {
        return $this->idEnvelope;
    }

    /**
     * Sets a new idEnvelope
     *
     * @param int $idEnvelope
     * @return self
     */
    public function setIdEnvelope($idEnvelope)
    {
        $this->idEnvelope = $idEnvelope;
        return $this;
    }

    /**
     * Gets as envelopeStatus
     *
     * @return string
     */
    public function getEnvelopeStatus()
    {
        return $this->envelopeStatus;
    }

    /**
     * Sets a new envelopeStatus
     *
     * @param string $envelopeStatus
     * @return self
     */
    public function setEnvelopeStatus($envelopeStatus)
    {
        $this->envelopeStatus = $envelopeStatus;
        return $this;
    }

    /**
     * Gets as dataTransmisji
     *
     * @return \DateTime
     */
    public function getDataTransmisji()
    {
        return $this->dataTransmisji;
    }

    /**
     * Sets a new dataTransmisji
     *
     * @param \DateTime $dataTransmisji
     * @return self
     */
    public function setDataTransmisji(\DateTime $dataTransmisji)
    {
        $this->dataTransmisji = $dataTransmisji;
        return $this;
    }

    /**
     * Adds as error
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ErrorType $error
     */
    public function addToError(\Abryb\ENadawca\Type\ErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return \Abryb\ENadawca\Type\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param \Abryb\ENadawca\Type\ErrorType[] $error
     * @return self
     */
    public function setError(array $error = null)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * Adds as envelopeFilename
     *
     * @return self
     * @param string $envelopeFilename
     */
    public function addToEnvelopeFilename($envelopeFilename)
    {
        $this->envelopeFilename[] = $envelopeFilename;
        return $this;
    }

    /**
     * isset envelopeFilename
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvelopeFilename($index)
    {
        return isset($this->envelopeFilename[$index]);
    }

    /**
     * unset envelopeFilename
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvelopeFilename($index)
    {
        unset($this->envelopeFilename[$index]);
    }

    /**
     * Gets as envelopeFilename
     *
     * @return string[]
     */
    public function getEnvelopeFilename()
    {
        return $this->envelopeFilename;
    }

    /**
     * Sets a new envelopeFilename
     *
     * @param string[] $envelopeFilename
     * @return self
     */
    public function setEnvelopeFilename(array $envelopeFilename = null)
    {
        $this->envelopeFilename = $envelopeFilename;
        return $this;
    }
}

