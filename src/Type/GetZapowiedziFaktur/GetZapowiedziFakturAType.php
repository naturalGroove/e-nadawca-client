<?php

namespace Abryb\ENadawca\Type\GetZapowiedziFaktur;

/**
 * Class representing GetZapowiedziFakturAType
 */
class GetZapowiedziFakturAType
{
    /**
     * @var \DateTime $data
     */
    protected $data = null;

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
}

