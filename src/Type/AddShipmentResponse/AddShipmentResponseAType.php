<?php

namespace Abryb\ENadawca\Type\AddShipmentResponse;

/**
 * Class representing AddShipmentResponseAType
 */
class AddShipmentResponseAType
{
    /**
     * @var \Abryb\ENadawca\Type\AddShipmentResponseItemType[] $retval
     */
    public $retval = [
        
    ];

    /**
     * Adds as retval
     *
     * @return self
     * @param \Abryb\ENadawca\Type\AddShipmentResponseItemType $retval
     */
    public function addToRetval(\Abryb\ENadawca\Type\AddShipmentResponseItemType $retval)
    {
        $this->retval[] = $retval;
        return $this;
    }

    /**
     * isset retval
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetval($index)
    {
        return isset($this->retval[$index]);
    }

    /**
     * unset retval
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetval($index)
    {
        unset($this->retval[$index]);
    }

    /**
     * Gets as retval
     *
     * @return \Abryb\ENadawca\Type\AddShipmentResponseItemType[]
     */
    public function getRetval()
    {
        return $this->retval;
    }

    /**
     * Sets a new retval
     *
     * @param \Abryb\ENadawca\Type\AddShipmentResponseItemType[] $retval
     * @return self
     */
    public function setRetval(array $retval)
    {
        $this->retval = $retval;
        return $this;
    }
}

