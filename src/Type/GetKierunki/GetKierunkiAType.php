<?php

namespace Abryb\ENadawca\Type\GetKierunki;

/**
 * Class representing GetKierunkiAType
 */
class GetKierunkiAType
{
    /**
     * @var string $plan
     */
    private $plan = null;

    /**
     * @var string $prefixKodPocztowy
     */
    private $prefixKodPocztowy = null;

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

    /**
     * Gets as prefixKodPocztowy
     *
     * @return string
     */
    public function getPrefixKodPocztowy()
    {
        return $this->prefixKodPocztowy;
    }

    /**
     * Sets a new prefixKodPocztowy
     *
     * @param string $prefixKodPocztowy
     * @return self
     */
    public function setPrefixKodPocztowy($prefixKodPocztowy)
    {
        $this->prefixKodPocztowy = $prefixKodPocztowy;
        return $this;
    }
}

