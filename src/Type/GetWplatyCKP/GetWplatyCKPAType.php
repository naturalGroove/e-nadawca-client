<?php

namespace Abryb\ENadawca\Type\GetWplatyCKP;

/**
 * Class representing GetWplatyCKPAType
 */
class GetWplatyCKPAType
{
    /**
     * @var string $numerNadania
     */
    private $numerNadania = null;

    /**
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @var \DateTime $stopDate
     */
    private $stopDate = null;

    /**
     * Gets as numerNadania
     *
     * @return string
     */
    public function getNumerNadania()
    {
        return $this->numerNadania;
    }

    /**
     * Sets a new numerNadania
     *
     * @param string $numerNadania
     * @return self
     */
    public function setNumerNadania($numerNadania)
    {
        $this->numerNadania = $numerNadania;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(?\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as stopDate
     *
     * @return \DateTime
     */
    public function getStopDate()
    {
        return $this->stopDate;
    }

    /**
     * Sets a new stopDate
     *
     * @param \DateTime $stopDate
     * @return self
     */
    public function setStopDate(?\DateTime $stopDate = null)
    {
        $this->stopDate = $stopDate;
        return $this;
    }
}

