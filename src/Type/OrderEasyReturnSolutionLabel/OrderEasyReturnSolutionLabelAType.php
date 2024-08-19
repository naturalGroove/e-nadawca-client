<?php

namespace Abryb\ENadawca\Type\OrderEasyReturnSolutionLabel;

/**
 * Class representing OrderEasyReturnSolutionLabelAType
 */
class OrderEasyReturnSolutionLabelAType
{
    /**
     * @var \Abryb\ENadawca\Type\AddressType $senderAddress
     */
    private $senderAddress = null;

    /**
     * @var \Abryb\ENadawca\Type\AddressType $recipientAddress
     */
    private $recipientAddress = null;

    /**
     * Shipment weight [g].
     *
     * @var int $weight
     */
    private $weight = null;

    /**
     * @var \Abryb\ENadawca\Type\CustomsDeclarationType $customsDeclaration
     */
    private $customsDeclaration = null;

    /**
     * If not set, getPrintForParcel method should
     *  be used to get label.
     *
     * @var \Abryb\ENadawca\Type\DeliveryMethodType $deliveryMethod
     */
    private $deliveryMethod = null;

    /**
     * Description.
     *  maxLength: 30
     *
     * @var string $description
     */
    private $description = null;

    /**
     * Gets as senderAddress
     *
     * @return \Abryb\ENadawca\Type\AddressType
     */
    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * Sets a new senderAddress
     *
     * @param \Abryb\ENadawca\Type\AddressType $senderAddress
     * @return self
     */
    public function setSenderAddress(\Abryb\ENadawca\Type\AddressType $senderAddress)
    {
        $this->senderAddress = $senderAddress;
        return $this;
    }

    /**
     * Gets as recipientAddress
     *
     * @return \Abryb\ENadawca\Type\AddressType
     */
    public function getRecipientAddress()
    {
        return $this->recipientAddress;
    }

    /**
     * Sets a new recipientAddress
     *
     * @param \Abryb\ENadawca\Type\AddressType $recipientAddress
     * @return self
     */
    public function setRecipientAddress(\Abryb\ENadawca\Type\AddressType $recipientAddress)
    {
        $this->recipientAddress = $recipientAddress;
        return $this;
    }

    /**
     * Gets as weight
     *
     * Shipment weight [g].
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Shipment weight [g].
     *
     * @param int $weight
     * @return self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as customsDeclaration
     *
     * @return \Abryb\ENadawca\Type\CustomsDeclarationType
     */
    public function getCustomsDeclaration()
    {
        return $this->customsDeclaration;
    }

    /**
     * Sets a new customsDeclaration
     *
     * @param \Abryb\ENadawca\Type\CustomsDeclarationType $customsDeclaration
     * @return self
     */
    public function setCustomsDeclaration(?\Abryb\ENadawca\Type\CustomsDeclarationType $customsDeclaration = null)
    {
        $this->customsDeclaration = $customsDeclaration;
        return $this;
    }

    /**
     * Gets as deliveryMethod
     *
     * If not set, getPrintForParcel method should
     *  be used to get label.
     *
     * @return \Abryb\ENadawca\Type\DeliveryMethodType
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }

    /**
     * Sets a new deliveryMethod
     *
     * If not set, getPrintForParcel method should
     *  be used to get label.
     *
     * @param \Abryb\ENadawca\Type\DeliveryMethodType $deliveryMethod
     * @return self
     */
    public function setDeliveryMethod(?\Abryb\ENadawca\Type\DeliveryMethodType $deliveryMethod = null)
    {
        $this->deliveryMethod = $deliveryMethod;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description.
     *  maxLength: 30
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description.
     *  maxLength: 30
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}

