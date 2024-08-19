<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing CustomsDeclarationType
 *
 *
 * XSD Type: CustomsDeclarationType
 */
class CustomsDeclarationType
{
    /**
     * CN type.
     *
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var \Abryb\ENadawca\Type\AccompanyingDocumentsType[] $accompanyingDocuments
     */
    protected $accompanyingDocuments = [
        
    ];

    /**
     * @var string $explanation
     */
    protected $explanation = null;

    /**
     * @var string $postalCharges
     */
    protected $postalCharges = null;

    /**
     * @var string $comments
     */
    protected $comments = null;

    /**
     * @var string $importerReferenceNumber
     */
    protected $importerReferenceNumber = null;

    /**
     * @var string $importerPhoneNumber
     */
    protected $importerPhoneNumber = null;

    /**
     * Code (ISO 4217) of the currency in which the
     *  values of the items specified in the shipmentContentsDetails
     *  element are expressed.
     *  example: EUR
     *
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var \Abryb\ENadawca\Type\ShipmentContentsDetailsType[] $shipmentContentsDetails
     */
    protected $shipmentContentsDetails = [
        
    ];

    /**
     * @var string $customsReferenceNumber
     */
    protected $customsReferenceNumber = null;

    /**
     * Gets as type
     *
     * CN type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * CN type.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets a new content
     *
     * @param string $content
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * Adds as accompanyingDocuments
     *
     * @return self
     * @param \Abryb\ENadawca\Type\AccompanyingDocumentsType $accompanyingDocuments
     */
    public function addToAccompanyingDocuments(\Abryb\ENadawca\Type\AccompanyingDocumentsType $accompanyingDocuments)
    {
        $this->accompanyingDocuments[] = $accompanyingDocuments;
        return $this;
    }

    /**
     * isset accompanyingDocuments
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccompanyingDocuments($index)
    {
        return isset($this->accompanyingDocuments[$index]);
    }

    /**
     * unset accompanyingDocuments
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccompanyingDocuments($index)
    {
        unset($this->accompanyingDocuments[$index]);
    }

    /**
     * Gets as accompanyingDocuments
     *
     * @return \Abryb\ENadawca\Type\AccompanyingDocumentsType[]
     */
    public function getAccompanyingDocuments()
    {
        return $this->accompanyingDocuments;
    }

    /**
     * Sets a new accompanyingDocuments
     *
     * @param \Abryb\ENadawca\Type\AccompanyingDocumentsType[] $accompanyingDocuments
     * @return self
     */
    public function setAccompanyingDocuments(array $accompanyingDocuments = null)
    {
        $this->accompanyingDocuments = $accompanyingDocuments;
        return $this;
    }

    /**
     * Gets as explanation
     *
     * @return string
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * Sets a new explanation
     *
     * @param string $explanation
     * @return self
     */
    public function setExplanation($explanation)
    {
        $this->explanation = $explanation;
        return $this;
    }

    /**
     * Gets as postalCharges
     *
     * @return string
     */
    public function getPostalCharges()
    {
        return $this->postalCharges;
    }

    /**
     * Sets a new postalCharges
     *
     * @param string $postalCharges
     * @return self
     */
    public function setPostalCharges($postalCharges)
    {
        $this->postalCharges = $postalCharges;
        return $this;
    }

    /**
     * Gets as comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param string $comments
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Gets as importerReferenceNumber
     *
     * @return string
     */
    public function getImporterReferenceNumber()
    {
        return $this->importerReferenceNumber;
    }

    /**
     * Sets a new importerReferenceNumber
     *
     * @param string $importerReferenceNumber
     * @return self
     */
    public function setImporterReferenceNumber($importerReferenceNumber)
    {
        $this->importerReferenceNumber = $importerReferenceNumber;
        return $this;
    }

    /**
     * Gets as importerPhoneNumber
     *
     * @return string
     */
    public function getImporterPhoneNumber()
    {
        return $this->importerPhoneNumber;
    }

    /**
     * Sets a new importerPhoneNumber
     *
     * @param string $importerPhoneNumber
     * @return self
     */
    public function setImporterPhoneNumber($importerPhoneNumber)
    {
        $this->importerPhoneNumber = $importerPhoneNumber;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * Code (ISO 4217) of the currency in which the
     *  values of the items specified in the shipmentContentsDetails
     *  element are expressed.
     *  example: EUR
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * Code (ISO 4217) of the currency in which the
     *  values of the items specified in the shipmentContentsDetails
     *  element are expressed.
     *  example: EUR
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Adds as shipmentContentsDetails
     *
     * @return self
     * @param \Abryb\ENadawca\Type\ShipmentContentsDetailsType $shipmentContentsDetails
     */
    public function addToShipmentContentsDetails(\Abryb\ENadawca\Type\ShipmentContentsDetailsType $shipmentContentsDetails)
    {
        $this->shipmentContentsDetails[] = $shipmentContentsDetails;
        return $this;
    }

    /**
     * isset shipmentContentsDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipmentContentsDetails($index)
    {
        return isset($this->shipmentContentsDetails[$index]);
    }

    /**
     * unset shipmentContentsDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipmentContentsDetails($index)
    {
        unset($this->shipmentContentsDetails[$index]);
    }

    /**
     * Gets as shipmentContentsDetails
     *
     * @return \Abryb\ENadawca\Type\ShipmentContentsDetailsType[]
     */
    public function getShipmentContentsDetails()
    {
        return $this->shipmentContentsDetails;
    }

    /**
     * Sets a new shipmentContentsDetails
     *
     * @param \Abryb\ENadawca\Type\ShipmentContentsDetailsType[] $shipmentContentsDetails
     * @return self
     */
    public function setShipmentContentsDetails(array $shipmentContentsDetails)
    {
        $this->shipmentContentsDetails = $shipmentContentsDetails;
        return $this;
    }

    /**
     * Gets as customsReferenceNumber
     *
     * @return string
     */
    public function getCustomsReferenceNumber()
    {
        return $this->customsReferenceNumber;
    }

    /**
     * Sets a new customsReferenceNumber
     *
     * @param string $customsReferenceNumber
     * @return self
     */
    public function setCustomsReferenceNumber($customsReferenceNumber)
    {
        $this->customsReferenceNumber = $customsReferenceNumber;
        return $this;
    }
}

