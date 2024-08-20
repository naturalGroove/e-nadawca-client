<?php

namespace Abryb\ENadawca\Type\GetEZDOListResponse;

/**
 * Class representing GetEZDOListResponseAType
 */
class GetEZDOListResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\EZDOPakietType[] $eZDOPakiet
     */
    protected $eZDOPakiet = [
        
    ];

    /**
     * Adds as eZDOPakiet
     *
     * @return self
     * @param \Abryb\ENadawca\Type\EZDOPakietType $eZDOPakiet
     */
    public function addToEZDOPakiet(\Abryb\ENadawca\Type\EZDOPakietType $eZDOPakiet)
    {
        $this->eZDOPakiet[] = $eZDOPakiet;
        return $this;
    }

    /**
     * isset eZDOPakiet
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEZDOPakiet($index)
    {
        return isset($this->eZDOPakiet[$index]);
    }

    /**
     * unset eZDOPakiet
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEZDOPakiet($index)
    {
        unset($this->eZDOPakiet[$index]);
    }

    /**
     * Gets as eZDOPakiet
     *
     * @return \Abryb\ENadawca\Type\EZDOPakietType[]
     */
    public function getEZDOPakiet()
    {
        return $this->eZDOPakiet;
    }

    /**
     * Sets a new eZDOPakiet
     *
     * @param \Abryb\ENadawca\Type\EZDOPakietType[] $eZDOPakiet
     * @return self
     */
    public function setEZDOPakiet(array $eZDOPakiet = null)
    {
        $this->eZDOPakiet = $eZDOPakiet;
        return $this;
    }
}

