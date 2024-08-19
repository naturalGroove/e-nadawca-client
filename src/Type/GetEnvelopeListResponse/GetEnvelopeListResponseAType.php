<?php

namespace Abryb\ENadawca\Type\GetEnvelopeListResponse;

/**
 * Class representing GetEnvelopeListResponseAType
 */
class GetEnvelopeListResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\EnvelopeInfoType[] $envelopes
     */
    private $envelopes = [
        
    ];

    /**
     * Adds as envelopes
     *
     * @return self
     * @param \Abryb\ENadawca\Type\EnvelopeInfoType $envelopes
     */
    public function addToEnvelopes(\Abryb\ENadawca\Type\EnvelopeInfoType $envelopes)
    {
        $this->envelopes[] = $envelopes;
        return $this;
    }

    /**
     * isset envelopes
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEnvelopes($index)
    {
        return isset($this->envelopes[$index]);
    }

    /**
     * unset envelopes
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEnvelopes($index)
    {
        unset($this->envelopes[$index]);
    }

    /**
     * Gets as envelopes
     *
     * @return \Abryb\ENadawca\Type\EnvelopeInfoType[]
     */
    public function getEnvelopes()
    {
        return $this->envelopes;
    }

    /**
     * Sets a new envelopes
     *
     * @param \Abryb\ENadawca\Type\EnvelopeInfoType[] $envelopes
     * @return self
     */
    public function setEnvelopes(array $envelopes = null)
    {
        $this->envelopes = $envelopes;
        return $this;
    }
}

