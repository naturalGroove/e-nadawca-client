<?php

namespace Abryb\ENadawca\Type;

/**
 * Class representing ChecklistTemplateType
 *
 *
 * XSD Type: checklistTemplateType
 */
class ChecklistTemplateType
{
    /**
     * @var int $idChecklistTemplate
     */
    protected $idChecklistTemplate = null;

    /**
     * @var int $idKarta
     */
    protected $idKarta = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $title
     */
    protected $title = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $infoForCourier
     */
    protected $infoForCourier = null;

    /**
     * @var bool $default
     */
    protected $default = null;

    /**
     * @var \DateTime $validFrom
     */
    protected $validFrom = null;

    /**
     * @var \DateTime $validTo
     */
    protected $validTo = null;

    /**
     * @var string $logo
     */
    protected $logo = null;

    /**
     * @var string $service
     */
    protected $service = null;

    /**
     * @var \Abryb\ENadawca\Type\AdditionalActivityType[] $additionalActivity
     */
    protected $additionalActivity = [
        
    ];

    /**
     * GUID elementu checklistTemplate. Wartość
     *  wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     *
     * @var string $guid
     */
    protected $guid = null;

    /**
     * Gets as idChecklistTemplate
     *
     * @return int
     */
    public function getIdChecklistTemplate()
    {
        return $this->idChecklistTemplate;
    }

    /**
     * Sets a new idChecklistTemplate
     *
     * @param int $idChecklistTemplate
     * @return self
     */
    public function setIdChecklistTemplate($idChecklistTemplate)
    {
        $this->idChecklistTemplate = $idChecklistTemplate;
        return $this;
    }

    /**
     * Gets as idKarta
     *
     * @return int
     */
    public function getIdKarta()
    {
        return $this->idKarta;
    }

    /**
     * Sets a new idKarta
     *
     * @param int $idKarta
     * @return self
     */
    public function setIdKarta($idKarta)
    {
        $this->idKarta = $idKarta;
        return $this;
    }

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as description
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
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as infoForCourier
     *
     * @return string
     */
    public function getInfoForCourier()
    {
        return $this->infoForCourier;
    }

    /**
     * Sets a new infoForCourier
     *
     * @param string $infoForCourier
     * @return self
     */
    public function setInfoForCourier($infoForCourier)
    {
        $this->infoForCourier = $infoForCourier;
        return $this;
    }

    /**
     * Gets as default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }

    /**
     * Sets a new default
     *
     * @param bool $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * Gets as validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Sets a new validFrom
     *
     * @param \DateTime $validFrom
     * @return self
     */
    public function setValidFrom(?\DateTime $validFrom = null)
    {
        $this->validFrom = $validFrom;
        return $this;
    }

    /**
     * Gets as validTo
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return $this->validTo;
    }

    /**
     * Sets a new validTo
     *
     * @param \DateTime $validTo
     * @return self
     */
    public function setValidTo(?\DateTime $validTo = null)
    {
        $this->validTo = $validTo;
        return $this;
    }

    /**
     * Gets as logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Sets a new logo
     *
     * @param string $logo
     * @return self
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
        return $this;
    }

    /**
     * Gets as service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * @param string $service
     * @return self
     */
    public function setService($service)
    {
        $this->service = $service;
        return $this;
    }

    /**
     * Adds as additionalActivity
     *
     * @return self
     * @param \Abryb\ENadawca\Type\AdditionalActivityType $additionalActivity
     */
    public function addToAdditionalActivity(\Abryb\ENadawca\Type\AdditionalActivityType $additionalActivity)
    {
        $this->additionalActivity[] = $additionalActivity;
        return $this;
    }

    /**
     * isset additionalActivity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalActivity($index)
    {
        return isset($this->additionalActivity[$index]);
    }

    /**
     * unset additionalActivity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalActivity($index)
    {
        unset($this->additionalActivity[$index]);
    }

    /**
     * Gets as additionalActivity
     *
     * @return \Abryb\ENadawca\Type\AdditionalActivityType[]
     */
    public function getAdditionalActivity()
    {
        return $this->additionalActivity;
    }

    /**
     * Sets a new additionalActivity
     *
     * @param \Abryb\ENadawca\Type\AdditionalActivityType[] $additionalActivity
     * @return self
     */
    public function setAdditionalActivity(array $additionalActivity = null)
    {
        $this->additionalActivity = $additionalActivity;
        return $this;
    }

    /**
     * Gets as guid
     *
     * GUID elementu checklistTemplate. Wartość
     *  wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * GUID elementu checklistTemplate. Wartość
     *  wykorzystywana do przekazania rezultatu dla elementu kolekcji.
     *
     * @param string $guid
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }
}

