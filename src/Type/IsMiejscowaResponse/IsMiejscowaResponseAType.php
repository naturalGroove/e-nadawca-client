<?php

namespace Abryb\ENadawca\Type\IsMiejscowaResponse;

/**
 * Class representing IsMiejscowaResponseAType
 */
class IsMiejscowaResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\TrasaResponseType[] $trasaResponse
     */
    private $trasaResponse = [
        
    ];

    /**
     * Adds as trasaResponse
     *
     * @return self
     * @param \Abryb\ENadawca\Type\TrasaResponseType $trasaResponse
     */
    public function addToTrasaResponse(\Abryb\ENadawca\Type\TrasaResponseType $trasaResponse)
    {
        $this->trasaResponse[] = $trasaResponse;
        return $this;
    }

    /**
     * isset trasaResponse
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTrasaResponse($index)
    {
        return isset($this->trasaResponse[$index]);
    }

    /**
     * unset trasaResponse
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTrasaResponse($index)
    {
        unset($this->trasaResponse[$index]);
    }

    /**
     * Gets as trasaResponse
     *
     * @return \Abryb\ENadawca\Type\TrasaResponseType[]
     */
    public function getTrasaResponse()
    {
        return $this->trasaResponse;
    }

    /**
     * Sets a new trasaResponse
     *
     * @param \Abryb\ENadawca\Type\TrasaResponseType[] $trasaResponse
     * @return self
     */
    public function setTrasaResponse(array $trasaResponse)
    {
        $this->trasaResponse = $trasaResponse;
        return $this;
    }
}

