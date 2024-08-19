<?php

namespace Abryb\ENadawca\Type\GetKierunkiInfo;

/**
 * Class representing GetKierunkiInfoAType
 */
class GetKierunkiInfoAType
{
    /**
     * @var string $plan
     */
    private $plan = null;

    /**
     * Gets as plan
     *
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets a new plan
     *
     * @param string $plan
     * @return self
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }
}

