<?php

namespace Abryb\ENadawca\Type\GetPasswordExpiredDateResponse;

/**
 * Class representing GetPasswordExpiredDateResponseAType
 */
class GetPasswordExpiredDateResponseAType
{
    /**
     * @var \DateTime $dataWygasniecia
     */
    protected $dataWygasniecia = null;

    /**
     * Gets as dataWygasniecia
     *
     * @return \DateTime
     */
    public function getDataWygasniecia()
    {
        return $this->dataWygasniecia;
    }

    /**
     * Sets a new dataWygasniecia
     *
     * @param \DateTime $dataWygasniecia
     * @return self
     */
    public function setDataWygasniecia(\DateTime $dataWygasniecia)
    {
        $this->dataWygasniecia = $dataWygasniecia;
        return $this;
    }
}

