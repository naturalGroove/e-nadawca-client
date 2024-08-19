<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing DeliveryPathType
 *
 *
 * XSD Type: deliveryPathType
 */
class DeliveryPathType
{
    /**
     * @var string $endNode
     */
    protected $endNode = null;

    /**
     * @var string $targetingNode
     */
    protected $targetingNode = null;

    /**
     * @var string $assistantNode
     */
    protected $assistantNode = null;

    /**
     * @var string $reloadingPoint
     */
    protected $reloadingPoint = null;

    /**
     * @var string $postOffice
     */
    protected $postOffice = null;

    /**
     * @var string $deliveryRegion
     */
    protected $deliveryRegion = null;

    /**
     * Gets as endNode
     *
     * @return string
     */
    public function getEndNode()
    {
        return $this->endNode;
    }

    /**
     * Sets a new endNode
     *
     * @param string $endNode
     * @return self
     */
    public function setEndNode($endNode)
    {
        $this->endNode = $endNode;
        return $this;
    }

    /**
     * Gets as targetingNode
     *
     * @return string
     */
    public function getTargetingNode()
    {
        return $this->targetingNode;
    }

    /**
     * Sets a new targetingNode
     *
     * @param string $targetingNode
     * @return self
     */
    public function setTargetingNode($targetingNode)
    {
        $this->targetingNode = $targetingNode;
        return $this;
    }

    /**
     * Gets as assistantNode
     *
     * @return string
     */
    public function getAssistantNode()
    {
        return $this->assistantNode;
    }

    /**
     * Sets a new assistantNode
     *
     * @param string $assistantNode
     * @return self
     */
    public function setAssistantNode($assistantNode)
    {
        $this->assistantNode = $assistantNode;
        return $this;
    }

    /**
     * Gets as reloadingPoint
     *
     * @return string
     */
    public function getReloadingPoint()
    {
        return $this->reloadingPoint;
    }

    /**
     * Sets a new reloadingPoint
     *
     * @param string $reloadingPoint
     * @return self
     */
    public function setReloadingPoint($reloadingPoint)
    {
        $this->reloadingPoint = $reloadingPoint;
        return $this;
    }

    /**
     * Gets as postOffice
     *
     * @return string
     */
    public function getPostOffice()
    {
        return $this->postOffice;
    }

    /**
     * Sets a new postOffice
     *
     * @param string $postOffice
     * @return self
     */
    public function setPostOffice($postOffice)
    {
        $this->postOffice = $postOffice;
        return $this;
    }

    /**
     * Gets as deliveryRegion
     *
     * @return string
     */
    public function getDeliveryRegion()
    {
        return $this->deliveryRegion;
    }

    /**
     * Sets a new deliveryRegion
     *
     * @param string $deliveryRegion
     * @return self
     */
    public function setDeliveryRegion($deliveryRegion)
    {
        $this->deliveryRegion = $deliveryRegion;
        return $this;
    }
}

