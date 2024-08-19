<?php

namespace Abryb\ENadawca\Type\IsMiejscowa;

/**
 * Class representing IsMiejscowaAType
 */
class IsMiejscowaAType
{
    /**
     * @var \Abryb\ENadawca\Type\TrasaRequestType[] $trasaRequest
     */
    private $trasaRequest = [
        
    ];

    /**
     * Adds as trasaRequest
     *
     * @return self
     * @param \Abryb\ENadawca\Type\TrasaRequestType $trasaRequest
     */
    public function addToTrasaRequest(\Abryb\ENadawca\Type\TrasaRequestType $trasaRequest)
    {
        $this->trasaRequest[] = $trasaRequest;
        return $this;
    }

    /**
     * isset trasaRequest
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrasaRequest($index)
    {
        return isset($this->trasaRequest[$index]);
    }

    /**
     * unset trasaRequest
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrasaRequest($index)
    {
        unset($this->trasaRequest[$index]);
    }

    /**
     * Gets as trasaRequest
     *
     * @return \Abryb\ENadawca\Type\TrasaRequestType[]
     */
    public function getTrasaRequest()
    {
        return $this->trasaRequest;
    }

    /**
     * Sets a new trasaRequest
     *
     * @param \Abryb\ENadawca\Type\TrasaRequestType[] $trasaRequest
     * @return self
     */
    public function setTrasaRequest(array $trasaRequest)
    {
        $this->trasaRequest = $trasaRequest;
        return $this;
    }
}

